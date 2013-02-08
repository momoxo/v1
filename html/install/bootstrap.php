<?php

use Momoxo\Installer\TrustPathFinder;
use Momoxo\Installer\InstallerConfig;

// Load classes
spl_autoload_register(function($c) { @include_once strtr($c, '\\_', '//').'.php'; });
set_include_path(get_include_path().PATH_SEPARATOR.__DIR__.'/src');
require_once __DIR__.'/vendor/twig.phar';
require_once __DIR__.'/vendor/Pimple.php';


// Initialize conifg
$installerConfig = new InstallerConfig(__DIR__.'/config/config.json', array(
	'xoops_root_path' => dirname(__DIR__),
	'installer_dir'    => __DIR__,
	'installer_url'    => $_SERVER['SCRIPT_NAME'],
	'installer_base_url'    => dirname($_SERVER['SCRIPT_NAME']),
));

// Check config.php
if (file_exists($installerConfig->get('config_filename')) === true) {
	require_once $installerConfig->get('config_filename');
	header('Location: ' . XOOPS_URL);
	exit;
}

// Find xoops_trust_path
$finder = new TrustPathFinder();
$xoopsTrustPath = $finder->find($installerConfig->get('xoops_root_path'));

if ($xoopsTrustPath === false) {
	die('xoops_trust_pathが見つかりません.');
}

$installerConfig->set('xoops_trust_path', $xoopsTrustPath);

require __DIR__.'/dependency_injection.php';