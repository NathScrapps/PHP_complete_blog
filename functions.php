<?php 
    /* Funciones descritas
    @-> conexion: regresa la conexión a la base de datos y retorna falso en caso de que falle dicha conexión
    @-> pagina_actual: retorna el número de la página actual, por medio de Get
    @-> obtener_posts: Calculael número de posts que deben ser asignados por página, según la cantidad que se le especifico en el archivo config 
    @-> limpiar_datos: 1(quita espacios al inicio y fin de una cadena de caracteres), 2(quita los slashes) 3(quita caracteres html) 
    @-> conexion: 
    strtotime()=> sirve para convertir una cadena de texto a 'tiempo' 
    */
    
    function conexion($bd_config){
        try {
            $connection = new PDO('mysql:host='.$bd_config['host'].';dbname='.$bd_config['database'], $bd_config['user'], $bd_config['pwd']);
            return $connection;
        } catch (PDOException $e) {
            return false;
        }
    }

    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }
    
    function pagina_actual(){
        return isset($_GET['page']) ? (int)$_GET['page'] : 1;
    }

    function obtener_posts($post_por_page, $connection){
        $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_page - $post_por_page : 0;
        $statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_page");
        $statement->execute();
        return $statement->fetchAll();
    }

    function id_post($id){
        return (int)limpiarDatos($id);
    }

    function obtener_post($connection, $id_post){
        $statement = $connection->query("SELECT * FROM articulos WHERE id = $id_post LIMIT 1");
        $statement = $statement->fetchAll();
        return ($statement) ? $statement : false;
    }

    function fecha($fecha){
        $timestamp = strtotime($fecha);
        $meses =  array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

        $dia = date('d', $timestamp);
        $mes = date('m', $timestamp)-1;
        $año = date('Y', $timestamp);

        $fecha = "$dia de $meses[$mes] del $año";
        return $fecha;
    }

    function numero_paginas($post_por_page, $connection){
        $total_post = $connection->prepare('SELECT FOUND_ROWS() as total');
        $total_post->execute();
        $total_post = $total_post->fetch()['total'];
        // ceil redondea hacia arriba( 4.1 a 5 o 4.5 a 5, etc)
        $numero_paginas = ceil($total_post / $post_por_page);
        return $numero_paginas;
    }

    function sessionExists(){
        if(!isset($_SESSION['admin'])){
            header('Location: '.ROUTE);
        }
    }

?>