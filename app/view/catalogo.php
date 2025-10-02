 <?php

require_once '../../libs/Smarty.class.php';

class CatalogoView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function renderTable($items)
    {
        $this->smarty->assign('items', $items);
        $this->smarty->display('../../public/templates/tabla.tpl');
    }

    
}