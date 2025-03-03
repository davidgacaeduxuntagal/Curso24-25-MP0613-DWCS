<?php $__env->startSection('titulo'); ?>
    <?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
    <?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <form name="crear" method="POST" action="crearJugador.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="n">Nombre</label>
                <input type="text" class="form-control" id="n" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="ap">Apellidos</label>
                <input type="text" class="form-control" id="ap" placeholder="Apellidos" name="apellidos" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="d">Dorsal</label>
                <input type="number" class="form-control" id="d" placeholder="Dorsal" name="dorsal" min="1" step="1"
                       max="40">
            </div>
            <div class="form-group col-md-4">
                <label for="p">Posición</label>
                <select class="form-control" name="posicion" id="p">
                    <option value="1">Portero</option>
                    <option value="2">Defensa</option>
                    <option value="3">Lateral Izquierdo</option>
                    <option value="4">Lateral Derecho</option>
                    <option value="5">Central</option>
                    <option value="6">Delantero</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="c">Código de Barras</label>
                <?php if(!isset($code)): ?>
                    <input type="text" placeholder='Código de Barras' maxlength="13" class="form-control"
                           name="barcode" readonly>
                <?php else: ?>
                    <input type="text" value="<?php echo e($code); ?>" maxlength="13" class="form-control"
                           name="barcode" readonly>

                <?php endif; ?>
            </div>

        </div>

        
        <?php if(!isset($code)): ?>
            <button type="button" onclick="return confirm('Debe generar un código de barras antes')" class="btn btn-primary mr-3" name="enviar">Crear</button>        
        <?php else: ?>
            <button type="submit" class="btn btn-primary mr-3" name="enviar">Crear</button>
        <?php endif; ?>
        <input type="reset" value="Limpiar" class="btn btn-success mr-3">
        <a href="jugadores.php" class="btn btn-info mr-3">Volver</a>
        <a href="generarCode.php" class="btn btn-secondary">
            <i class="fas fa-barcode"></i> Generar Barcode
        </a>
    </form>
    <?php if(isset($error)): ?>
        <div class="alert alert-danger h-100 mt-3">
            <p><?php echo e($error); ?></p>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>