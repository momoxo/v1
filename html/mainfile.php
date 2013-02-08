<?php

if ( file_exists(__DIR__.'/config/config.php') === false ) {
    header('Location: install/index.php');
    exit;
}

if ( !defined('XOOPS_MAINFILE_INCLUDED') ) {
    define('XOOPS_MAINFILE_INCLUDED', 1);

    require_once __DIR__.'/config/config.php';

    define("XOOPS_GROUP_ADMIN", "1");
    define("XOOPS_GROUP_USERS", "2");
    define("XOOPS_GROUP_ANONYMOUS", "3");

    // for x-update
    define("LEGACY_INSTALLERCHECKER_ACTIVE", false);
    define("XUPDATE_INSTALLERCHECKER_ACTIVE", false);

    if ( !defined('_XCORE_PREVENT_LOAD_CORE_') && XOOPS_ROOT_PATH != '' ) {
        include_once XOOPS_ROOT_PATH.'/include/cubecore_init.php';
        if ( !isset($xoopsOption['nocommon']) && !defined('_XCORE_PREVENT_EXEC_COMMON_') ) {
            include XOOPS_ROOT_PATH.'/include/common.php';
        }
    }
}
