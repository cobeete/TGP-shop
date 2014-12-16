<?php
/*
Trusted Shops GmbH
*/

include(_PS_MODULE_DIR_.'trustedshops/lib/TrustedShopsSoapApi.php');

class TrustedShopsRating extends AbsTrustedShops
{
	const APPLY_URL = 'https://www.trustedshops.com/buyerrating/signup.html';
	const PARTNER_PACKAGE = 'presta';
	const SHOP_SW = 'PrestaShop';
	const PREFIX_ACTIF_CONF_NAME = 'TS_TAB0_ID_ACTIVE_';
	const PREFIX_CONF_NAME = 'TS_TAB0_ID_';

	private $allowed_languages = array();
	private $available_languages = array('en', 'gb', 'fr', 'de', 'es', 'it', 'pl');

	private $rating_url_base = array(
		'en' => 'https://www.trustedshops.com/buyerrating/rate_',
		'gb' => 'https://www.trustedshops.co.uk/buyerrating/rate_',
		'de' => 'https://www.trustedshops.com/bewertung/bewerten_',
		'fr' => 'https://www.trustedshops.fr/evaluation/evaluer_',
		'es' => 'https://www.trustedshops.es/evaluacion/evaluar_',
		'it' => 'https://www.trustedshops.it/valutazione-del-negozio/rate_',
		'pl' => 'https://www.trustedshops.pl/opinia/ocen_'
	);

	private $apply_url_base = array(
		'en' => 'https://www.trustedshops.com/buyerrating/signup.html',
		'gb' => 'https://www.trustedshops.co.uk/buyerrating/signup.html',
		'de' => 'https://www.trustedshops.com/bewertung/anmeldung.html',
		'fr' => 'https://www.trustedshops.fr/evaluation/inscription.html',
		'es' => 'https://www.trustedshops.es/comerciante/'
	);

	private $apply_url_tracker = array(
		'en' => '&et_cid=53&et_lid=3361',
		'gb' => '&et_cid=53&et_lid=3361',
		'de' => '',
		'fr' => '&et_cid=53&et_lid=3362',
		'es' => ''
	);

	private $error_soap_call;

	public function __construct()
	{
		$this->tab_name = $this->l('Trusted Shops customer rating');

		// @todo : That gonna be change - Be worry it's false, countries have not the same ISO code as Languages, waiting Truste Shop's answer
		$this->limited_countries = $this->available_languages;
	}

	public function install()
	{
		foreach ($this->available_languages AS $language)
		{
			Configuration::updateValue(self::PREFIX_CONF_NAME.(int)(Language::getIdByIso($language)), '');
			Configuration::updateValue(self::PREFIX_ACTIF_CONF_NAME.(int)(Language::getIdByIso($language)), '');
		}

	
		Configuration::updateValue('TS_TAB0_REVBADGE_YOFFSET', '');
		return (Configuration::updateValue('PS_TS_TAB0_SECURE_KEY', strtoupper(Tools::passwdGen(16))));;
		
	}


	public function uninstall()
	{
		foreach ($this->available_languages AS $language)
		{
			Configuration::deleteByName(self::PREFIX_CONF_NAME.(int)(Language::getIdByIso($language)));
			Configuration::deleteByName(self::PREFIX_ACTIF_CONF_NAME.(int)(Language::getIdByIso($language)));
		}

	
		Configuration::deleteByName('TS_TAB0_REVBADGE_YOFFSET');
		return (Configuration::deleteByName('PS_TS_TAB0_SECURE_KEY'));
	
	}

	private function _initAllowedLanguages()
	{
		$languages = Language::getLanguages();

		foreach ($languages as $key => $language)
			if (in_array($language['iso_code'], $this->available_languages))
				$this->allowed_languages[] = $languages[$key];
	}


