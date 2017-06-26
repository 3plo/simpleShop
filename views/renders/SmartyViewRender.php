<?php
namespace views\renders;

/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 29.04.2017
 * Time: 19:33
 */
class SmartyViewRender implements ViewRenderInterface
{

    /**
     * @var
     */
    private $smatry;

    /**
     * @var
     */
    private $templateDirectory;

    /**
     * SmartyViewRender constructor.
     * @param $templateEngine
     * @param $templateDirectory
     */
    public function __construct($templateEngine, $templateDirectory)
    {
        $this->smatry = $templateEngine;
        $this->templateDirectory = $templateDirectory;
    }

    /**
     * @param array $data
     * @param string $templateName
     */
    public function showView(array $data, string $templateName = 'default')
    {
        $this->makeSettings($templateName);
        $this->smatry->assign($data);
        $this->smatry->display('index.tpl');
    }

    /**
     * @param string $templateName
     */
    private function makeSettings(string $templateName)
    {
        $this->smatry->setTemplateDir($this->templateDirectory . $templateName . '/');
        $this->smatry->setCompileDir('../tmp/smarty/templates_c');
        $this->smatry->setCacheDir('../tmp/smarty/cache');
        $this->smatry->setConfigDir('../library/Smarty/configs');

//        $this->smatry->assign(/*'teplateWebPath', TemplateWebPath);
    }
}