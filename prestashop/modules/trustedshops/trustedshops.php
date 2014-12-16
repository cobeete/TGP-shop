<?php
  if (!defined('_PS_VERSION_'))
	exit;

require (_PS_MODULE_DIR_.'trustedshops/lib/AbsTrustedShops.php');
require (_PS_MODULE_DIR_.'trustedshops/lib/TrustedShopsRating.php');


class TrustedShops extends Module
{
	/**
	 * Saved each Object needed list of AbsTrustedShops extended objects
	 * @var array
	 */
	
	private static $obj_ts_rating;
	private $errors = array();

	private $warnings = array();

	public $limited_countries = array();

	private $confirmations = array();



	public function __construct()
	{
		global $smarty;

		$this->name = 'trustedshops';
		$this->tab = 'other';
		$this->version = '1.0.0';
		$this->author = 'Trusted Shops';

		parent::__construct();


		
			AbsTrustedShops::setTranslationObject($this);
			self::$obj_ts_rating = new TrustedShopsRating();
			self::$obj_ts_rating->setModuleName($this->name);
			self::$obj_ts_rating->setSmarty($smarty);
		

		if (!extension_loaded('soap'))
			$this->warnings[] = $this->l('This module requires the SOAP PHP extension to function properly.');

			$this->limited_countries = self::$obj_ts_rating->limited_countries;

			if (!empty($obj_ts_rating->warnings))
				$this->warnings = $obj_ts_rating->warnings;
		

		if (!empty($this->warnings))
			$this->warning = implode(',<br />', $this->warnings).'.';

		$this->displayName = $this->l('Trusted Shops trust solutions');
		$this->description = $this->l('Build confidence in your online shop with the Trusted Shops customer rating.');
		$this->confirmUninstall = $this->l('Are you sure you want to delete all your settings?');
	}


public function install()
	{
		$return = true;

		
			$return = self::$obj_ts_rating->install();

			if (!$return)
				return false;
		

		$return = ($return) ? (parent::install() AND $this->registerHook('footer') AND $this->registerHook('orderConfirmation')
            AND $this->registerHook('displayShoppingCart')) : $return;
		
		return $return;
	}
	
	
	public function uninstall()
	{
		
			$return = self::$obj_ts_rating->uninstall();

			if (!$return)
				return false;
		

		return parent::uninstall();
	}
	
	
	public function getContent()
	{
		$out = '<h2>'.$this->displayName.'</h2>';
		$tab = array();
			
			$tab['title'] = self::$obj_ts_rating->tab_name;
			$tab['content'] = self::$obj_ts_rating->getContent();
		

		// Display Title Tabs
		$out .= '<ul id="menuTabs">';
		$title = $tab['title'];
			$out .= '<li id="menuTab" class="menuTabButton">'.$title.'</li>';
		$out .= '</ul>';

		// Display content Tabs
		$out .= '<div id="tabList">';
		$content = $tab['content'];
			$out .= '<div id="menuTabSheet" class="tabItem">'.$content.'</div>';
		$out .= '<br clear="left" />'.$this->displayCSSJSTab();

		// Check If each object (display as Tab) contains errors message of
		$this->checkObjectsErrorsOrConfirmations();

		return (empty($this->errors) ? $this->displayConfirmations() : $this->displayErrors()).$out;
	}
	
	
	private function displayCSSJSTab()
	{
		
		return '
		<style>
			#menuTabs { float: left; padding: 0; text-align: left; margin:0}
			#menuTabs li { text-align: left; float: left; display: inline; padding: 5px 10px 5px 5px; background: #EFEFEF; font-weight: bold; cursor: pointer; border-left: 1px solid #EFEFEF; border-right: 1px solid #EFEFEF; border-top: 1px solid #EFEFEF; }
			#menuTabs li.menuTabButton.selected { background: #FFF6D3; border-left: 1px solid #CCCCCC; border-right: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC; }
			#tabList { clear: left;}
			.tabItem { display: none; }
			.tabItem.selected { display: block; background: #fcfcfc; border: 1px solid #CCCCCC; padding: 10px; padding-top: 20px;}
		</style>
		<script>
			$().ready(function()
			{
				$("#menuTabSheet").addClass("selected");
				$("#menuTab").addClass("selected");
			});
			$(".menuTabButton").click(function ()
			{
				$(".menuTabButton.selected").removeClass("selected");
				$(this).addClass("selected");
				$(".tabItem.selected").removeClass("selected");
				$("#Sheet").addClass("selected");
			});
		</script>
		';
	}
			
	/**
	 * Check If each object (display as Tab) contains errors message of
	 *
	 * @return void
	 */
	private function checkObjectsErrorsOrConfirmations()
	{
		
			if (!empty(self::$obj_ts_rating->errors))
				$this->errors = self::$obj_ts_rating->errors;

			if (!empty(self::$obj_ts_rating->confirmations))
				$this->confirmations = self::$obj_ts_rating->confirmations;
	}
	

	private function displayConfirmations()
	{
		$html = '';

		if (!empty($this->confirmations))
			foreach ($this->confirmations as $confirmations)
				$html .= $this->displayConfirmation($confirmations);

		return $html;
	}

	private function displayErrors()
	{
		$html = '';

		if (!empty($this->errors))
			foreach ($this->errors as $error)
				$html .= $this->displayError($error);

		return $html;
	}

	public function hookOrderConfirmation($params)
	{
		return $this->dynamicHook($params, __FUNCTION__);
	}

    public function hookDisplayShoppingCart($params)
    {
        return $this->dynamicHook($params, __FUNCTION__);
    }

	public function hookFooter($params)
	{
		return $this->dynamicHook($params, __FUNCTION__);
	}

	private function dynamicHook($params, $hook_name)
	{

		if (!$this->active)
			return '';

		$return = '';

		
			if (method_exists(self::$obj_ts_rating, $hook_name))
				$return .= self::$obj_ts_rating->{$hook_name}($params);

		return $return;
	}

	
}

	
?>