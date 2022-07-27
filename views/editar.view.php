<?php require '../complements/header.php';?>

    <div class="contenedor" style="min-height:80vh;">
        
        <div class="post">
            <article>
                <h2 class="titulo">Editar artículo</h2>
                <form enctype="multipart/form-data" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                    <label for="titulo">Titulo del artículo:</label>
                    <input type="text" name="titulo" value="<?php echo $post['titulo'];?>" required>
                    <label for="extracto">Resumen del artículo:</label>
                    <input type="text" name="extracto" minlength="0" maxlength="255" value="<?php echo $post['extracto'];?>" required>
                    <label for="texto">Texto completo del artículo:</label>
                    <textarea name="texto" required><?php echo $post['texto'];?></textarea>
                    <label for="thumb">Imagen del artículo:</label>
                    <input type="file" name="thumb" class="custom-file-input">
                    <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'];?>">

                    <input type="submit" value="Modificar artículo">
                </form>
            </article>
        </div>
        <div style="text-align: center; margin: 40px 0;">
            <a href="<?php echo ROUTE; ?>admin" class="regresar"><i class="uil uil-left-arrow-to-left"></i> Regresar</a>
        </div>

    </div>

<?php require '../complements/footer.php';?>