	public static function getHttpHost($http = false, $entities = false)
	{
		if (method_exists('Tools', 'getHttpHost'))
			return call_user_func(array('Tools', 'getHttpHost'), array($http, $entities));

		$host = (isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST']);

		if ($entities)
			$host = htmlspecialchars($host, ENT_COMPAT, 'UTF-8');
		if ($http)
			$host = (Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://').$host;

		return $host;
	}

	private function _isTsIdActive($id_lang, $ts_id = NULL)
	{
		if (is_null($ts_id))
			$ts_id = Configuration::get(self::PREFIX_CONF_NAME.(int)$id_lang);

		return (!empty($ts_id) AND ($ts_id == Configuration::get(self::PREFIX_ACTIF_CONF_NAME.$id_lang)));
	}

	// Return true if at least one TS_ID is active
	private function _isConfigurable()
	{
		foreach ($this->allowed_languages AS $language)
			if ($this->_isTsIdActive($language['id_lang']))
				return true;

		return false;
	}

	private function _getLastOrderId($id_customer)
	{
		$query = 'SELECT  `id_order` '.
			'FROM `'._DB_PREFIX_.'orders` '.
			'WHERE `id_customer` = '.(int)$id_customer.' '.
			'ORDER BY `date_add` DESC';

		return (int)Db::getInstance()->getValue($query);
	}

	private function _getAllowedIsobyId($id_lang)
	{
		$lang = Language::getIsoById($id_lang);
		$lang = in_array($lang, $this->available_languages) ? $lang : 'en';

		return $lang;
	}

	public function getContent()
	{
		$this->_initAllowedLanguages();

		if (is_writable(_PS_MODULE_DIR_.'trustedshops/cache') === FALSE)
			$this->errors[] = $this->l('This module requires write and read permissions on the module cache directory.');

		if (Tools::isSubmit('submitTrustedShops') && $this->_validateForm())
				$this->_postProcess();

	//	$out = $this->displayInformationsPage();
		$out = $this->displayForm();

		return $out;
	}

	/**
	 * Reset all data for new submited tsid even if it's the same one
	 * @param $id_lang
	 */
public function resetTSID($id_lang)
	{
		Configuration::deleteByName(self::PREFIX_CONF_NAME.(int)$id_lang, '');
		Configuration::deleteByName(self::PREFIX_ACTIF_CONF_NAME.(int)$id_lang, '');
	
	}

	private function _validateForm()
	{
		if (!extension_loaded('soap'))
		{
			$this->errors[] = $this->l('This module requires the SOAP PHP extension to work properly.');
			return false;
		}

		foreach ($this->allowed_languages AS $language)
		{
			$ts_id = Tools::getValue('trusted_shops_id_'.(int)$language['id_lang']);
			if (!empty($ts_id))
			{
				if (!preg_match('/^[[:alnum:]]{33}$/', $ts_id))
					$this->errors[] = $this->l('Invalid Trusted Shops ID').' ['.$language['iso_code'].']';
				else if (!$this->_isTsIdActive((int)$language['id_lang'], $ts_id))
				{
					$this->_validateTrustedShopId($ts_id, (int)$language['id_lang']);
					if ($this->hasSOAPCallError())
					{
						$this->errors[] = $this->error_soap_call;
						$this->resetTSID($language['id_lang']);
					}
				}
			}
			else
				$this->resetTSID($language['id_lang']);
		}

	

		return (!count($this->errors));
	}

	private function _validateTrustedShopId($ts_id, $iso_lang)
	{
		$result = strtoupper(TrustedShopsSoapApi::validate(self::PARTNER_PACKAGE, $ts_id));

		if ($result != TrustedShopsSoapApi::RT_OK)
			switch($result)
			{
				case TrustedShopsSoapApi::RT_INVALID_TSID:
					$this->error_soap_call = $this->l('Invalid Trusted Shops ID').' ['.Language::getIsoById($iso_lang).']. '.$this->l('Please register').' <a href="'.$this->getApplyUrl().'">' .$this->l('here').'</a> '. $this->l('or contact service@trustedshops.co.uk.');
					break;
				case TrustedShopsSoapApi::RT_NOT_REGISTERED:
					$this->error_soap_call = $this->l('Customer Rating has not yet been activated for this Trusted Shops ID').' ['.Language::getIsoById($iso_lang).']. '.$this->l('Please register').' <a href="'.$this->getApplyUrl().'">' .$this->l('here').'</a> '. $this->l('or contact service@trustedshops.co.uk.');
					break;
				default:
					$this->error_soap_call = $this->l('An error has occurred');
			}

		return $result;
	}

	private function hasSOAPCallError()
	{
		return (bool)!empty($this->error_soap_call);
	}

	private function _postProcess()
	{
		
		Configuration::updateValue('TS_TAB0_REVBADGE_YOFFSET', (int)Tools::getValue('choose_revbadge_yoffset'));
		foreach ($this->allowed_languages as $language)
		{
			$id_lang = (int)$language['id_lang'];

			$ts_id = Tools::getValue('trusted_shops_id_'.$id_lang);
			Configuration::updateValue(self::PREFIX_CONF_NAME.$id_lang, $ts_id);

			if (!empty($ts_id))
				Configuration::updateValue(self::PREFIX_ACTIF_CONF_NAME.$id_lang, $ts_id);
		}

	
		
		$params = '';
		$delim = '?';

		$key = 1;

		foreach($this->allowed_languages as $language)
			if ($this->_isTsIdActive($language['id_lang']))
			{
				$params .= $delim.'lang'.$key.'='.$language['iso_code'].'&ts_id'.$key.'='.Configuration::get(self::PREFIX_ACTIF_CONF_NAME.$language['id_lang']);
				$delim = '&';
				$key++;
			}

		$confirmation = $this->l('Settings updated');

		if (!empty($params))
			$confirmation .= '<img src="http://www.prestashop.com/modules/'.self::$module_name.'.png'.$params.'" style="float:right" />';

		$this->confirmations[] = $confirmation;

		return true;
	}

	public function displayForm()
	{
		// I18N TS_ID
		$i18n_ts_id_fields = '';
		foreach ($this->allowed_languages as $language)
		{
			$i18n_ts_id_fields .= '
				<div id="trusted_shops_id_'.(int)$language['id_lang'].'">
					<p style="line-height: 25px;">
						<img src="'._PS_IMG_.'/l/'.(int)$language['id_lang'].'.jpg" style="vertical-align: middle;" alt="" />'.strtoupper($language['iso_code']).'
						<input type="text" name="trusted_shops_id_'.(int)$language['id_lang'].'" id="trusted_shops_id_'.(int)$language['id_lang'].'" style="width: 270px;" value="'.Configuration::get(self::PREFIX_CONF_NAME.(int)$language['id_lang']).'" /> <span style="font-size: 10px;">'.($this->_isTsIdActive($language['id_lang']) ? $this->l('Active') : $this->l('Inactive unless you haven\'t specified your Trusted Shops ID')).'</span>
					</p>
				</div>';
		}

		

		$content = '<form action="'.$this->_makeFormAction(strip_tags($_SERVER['REQUEST_URI']), $this->id_tab).'" method="post">
					<fieldset>
						<legend><img src="../img/admin/cog.gif" alt="" />'.$this->l('Basic Settings').'</legend>
						<p>'.$this->l('Please fill your Trusted Shops ID (one different ID per language):').'</p>
						<div>
						'.$i18n_ts_id_fields.'
						</div>
					</fieldset>';

		if ($this->_isConfigurable())
			$content .=	'<br />
						<fieldset>
							<legend><img src="../img/admin/appearance.gif" alt="" />'.$this->l('Display settings').'</legend>
							
							<label>'.$this->l('Set yoffset:').'</label>
							<div class="margin-form">
      							
								<input type="text" size="3" name="choose_revbadge_yoffset" value="'.(int)(Configuration::get('TS_TAB0_REVBADGE_YOFFSET')).'" />
							</div>
							<br />
							
						</fieldset>';

		$content .= 	'<br /><center><input type="submit" class="button" name="submitTrustedShops" value="'.$this->l('Save').'" /></center>
					</form>';

		return $content;
	}

