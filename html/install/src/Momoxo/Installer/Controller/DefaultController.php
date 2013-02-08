<?php

namespace Momoxo\Installer\Controller;

use Pimple;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Exception;
use Momoxo\Installer\InstallerConfig;
use Momoxo\Installer\DataTransferObject\RequirementTestDTO;
use Momoxo\Installer\ValueObject\Site;
use Momoxo\Installer\Form\ConfigurationForm;
use Momoxo\Installer\Factory\SiteFactory;
use Momoxo\Installer\HTTP\Request;
use Momoxo\Installer\Service\SiteConstructionService;

class DefaultController
{
    /**
     * @var InstallerConfig
     */
    private $config;

    /**
     * @var Pimple
     */
    private $container;

    /**
     * @var array
     */
    private $response = array();

    /**
     * @var string
     */
    private $template = '';

    public function __construct(InstallerConfig $config, Pimple $container)
    {
        $this->config = $config;
        $this->container = $container;
        $this->response = array(
            'base' => $this->config->get('installer_base_url'),
        );
    }

    /**
     * @param  string $name
     * @return object
     */
    public function get($name)
    {
        return $this->container[$name];
    }

    public function run()
    {
        $response = $this->inputAction();
        $this->response = array_merge($this->response, $response);
    }

    private function inputAction()
    {
        $requirementTestResult = $this->testRequirement();

        $request = new Request();
        $form = new ConfigurationForm();
        $form->setURL($request->getSiteUrl());

        if ($form->isMethod('POST')) {
            $form->fetch($_POST);
            if ($form->isValid() == false) {
                goto input_page;
            }

            $siteFactory = new SiteFactory();
            $site = $siteFactory->createByConfigurationForm($form, $this->config);

            if ($this->testDatabaseConnection($site) === false) {
                $form->addError("データベースに接続できません。設定を確認してください。");
                goto input_page;
            }

            try {
                /** @var $service SiteConstructionService */
                $service = $this->get('service.site_construction');
                $service->construct($site);
            } catch ( Exception $e ) {
                $form->addError($e->getMessage());
                goto input_page;
            }

            $this->template = 'step2.twig';

            return array(
                'site' => $site,
            );
        }

        input_page:

        $this->template = 'step1.twig';

        return array(
            'form' => $form,
            'xoops_url' => $request->getSiteUrl(),
            'testResult' => $requirementTestResult,
        );
    }

    public function respond()
    {
        $loader = new Twig_Loader_Filesystem($this->config->get('installer.template_dir'));
        $twig = new Twig_Environment($loader, array(
            'debug' => true,
            'strict_variables' => true,
        ));
        $twig->addGlobal('layout', $twig->loadTemplate('layout.twig'));
        echo $twig->render($this->template, $this->response);
    }

    /**
     * @return RequirementTestDTO
     */
    private function testRequirement()
    {
        $dto = new RequirementTestDTO($this->config->getRequirements());
        $service = $this->container['service.requirement_test'];
        $service->test($dto);

        return $dto;
    }

    /**
     * @param  \Momoxo\Installer\ValueObject\Site $site
     * @return mixed
     */
    private function testDatabaseConnection(Site $site)
    {
        return $this->get('service.database_connection_test')->test($site->getDB());
    }
}
