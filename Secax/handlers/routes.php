<?php
function Router() {
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === '/home') {
        require_once 'app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
    } else {
        echo "<h1>404 - Página não encontrada</h1>";
    }
    return;
}


?>