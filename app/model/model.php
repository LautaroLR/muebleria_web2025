<?php

// class Model {
//     protected $db;
    
//     public function __construct() {
//         $this->db = Database::getInstance();
//     }
    
//     protected function executeQuery($sql, $params = []) {
//         $stmt = $this->db->prepare($sql);
//         if ($stmt) {
//             if (!empty($params)) {
//                 $types = str_repeat('s', count($params));
//                 $stmt->bind_param($types, ...$params);
//             }
//             $stmt->execute();
//             return $stmt;
//         }
//         return false;
//     }
// }


class Model {

    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=muebleria;charset=utf8', 'root', '');
        $this->_deploy();
    }

    
    private function _deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql =<<<END
            // Copiamos las tablas del archivo exportado de phpmyadmin.
            END;
            $this->db->query($sql);
        }
    }
    
    public function getItems () {
       $query = $this->db->prepare('SELECT * FROM productos');
       $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $tasks;

    }
    
}



?>
