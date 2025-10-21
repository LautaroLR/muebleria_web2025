<?php
require_once 'model.php';

class ItemModel extends Model{

    public function getItems(){
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $items;
    }

    public function addItem($nombre){
        $query = $this->db->prepare("INSERT INTO productos (nombre) VALUES (?)");
        $query->execute(array($nombre));
    }

    public function deleteItem($id){
        $query = $this->db->prepare("DELETE FROM prodcutos WHERE id = ?");
        $query->execute(array($id));
    }

    public function editProducto($id, $nombre){
        $query = $this->db->prepare("UPDATE productos SET nombre = ? WHERE id = ?");
        $query->execute(array($nombre, $id));
    }
    
}