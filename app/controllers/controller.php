<?php
require_once '../model/model.php'; 
// require_once '../view/tabla.php';


class modelController {
    private $model;
    // private $view;
 
   public function __construct()
    {
        $this->model = new Model();
        // $this->view = new DataView();
    }

    public function showItems ()
    {
        $items = $this->model->getItems();
        // $this->view->renderTable($items);
        $this->renderTable($items);
    }   
    public function renderTable($data) {
    if (empty($data)) {
        echo "<p>No hay artículos para mostrar</p>";
        return;
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Catálogo de Productos</title>
    </head>
    <body>
        <h2>Artículos del Catálogo</h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
            <?php foreach ($data as $item): ?>
            <tr>
                <td><?php echo htmlspecialchars($item->id); ?></td>
                <td><?php echo htmlspecialchars($item->nombre); ?></td>
                <td><?php echo htmlspecialchars($item->descripcion); ?></td>
                <td><?php echo htmlspecialchars($item->categoria); ?></td>
                <td>$<?php echo htmlspecialchars($item->precio); ?></td>
                <td><?php echo htmlspecialchars($item->stock); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
    </html>
    <?php
}
    
    
}

