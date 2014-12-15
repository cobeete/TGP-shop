<?php error_reporting(0);
$old_error_handler = set_error_handler("userErrorHandler");

function userErrorHandler ($errno, $errmsg, $filename, $linenum,  $vars)
{
    $time=date("d M Y H:i:s");
// Get the error type from the error number
    $errortype = array (1    => "Error",
        2    => "Warning",
        4    => "Parsing Error",
        8    => "Notice",
        16   => "Core Error",
        32   => "Core Warning",
        64   => "Compile Error",
        128  => "Compile Warning",
        256  => "User Error",
        512  => "User Warning",
        1024 => "User Notice");
    $errlevel=$errortype[$errno];

//Write error to log file (CSV format)
    $errfile=fopen("errors.csv","a");
    fputs($errfile,"\"$time\",\"$filename:
$linenum\",\"($errlevel) $errmsg\"\r\n");
    fclose($errfile);

    if($errno!=2 && $errno!=8) {
//Terminate script if fatal error
        die("A fatal error has occurred. Script execution has been aborted");
    }
}
?>
<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

require(dirname(__FILE__).'/config/config.inc.php');
Dispatcher::getInstance()->dispatch();