	public function displayInformationsPage()
	{
		global $cookie;

		$link = '';
		if (strtolower(Language::getIsoById((int)$cookie->id_lang)) == 'de')
			$link = '<p><b><a style="text-decoration: underline; font-weight: bold; color: #0000CC;" target="_blank" href="https://www.trustedshops.de/shopbetreiber/bestellen.html?shopsw=PRESTA&partnerPackage=PrestaShop&et_cid=14en&et_lid=29069" target="_blank">Jetzt bei Trusted Shops anmelden!</a></b></p><br />';
		if ((strtolower(Language::getIsoById((int)$cookie->id_lang)) == 'en') || (strtolower(Language::getIsoById((int)$cookie->id_lang)) == 'gb'))
			$link = '<p><b><a style="text-decoration: underline; font-weight: bold; color: #0000CC;" target="_blank" href="https://www.trustedshops.co.uk/merchants/order.html?shopsw=PRESTA&partnerPackage=PrestaShop&et_cid=53&et_lid=3361" target="_blank">Apply now!</a></b></p><br />';
		if (strtolower(Language::getIsoById((int)$cookie->id_lang)) == 'fr')
			$link = '<p><b><a style="text-decoration: underline; font-weight: bold; color: #0000CC;" target="_blank" href="https://www.trustedshops.fr/marchands/commander.html?shopsoftware=PRESTA&et_cid=53&et_lid=3362" target="_blank">Enregistrement Trusted Shops</a></b></p><br />';

		return '<fieldset>
					<legend><img src="'.__PS_BASE_URI__.'modules/'.self::$module_name.'/logo.gif" alt="" />'.$this->l('Learn More').'</legend>
		
					<img src="'._MODULE_DIR_.self::$module_name.'/img/ts_rating_'.$this->_getAllowedIsobyId($cookie->id_lang).'.jpg" />
			
					<h3>'.$this->l('Trusted Shops Customer Rating').'</h3>
					<p>'.$this->l('For online buyers, positive and verifiable customer ratings are an important indication of an online shop\'s trustworthiness. The required software is already included in Prestashop, so you can start collecting customer ratings in your online shop too. Integration is easy with just a few clicks.').'</p>
					
