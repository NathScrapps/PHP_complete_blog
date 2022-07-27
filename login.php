<?php session_start();
    require './admin/config.php';
    require 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = limpiarDatos($_POST['usuario']);
        $pwd = limpiarDatos($_POST['password']);

        if($user == $blog_admin['user'] && $pwd == $blog_admin['usr_pwd']){
            $_SESSION['admin'] = $blog_admin['user'];
            header('Location: '.ROUTE.'admin');
        }
    }

    require_once './views/login.view.php';

?>