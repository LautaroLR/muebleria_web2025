<?php
require_once './libs/Smarty.class.php';
require_once './config/config.php';

class AdminView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../public/templates/');
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function renderAdminHome($userName, $userId, $items, $categorias)
    {
        echo var_dump($userName, $userId, $items, $categorias);
        $this->smarty->assign('userName', $userName, $userId, $items, $categorias);
        $this->smarty->display('categorias.tpl');
    }
}