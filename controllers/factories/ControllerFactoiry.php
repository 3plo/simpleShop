<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 26.03.2017
 * Time: 17:07
 */

namespace controllers\factories;
use controllers;

class ControllerFactoiry implements ControllerFactoiryInterface
{

    /**
     * @param string $controllerName
     * @param \views\renders\ViewRenderInterface $render
     * @return controllers\ControlIerInterface
     */
    public function createController(string $controllerName, \views\renders\ViewRenderInterface $render)
    {
        $loadResult = $this->loadController($controllerName);

        $result = null;
        if($loadResult)
        {
            $controllerName = '\\controllers\\'.$controllerName.'Controller';
            $result = new $controllerName($render);
        }
        return $result;
    }

    /**
     * @param string $className
     * @return bool
     */
    private function loadController($className)
    {
        $controllerDir = __DIR__ . '/../../controllers/';
        $path = $controllerDir.$className.'Controller.php';
        if(!class_exists($className))
        {
            if(file_exists($path))
            {
                require($path);
                return true;
            }
        }
        return false;
    }
}