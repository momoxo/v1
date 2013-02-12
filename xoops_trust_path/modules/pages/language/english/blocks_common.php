<?php

// definitions for editing blocks
define("_MB_PAGES_CATLIMIT","Specify the category(ies)");
define("_MB_PAGES_CATLIMITDSC","blank means all categories. 0 means the TOP category. you can specify categories multiply by numbers separated with comma.");
define("_MB_PAGES_PARENTCAT","Parent category");
define("_MB_PAGES_PARENTCATDSC","Subcategories directly belonging to this parent category will be displayed. you can specify parent categories multiply by numbers separated with comma.");
define("_MB_PAGES_SELECTORDER","Order by");
define("_MB_PAGES_CONTENTSNUM","Number of items to be displayed");
define("_MB_PAGES_THISTEMPLATE","Template(resource) of the block");
define("_MB_PAGES_DISPLAYBODY","Display content body also");
define("_MB_PAGES_CONTENT_ID","Content ID");
define("_MB_PAGES_PROCESSBODY","Process body of the content dynamically");
define("_MB_PAGES_TAGSNUM","Display");
define("_MB_PAGES_TAGSLISTORDER","Order for displaying");
define("_MB_PAGES_TAGSSQLORDER","Order for extracting");

// LTR or RTL
if( defined( '_ADM_USE_RTL' ) ) {
	@define( '_ALIGN_START' , _ADM_USE_RTL ? 'right' : 'left' ) ;
	@define( '_ALIGN_END' , _ADM_USE_RTL ? 'left' : 'right' ) ;
} else {
	@define( '_ALIGN_START' , 'left' ) ; // change it right for RTL
	@define( '_ALIGN_END' , 'right' ) ;  // change it left for RTL
}


?>