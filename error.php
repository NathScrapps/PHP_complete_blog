<?php
    require './admin/config.php';
    require './complements/header.php';
?>
<div class="contenedor" style="height:80vh;">
    <div class="post">
        <article>
            <h2 class="titulo" style="text-align:center;font-weight:bold;">¡Error!</h2>
            <div class="thumb">
                <a href="<?php echo ROUTE.'single.php?id='.$post['id'];?>">
                    <img src="<?php echo ROUTE.$blog_config['folder_images'].'Error_Lamp _Robot.svg';?>" alt="" width="300" height="300">
                </a>
            </div>
            <p class="extracto" style="text-align:center;">Ha ocurrido un error, prueba a buscar soluciones!</p>
        </article>
    </div>
</div>

<?php require './complements/footer.php';?>