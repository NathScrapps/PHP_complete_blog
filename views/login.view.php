<?php require './complements/header.php';?>

    <div class="contenedor" style="min-height:80vh;">

        <div class="post">
            <article>
                <h2 class="titulo">Iniciar sesión</h2>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="text" name="usuario"  placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Iniciar sesión">
                </form>
            </article>
        </div>
        <div style="text-align: center;">
            <a href="<?php echo ROUTE; ?>" style="text-align:center;">Ir a la página principal</a>
        </div>
    </div>

<?php require './complements/footer.php';?>