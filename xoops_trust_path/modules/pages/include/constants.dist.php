<?php

define('_MD_PAGES_WRAPBASE','/wraps');
define('_MD_PAGES_AUTONAME4SPRINTF','/content%04d.html');
define('_MD_PAGES_AUTONAME4PREGEX','?^/content([0-9]{4})\.html$?');
define('_MD_PAGES_AUTOCATNAME4SPRINTF','/category%04d.html');
define('_MD_PAGES_AUTOCATNAME4PREGEX','?^/category([0-9]{4})\.html$?');
define('_MD_PAGES_WRAPS_DISALLOWEDCHARS4PREGEX','?[^a-zA-Z0-9_./+-]?');
define('_MD_PAGES_ALLOWEDEXTSINVPATH','htm|html|php');
define('_MD_PAGES_EXTS4HTMLWRAPPING','htm|html|php');
define('_MD_PAGES_AUTOREGIST4PREGEX','?^[a-zA-Z0-9_./+-]+\.(html|htm)$?');

?>