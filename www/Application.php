<?php
namespace www;
use views\renders\SmartyViewRender;

/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 29.04.2017
 * Time: 16:30
 */
class Application
{
    /**
     * @var string
     */
    private $controllerName;

    /**
     * @var string
     */
    private $actionName;

    /**
     * Application constructor.
     * @param string $controllerName
     * @param string $actionName
     */
    public function __construct($controllerName, $actionName)
    {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
    }

    /**
     * @param $templateEngine
     * @param $templateDirectory
     */
    public function run($templateEngine, $templateDirectory)
    {
        $controllerFactory = new \controllers\factories\ControllerFactoiry();
        $render = new SmartyViewRender($templateEngine, $templateDirectory);
        $controller = $controllerFactory->createController($this->controllerName, $render);

        if(isset($controller))
        {
            $controller->handleAction($this->actionName);
        }
        else
        {
            echo \Error::class;
        }
    }
}