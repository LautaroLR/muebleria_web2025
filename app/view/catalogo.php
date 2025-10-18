 <?php

require_once './libs/Smarty.class.php';

class CatalogoView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(__DIR__ . '/../../public/templates/');
    }

    public function renderTable($items)
    {
        $this->smarty->assign('items', $items);
        $this->smarty->display('tabla.tpl');
    }

    
}