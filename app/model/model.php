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
        $this->db = new PDO(
"mysql:host=".MYSQL_HOST .
";dbname=".MYSQL_DB.";charset=utf8", 
MYSQL_USER, MYSQL_PASS);
    }
}



?>
