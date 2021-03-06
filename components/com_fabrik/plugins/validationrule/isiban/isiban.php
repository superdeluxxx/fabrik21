<?php
/**
* @package Joomla
* @subpackage Fabrik
* @copyright Copyright (C) 2005 Rob Clayburn. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

//require the abstract plugin class
require_once(COM_FABRIK_FRONTEND.DS.'models'.DS.'plugin.php');
require_once(COM_FABRIK_FRONTEND.DS.'models'.DS.'validation_rule.php');

class FabrikModelIsiban extends FabrikModelValidationRule {

	var $_pluginName = 'isiban';
	
	/** @param string classname used for formatting error messages generated by plugin */
	var $_className = 'isiban';

	/**
	 * validate the elements data against the rule
	 * @param string data to check
	 * @param object element
	 * @param int plugin sequence ref
	 * @return bol true if validation passes, false if fails
	 */

	function validate( $data, &$element, $c, $repeat_count )
	{
		//could be a dropdown with multivalues
		if (is_array($data)) {
			$data = implode('', $data);
		}
		$params =& $this->getParams();
		$allow_empty = $params->get('isiban-allow_empty', '_default','array', $c);
		$allow_empty = $allow_empty[$c];
		if ($allow_empty == '1' and empty($data)) {
			return true;
		}
		//require_once(COM_FABRIK_FRONTEND.DS.'plugins'.DS.'validationrule'.DS.'isiban'.DS.'php-iban'.DS.'php-iban.php');
		//return verify_iban($data);
		return true;
	}

}
?>
