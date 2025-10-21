<?php
require_once 'model.php';

class CategoriaModel extends Model{

    public function getCategorias(){
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $categorias;
    }

    public function addCategoria($nombre){
        $query = $this->db->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $query->execute(array($nombre));
    }

    public function deleteCategoria($id){
        $query = $this->db->prepare("DELETE FROM categorias WHERE _id = ?");
        $query->execute(array($id));
    }

    public function editCategoria($id, $nombre){
        $query = $this->db->prepare("UPDATE categorias SET nombre = ? WHERE _id = ?");
        $query->execute(array($nombre, $id));
    }
    
}