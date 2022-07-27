<?php 
    require './admin/config.php';
    require 'functions.php';

    $connection = conexion($bd_config);
    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }

    $posts = obtener_posts($blog_config['post_per_page'], $connection);

    if (!$posts) {
        header('Location: '.ROUTE.'error.php');
    }

    require_once './views/index.view.php';

?>