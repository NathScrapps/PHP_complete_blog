<?php session_start();
    require 'config.php';
    require '../functions.php';

    sessionExists();

    $connection = conexion($bd_config);
    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }

    $posts = obtener_posts($blog_config['post_per_page'], $connection);

    if (!$posts) {
        header('Location: nuevo.php');
    }

    require_once '../views/admin_index.view.php';

?>