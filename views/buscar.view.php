<?php require './complements/header.php';?>

<div class="contenedor">
        <h2 class="titulo"><?php echo $titulo;?></h2>

        <?php foreach ($resultados as $post):?>
            <div class="post">
                <article>
                    <h2 class="titulo">
                        <a href="<?php echo ROUTE.'single.php?id='.$post['id'];?>"><?php echo $post['titulo'];?></a>
                    </h2>
                    <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                    <div class="thumb">
                        <a href="<?php echo ROUTE.'single.php?id='.$post['id'];?>">
                            <img src="<?php echo ROUTE.$blog_config['folder_images'].$post['thumb'];?>" alt="">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto'];?></p>
                    <a class="continuar" href="<?php echo ROUTE.'single.php?id='.$post['id'];?>">Ver más...</a>
                </article>
            </div>
        <?php endforeach;?>

        <?php require 'paginacion.php'; ?>
    </div>

<?php require './complements/footer.php';?>