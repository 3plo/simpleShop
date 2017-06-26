<?php

/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 04.11.2016
 * Time: 12:38
 */
class Autoloader
{
    public function loadClass($class)
    {
        $rootDir = __DIR__ . '/../../simpleShop/';
        $path = $rootDir.$class.'.php';
//        die($path);
        if(!class_exists($class))
        {
            if(file_exists($path))
            {
                require($path);
            }
        }
    }
}

spl_autoload_register([new Autoloader(), 'loadClass']);