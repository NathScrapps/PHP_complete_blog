<?php require '../complements/header.php';?>

    <div class="contenedor" style="min-height:80vh;">
        <h2 class="titulo">Agregar nuevo artículo</h2>

        <div class="post">
            <article>
                <form enctype="multipart/form-data" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="text" name="titulo"  placeholder="Título del artículo" required>
                    <input type="text" name="extracto"  placeholder="Resumen del artículo" minlength="0" maxlength="255" required>
                    <textarea name="texto" placeholder="Texto completo del artículo" required></textarea>
                    <input type="file" name="thumb" class="custom-file-input" >
                    <input type="submit" value="Crear artículo">
                </form>
            </article>
        </div>
        <div style="text-align: center;">
            <a href="<?php echo ROUTE; ?>admin" class="regresar"><i class="uil uil-left-arrow-to-left"></i> Regresar</a>
        </div>

    </div>

<?php require '../complements/footer.php';?>