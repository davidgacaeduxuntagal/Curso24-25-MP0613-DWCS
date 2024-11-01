<form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="p" class="font-weight-bold">Elige un producto</label>
        <select class="form-control" id="p" name="producto">
        <?php
            $consulta="select id, nombre, nombre_corto from productos order by nombre";
            if ( !($resultado=$conProyecto->query($consulta) ) ) {
                die("Error al recuperar los productos!!! ". $conProyecto->error);
            }

            while ( $fila=$resultado->fetch_assoc() ) {
                echo "<option value='{$fila['id']}'>".$fila['nombre']."</option>";
            }

            cerrarConexion();
        ?>
        </select>
    </div>
    <div class="mt-2">
        <input type="submit" class="btn btn-info mr-3" value="Consultar Stock" name="enviar">
    </div>
</form>