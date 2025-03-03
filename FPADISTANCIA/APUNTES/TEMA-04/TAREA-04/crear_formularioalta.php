
<form name="crear" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="n">Nombre</label>
            <input type="text" class="form-control" id="n" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="form-group col-md-6">
            <label for="nc">Nombre Corto</label>
            <input type="text" class="form-control" id="nc" placeholder="Nombre Corto" name="nombrec" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="p">Precio (€)</label>
            <input type="number" class="form-control" id="p" placeholder="Precio (€)" name="pvp" min="0" step="0.01" required>
        </div>
        <div class="form-group col-md-6">
            <label for="f">Familia</label>
            <select class="form-control" name="familia">
<?php
        $consulta = "select cod, nombre from familias order by nombre";
        $stmt = $conProyecto->prepare($consulta);
    
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            die("Error al recuperar los productos " . $ex->getMessage());
        }

        while ($filas = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<option value='{$filas->cod}'>$filas->nombre</option>";
        }

        $stmt = null;
        $conProyecto = null;
?>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="d">Descripción</label>
            <textarea class="form-control" name="descripcion" id="d" rows="12"></textarea>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mr-3" name="enviar">Crear</button>
    <input type="reset" value="Limpiar" class="btn btn-success mr-3">
    <a href="listado.php" class="btn btn-info">Volver</a>

</form>

