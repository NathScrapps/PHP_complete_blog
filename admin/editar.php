<?php session_start();

    require 'config.php';
    require '../functions.php';

    sessionExists();

    $connection = conexion($bd_config);
    if (!$connection) {
        header('Location: '.ROUTE.'error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = limpiarDatos($_POST['titulo']);
        $extracto = limpiarDatos($_POST['extracto']);
        $texto = $_POST['texto'];
        $id = limpiarDatos($_POST['id']);
        $thumb_guardada = $_POST['thumb-guardada'];
        $thumb = $_FILES['thumb'];

        if (empty($thumb['name'])) {
            $thumb = $thumb_guardada;
        }else{
            $destino = '../' . $blog_config['folder_images'] . $_FILES['thumb']['name'];
            move_uploaded_file($_FILES['thumb']['tmp_name'], $destino);
            $thumb = $_FILES['thumb']['name'];
        }

        $statement = $connection->prepare(
            'UPDATE articulos SET 
            titulo = :titulo,
            extracto = :extracto, 
            texto = :texto,
            thumb = :thumb
            WHERE id = :id' 
        );

        $statement->execute(array(
            ':titulo'=> $titulo,
            ':extracto'=> $extracto,
            ':texto'=> $texto,
            ':thumb'=> $thumb,
            ':id' => $id
        ));

        header('Location: '.ROUTE.'admin');

    }else{
        $id_post = id_post($_GET['id']);
        if (empty($id_post)) {
            header('Location: '.ROUTE.'admin');
        }

        $post = obtener_post($connection, $id_post);

        if (!$post) {
            header('Location: '.ROUTE.'admin');
        }

        $post = $post[0];
    }


    require_once '../views/editar.view.php';

?>