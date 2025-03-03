<?php $__env->startSection('titulo'); ?>
    <?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
    <?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <?php if(isset($mensaje)): ?>
        <div class="alert alert-success h-100 mt-3">
            <p><?php echo e($mensaje); ?></p>
        </div>
    <?php endif; ?>
    <a href='fcrear.php' class='btn btn-success mt-2 mb-2'><i class='fa fa-plus'></i> Nuevo Jugador</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr class="text-center" style="font-width: bold; font-size:1.1rem">
            <th scope="col">Nombre Completo</th>
            <th scope="col">Posición</th>
            <th scope="col">Dorsal</th>
            <th scope="col">Código de Barras</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <th scope="row"><?php echo e($item->apellidos.", ".$item->nombre); ?></th>
                <td><?php echo e($item->posicion); ?></td>
                <?php if(isset($item->dorsal)): ?>
                    <td><?php echo e($item->dorsal); ?></td>
                <?php else: ?>
                    <td>Sin Asignar</td>
                <?php endif; ?>
                <td class="d-flex justify-content-center"><?php echo $d->getBarcodeHTML($item->barcode, 'EAN13',2,33, 'white') ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>