<?php
require_once './libs/Smarty.class.php';

class DataView {
    private $smarty;

     public function __construct()
    {
        $this->smarty = new Smarty();
    }



    public function renderTable($data) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Tabla de Datos</title>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                    margin: 20px 0;
                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
                tr:nth-child(even) {
                    background-color: #f9f9f9;
                }
            </style>
        </head>
        <body>
            <h2>Artículos del catálogo</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
                <?php foreach ($data as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($item['descripcion']); ?></td>
                    <td><?php echo htmlspecialchars($item['categoria']); ?></td>
                    <td><?php echo htmlspecialchars($item['precio']); ?></td>
                    <td><?php echo htmlspecialchars($item['stock']); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </body>
        </html>
        <?php
    }
}
?>



<?php

require_once 'libs/Smarty.class.php';
require_once 'php/controller/auth.controller.php';

// class ArenaView
// {
//     private $smarty;

//     public function __construct()
//     {
//         $this->smarty = new Smarty();
//     }

//     public function render($pokemonsByUser, $userName, $userId)
//     {
//         $this->smarty->assign('userName', $userName);
//         $this->smarty->assign('userId', $userId);
//         $this->smarty->assign('pokemonsByUser', $pokemonsByUser);
//         $this->smarty->assign('styleFileName', 'arena');
//         $this->smarty->display('templates/private/user/arena.tpl');
//     }

//     public function renderAdmin($allUsers, $userName, $userId, $tableData, $allPokemons)
//     {
//         $this->smarty->assign('userName', $userName);
//         $this->smarty->assign('userId', $userId);
//         $this->smarty->assign('allUsers', $allUsers);
//         $this->smarty->assign('allPokemons', $allPokemons);
//         $this->smarty->assign('tableData', $tableData);
//         $this->smarty->assign('styleFileName', 'admin');
//         $this->smarty->display('templates/private/admin/index.tpl');
//     }
// }
