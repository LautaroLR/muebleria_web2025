<?php

require_once 'libs/Smarty.class.php';

class AuthView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . './../public/templates/');
    }

    public function renderAuth($root = null, $errors = null)
    {
        $this->smarty->assign('root', $root);

        $this->smarty->display('tabla.tpl');
    }
}
