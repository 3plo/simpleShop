<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 26.03.2017
 * Time: 17:32
 */
namespace controllers;

use views\renders\ViewRenderInterface;

interface ControlIerInterface
{
    const POSTFIX = 'Action';

    /**
     * ControlIerInterface constructor.
     * @param ViewRenderInterface $render
     */
    public function __construct(ViewRenderInterface $render);

    /**
     * @param string $action
     */
    public function handleAction(string $action);
}