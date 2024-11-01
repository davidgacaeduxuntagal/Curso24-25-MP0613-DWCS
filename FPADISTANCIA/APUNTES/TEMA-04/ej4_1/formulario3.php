<form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="p" class="font-weight-bold">Elige un producto</label>
        <select class="form-control" id="p" name="producto">
    <?php
        if (!$error) {
            $consulta = "select id, nombre, nombre_corto from productos order by nombre";
            $stmt = $conProyecto->prepare($consulta);

            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                $error = true;
                $mensaje = $ex->getMessage();
                $conProyecto = null;
            }
            while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<option value='{$filas->id}'>$filas->nombre</option>";
            }
            
            //cerramos las conexiones.
            $stmt = null;
            $conProyecto = null;
        }
        ?>
        </select>
    </div>

    <div class="mt-2">
        <?php
        if (!$error) { //si hay errores desactivo el boton enviar.
            echo "<input type='submit' class='btn btn-info mr-3' value='Consultar Stock' name='enviar'>";
        } else {
            echo "<input type='submit' class='btn btn-info mr-3' value='Consultar Stock' name='enviar' disabled>";
        }
        ?>
    </div>
</form>