<?php

// Dependency injection
use Momoxo\Installer\Service\RequirementTestService;
use Momoxo\Installer\Requirement\PHPExtensionRequirement;
use Momoxo\Installer\Requirement\FileWritableRequirement;
use Momoxo\Installer\Service\ConfigCreationService;
use Momoxo\Installer\ConfigFormatter\ConstantFormatter;
use Momoxo\Installer\Requirement\DatabaseConnectableRequirement;
use Momoxo\Installer\Database\ConnectionFactory;
use Momoxo\Installer\Service\DatabaseConnectionTestService;
use Momoxo\Installer\Service\DatabaseConstructionService;
use Momoxo\Installer\Service\SiteConstructionService;

$container = new Pimple();

$container['service.requirement_test'] = function($container) {
	$requirementTestService = new RequirementTestService();
	$requirementTestService
		->setPHPExtensionRequirement(new PHPExtensionRequirement())
		->setFileWritableRequirement(new FileWritableRequirement());
	return $requirementTestService;
};

$container['service.database_connection_test'] = function($container) {
	$requirement = new DatabaseConnectableRequirement();
	$requirement->setConnectionFactory(new ConnectionFactory());
	$service = new DatabaseConnectionTestService();
	$service->setDatabaseConnectableRequirement($requirement);
	return $service;
};

$container['service.site_construction'] = function($container) use ($installerConfig) {
	$encryptorClass = $installerConfig->get('password_encryptor');
	$service = new SiteConstructionService();
	$service
		->setConfigFilename($installerConfig->get('config_filename'))
		->setSchemaFile($installerConfig->get('database.structure'))
		->setDataFile($installerConfig->get('database.data'))
		->setFormatter(new ConstantFormatter())
		->setSqlUtility(new \Momoxo\Installer\Database\SqlUtility())
		->setConnectionFactory(new \Momoxo\Installer\Database\ConnectionFactory())
		->setEncryptor(new $encryptorClass);
	return $service;
};