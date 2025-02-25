<?php $__env->startSection('titulo'); ?>
    <?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
    <?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <table class="table table-striped">
        <thead>
        <tr class="text-center">
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre Corto</th>
            <th scope="col">Precio</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <th scope="row"><?php echo e($item->id); ?></th>
                <td><?php echo e($item->nombre); ?></td>
                <td><?php echo e($item->nombre_corto); ?></td>
                <?php if($item->pvp>100): ?>
                    <td class='text-danger'><?php echo e($item->pvp); ?></td>
                <?php else: ?>
                    <td class='text-success'><?php echo e($item->pvp); ?></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>