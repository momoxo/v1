<?php
/**
 *
 * This file is generated by Sort Filter Unit Class Maker.
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

require_once XUPDATE_TRUST_PATH . "/class/AbstractFilterForm.class.php";

define("MODULE_SORT_KEY_ID",          1);
define("MODULE_SORT_KEY_SID",         2);
define("MODULE_SORT_KEY_DIRNAME",     3);
define("MODULE_SORT_KEY_VERSION",     4);
define("MODULE_SORT_KEY_LICENSE",     5);
define("MODULE_SORT_KEY_REQUIRED",    6);
define("MODULE_SORT_KEY_LASTUPDATE",  7);
define("MODULE_SORT_KEY_TARGET_KEY" , 8);
define("MODULE_SORT_KEY_TARGET_TYPE", 9);

define("MODULE_SORT_KEY_DEFAULT",    MODULE_SORT_KEY_DIRNAME);
define("MODULE_SORT_KEY_MAXVALUE",   9);

/***
 * @internal
 * This is the special filter for the list of installed modules without the
 * pager.
 */
class Xupdate_Admin_ModuleStoreFilterForm extends Xupdate_AbstractFilterForm
{
	var $mSpecial = null;

	var $mSortKeys = array(
		MODULE_SORT_KEY_ID          => "id",
		MODULE_SORT_KEY_SID         => "sid",
		MODULE_SORT_KEY_DIRNAME     => "dirname",
		MODULE_SORT_KEY_VERSION     => "version",
		MODULE_SORT_KEY_LICENSE     => "license",
		MODULE_SORT_KEY_REQUIRED    => "required",
		MODULE_SORT_KEY_LASTUPDATE  => "last_update",
		MODULE_SORT_KEY_TARGET_KEY  => "target_key",
		MODULE_SORT_KEY_TARGET_TYPE => "target_type"
	);

	function  Xupdate_Admin_ModuleStoreFilterForm()
	{
		$this->_mCriteria =new CriteriaCompo();
	}
	public function prepare(/*** XCube_PageNavigator ***/ &$navi,/*** XoopsObjectGenericHandler ***/ &$handler)
	{
		parent::prepare($navi , $handler);
	}

	function getDefaultSortKey()
	{
		return MODULE_SORT_KEY_DEFAULT;
	}

	function fetch()
	{
		$this->fetchSort();

		$this->_mCriteria->addSort($this->getSort(), $this->getOrder());
	}

}

?>