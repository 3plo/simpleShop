<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 29.04.2017
 * Time: 16:33
 */
namespace controllers\factories;

use controllers;

interface ControllerFactoiryInterface
{
    /**
     * @param string $controllerName
     * @param \views\renders\ViewRenderInterface  $render
     * @return controllers\ControlIerInterface
     */
    public function createController(string $controllerName, \views\renders\ViewRenderInterface $render);
}