<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 30.04.2017
 * Time: 14:08
 */
namespace views\renders;


/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 29.04.2017
 * Time: 19:33
 */
interface ViewRenderInterface
{
    /**
     * @param array $data
     * @param string $templateName
     */
    public function showView(array $data, string $templateName = 'default');
}