<?php require '../complements/header.php';?>

    <div class="contenedor" style="min-height:80vh;">
    <h2>Panel de control</h2>
    <a href="nuevo.php" class="btn nuevo"><i class="uil uil-file-edit-alt"></i> Nuevo post</a>
    <a href="cerrar.php" class="btn cerrar"><i class="uil uil-signout"></i> Cerrar sesión</a>

        <?php foreach ($posts as $post):?>
            <div class="post">
                <article>
                    <h2 class="titulo"><?php echo $post['id'].'.- '.$post['titulo'];?></h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <a class="opcion editar" href="editar.php?id=<?php echo $post['id'];?>"><i class="uil uil-file-edit-alt"></i> Editar</a>
                    <a class="opcion ver " href="<?php echo ROUTE.'single.php?id='.$post['id'];?>"><i class="uil uil-eye"></i> Ver</a>
                    <a class="opcion borrar" href="borrar.php?id=<?php echo $post['id'];?>"><i class="uil uil-trash"></i> Borrar</a>
                </article>
            </div>
        <?php endforeach;?>
        <div style="text-align: center;">
            <a href="<?php echo ROUTE; ?>" style="text-align:center;">Ir a la página principal</a>
        </div>
        <?php require '../paginacion.php'; ?>
    </div>

<?php require '../complements/footer.php';?>