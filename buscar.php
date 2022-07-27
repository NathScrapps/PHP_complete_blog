<?php 
    require './admin/config.php';
    require 'functions.php';

    $connection = conexion($bd_config);
    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
        $busqueda = limpiarDatos($_GET['busqueda']);

        $statement = $connection->prepare(
            'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
        );
        $statement->execute(array(':busqueda' => "%$busqueda%"));
        $resultados = $statement->fetchAll();
        if (empty($resultados)) {
            $titulo = 'No se encontraron resultados para la búsqueda: '."<b class='busqueda'>$busqueda</b>";
        }else {
            $titulo = 'Se muestran resultados para la búsqueda: ' ."<b class='busqueda'>$busqueda</b>";
        }
    } else{
        header('Location: '.ROUTE);
    }

    require_once './views/buscar.view.php';

?>