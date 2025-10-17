<?php

require_once './app/model/model.php';
require_once './app/view/catalogo.php'; 


class modelController {
    private $model;
    private $view;
 
   public function __construct()
    {
        $this->model = new Model();
        $this->view = new CatalogoView();
    }

    public function showItems ()
    {
        $items = $this->model->getItems();
        $dataArray = [];
        foreach ($items as $item) {
            if (is_object($item)) {
                $dataArray[] = (array)$item; 
            } else {
                $dataArray[] = $item;
            }
        }
        $this->view->renderTable($dataArray);
    }   
    
}


