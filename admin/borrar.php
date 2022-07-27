<?php session_start();

    require 'config.php';
    require '../functions.php';

    sessionExists();

    $connection = conexion($bd_config);
    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }

    $id = limpiarDatos($_GET['id']);

    if (!$id) {
        header('Location: '.ROUTE.'admin');
    }


    $statement = $connection->prepare(
        'DELETE FROM articulos WHERE id = :id' 
    );

    $statement->execute(array(':id' => $id));
    header('Location: '.ROUTE.'admin');

?>