<?php
require_once './app/view/admin.php';
require_once './app/model/item.model.php';
require_once './app/model/categoria.model.php';

class AdminController{
    private $view;
    private $itemModel;
    private $categoriaModel;

    public function __construct(){
        $this->view = new AdminView;
        $this->itemModel = new ItemModel();
        $this->categoriaModel = new CategoriaModel();
    }

    public function index($userName, $userId){
        if((isset($_SESSION['NAME']) && !empty($_SESSION['NAME'])) && (isset($_SESSION['USER_ID']) && !empty($_SESSION['USER_ID']))){
            $items = $this->itemModel->getItems();
            $categorias = $this->categoriaModel->getCategorias();
            $this->view->renderAdminHome($userName, $userId, $items, $categorias);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

}

