
<form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group">
        <label for="p" class="font-weight-bold">Elige un producto</label>
        <select class="form-control" id="p" name="producto">
<?php
            $consulta = "select id, nombre, nombre_corto from productos order by nombre";
            $datos = $conProyecto->query($consulta);
            while ($filas = $datos->fetch(PDO::FETCH_OBJ)) {
                echo "<option value='{$filas->id}'>$filas->nombre</option>";
            }

            //cerramos las conexiones.
            $conProyecto = null;
?>
        </select>
    </div>
    <div class="mt-2">
        <input type="submit" class="btn btn-info mr-3" value="Consultar Stock" name="enviar">
    </div>
</form>