					<h4>'.$this->l('Support guide for your customers').'</h4>
					<p>'.$this->l('Satisfied customers are your best sales people. Let your customers speak for themselves as to how 	safe and easy it is to buy from your online shop.').'</p>

					<h4>'.$this->l('Basis for shop optimisation').'</h4>
					<p>'.$this->l('Your customers are happy to help you optimise your shop with their feedback. After all, the better your online shop works, the more satisfied your customers will be.').'</p>
					
					<h4>'.$this->l('Increase reach via Facebook, Twitter and Google').'</h4>
					<p>'.$this->l('Your customers spread reviews and rating on Facebook and Twitter directly to friends and followers. Ratings are automatically listed in the Google-Index and are displayed in Google Shopping.').'</p>
					<br />
					'.$link.'
				</fieldset>
				<br />';
	}

	public function getApplyUrl()
	{
		global $cookie;

		$lang = $this->_getAllowedIsobyId($cookie->id_lang);

		return $this->apply_url_base[$lang].'?partnerPackage='.self::PARTNER_PACKAGE.'&shopsw='.self::SHOP_SW.'&website='.
		urlencode(_PS_BASE_URL_.__PS_BASE_URI__).'&firstName='.urlencode($cookie->firstname).'&lastName='.
		urlencode($cookie->lastname).'&email='.urlencode(Configuration::get('PS_SHOP_EMAIL')).'&language='.strtoupper(Language::getIsoById(intval($cookie->id_lang))).
		'&ratingProduct=RATING_PRO'.$this->apply_url_tracker[$lang];
	}

	public function hookFooter($params)
	{
		global $cookie;

		if (isset($cookie) && is_object($cookie))
			$id_lang = (int)$cookie->id_lang;
		else if (Tools::getValue('id_lang'))
			$id_lang = (int)Tools::getValue('id_lang');
		else
			$id_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		if (!$this->_isTsIdActive((int)$id_lang))
			return false;

		$iso = Language::getIsoById((int)$id_lang);

		$tab_id = Configuration::get(self::PREFIX_CONF_NAME.(int)$id_lang);
		$trusted_shops_id = Configuration::get(self::PREFIX_CONF_NAME.(int)$id_lang);
		$rev_badge_yoffset = Configuration::get('TS_TAB0_REVBADGE_YOFFSET');
		self::$smarty->assign('trusted_shops_id', $trusted_shops_id);
		self::$smarty->assign('rev_badge_yoffset', $rev_badge_yoffset);

	

		if (Configuration::get(self::PREFIX_CONF_NAME.(int)$id_lang))
		{
			return $this->display(self::$module_name, 'badge.tpl');
				
		}

		return '';
	}

	
	
	
	

	public function hookOrderConfirmation($params)
	{
	

		$id_order = (int)$params['objOrder']->id;
		$order_reference = Order::getUniqReferenceOf($id_order);
		$customer = new Customer($params['objOrder']->id_customer);
		$currency = new Currency((int)$params['objOrder']->id_currency);
		self::$smarty->assign(array(
			
			'language' => Language::getIsoById((int)$params['cookie']->id_lang),
			'amount'        => $params['total_to_pay'],
			'buyer_email'   => $customer->email,
			'charset'       => 'UTF-8',
			'currency'      => $currency->iso_code,
			'customer_id'   => $customer->id,
			'order_id'      => $order_reference,
			));
			
		return $this->display(self::$module_name, 'order-confirmation.tpl');
	}


	

	public function getL($key)
	{
		$translations = array(
			'title_part_1' => $this->l('Are you satisfied with'),
			'title_part_2' => $this->l('? Please write a review!')
		);

		return $translations[$key];
	}
	
	
}


