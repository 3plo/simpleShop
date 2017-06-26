<?php
/**
 * Created by PhpStorm.
 * User: b.plotka
 * Date: 26.03.2017
 * Time: 16:28
 */

namespace controllers;


use views\renders\ViewRenderInterface;

class IndexController implements ControlIerInterface
{

    /**
     * @var ViewRenderInterface
     */
    private $render;

    /**
     * IndexController constructor.
     * @param ViewRenderInterface $render
     */
    public function __construct(ViewRenderInterface $render)
    {
        $this->render = $render;
    }

    public function handleAction(string $action)
    {
        $function = $action . $this::POSTFIX;
        if(method_exists($this, $function))
        {
            $this->$function();
        }
        else
        {
            die(var_dump(1));
        }
    }

    private function testAction()
    {
        $data = array(
            'pageTitle' => 'default title',
            'content' => 'some content',
            'categories' => [['title' => 'mobile phones', 'link' => 'shop.loc/mobile'], ['title' => 'leptops', 'link' => 'shop.loc/leptops']]
        );
        $this->render->showView($data);
    }
}