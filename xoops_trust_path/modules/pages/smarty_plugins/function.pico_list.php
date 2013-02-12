<?php

require_once XOOPS_TRUST_PATH.'/modules/pages/include/common_functions.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/pages.textsanitizer.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/PagesUriMapper.class.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/PagesPermission.class.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/PagesModelCategory.class.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/class/PagesModelContent.class.php' ;
require_once XOOPS_TRUST_PATH.'/modules/pages/blocks/list.php' ;

function smarty_function_pages_list( $params , &$smarty )
{
	$mydirname = @$params['dir'] . @$params['dirname'] ;
	$cat_ids = @$params['id'] . @$params['cat_id'] ;
	$order = empty( $params['order'] ) ? 'o.created_time DESC' : $params['order'] ;
	$limit_params = @$params['limit'] ;
	$template = @$params['template'] ;
	$var_name = @$params['item'] . @$params['assign'] ;

	if( empty( $mydirname ) ) $mydirname = $smarty->get_template_vars( 'mydirname' ) ;
	if( empty( $mydirname ) ) {
		echo 'error '.__FUNCTION__.' [specify dirname]';
		return ;
	}

	require_once XOOPS_ROOT_PATH.'/modules/'.$mydirname.'/blocks/blocks.php' ;

	if( $var_name ) {
		// just assign
		$assigns = b_pages_list_show( array( $mydirname , $cat_ids , $order , $limit_params , $template , 'disable_renderer' => true ) ) ;
		$smarty->assign( $var_name , $assigns ) ;
	} else {
		// display
		$block = b_pages_list_show( array( $mydirname , $cat_ids , $order , $limit_params , $template ) ) ;
		echo @$block['content'] ;
	}
}

?>