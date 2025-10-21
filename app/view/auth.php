<?php

require_once 'libs/Smarty.class.php';

class AuthView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../public/templates/');
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function renderAuth($root = null, $errors = null)
    {
        $this->smarty->assign('root', $root);
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->display('auth.tpl');
    }
}


// class CatalogoView
// {
//     private $smarty;

//     public function __construct()
//     {
//         $this->smarty = new Smarty();
//         $this->smarty->setTemplateDir(__DIR__ . '/../../public/templates/');
//     }

//     public function renderTable($items)
//     {
//         $this->smarty->assign('items', $items);
//         $this->smarty->display('tabla.tpl');
//     }

    
// }