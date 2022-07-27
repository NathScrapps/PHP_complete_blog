<?php 
    require './admin/config.php';
    require 'functions.php';

    $connection = conexion($bd_config);
    $id_post = id_post($_GET['id']);

    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }
    if (empty($id_post)) {
        header('Location: '.ROUTE);
    }

    $post = obtener_post($connection, $id_post);
    if (!$post) {
        header('Location: '.ROUTE);
    }
    $post = $post[0];
    require_once './views/single.view.php';
?>