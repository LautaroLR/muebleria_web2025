<?php
// class Router {
//     private $routes = [];
    
//     public function addRoute($method, $path, $controller, $action) {
//         $this->routes[] = [
//             'method' => $method,
//             'path' => $path,
//             'controller' => $controller,
//             'action' => $action
//         ];
//     }
    
//     public function handleRequest($method, $uri) {
//         foreach ($this->routes as $route) {
//             if ($route['method'] === $method && $this->matchPath($route['path'], $uri)) {
//                 $controllerName = $route['controller'];
//                 $actionName = $route['action'];
                
//                 require_once "app/controllers/$controllerName.php";
//                 $controller = new $controllerName();
//                 $controller->$actionName();
//                 return;
//             }
//         }
        
//         http_response_code(404);
//         echo "Página no encontrada";
//     }
    
//     private function matchPath($pattern, $uri) {
//         $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([^/]+)', $pattern);
//         return preg_match("#^$pattern$#", $uri);
//     }
// }



?>