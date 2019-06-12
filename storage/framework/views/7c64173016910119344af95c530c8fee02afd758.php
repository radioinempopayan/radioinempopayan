<?php $__env->startSection('seccion'); ?>

	<h1>las cosas que raramente se me ocurren</h1>
	
	<?php $__currentLoopData = $trabajo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<a href="#"><?php echo e($item); ?></a><br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mago_jefer/Documents/GitHub/radioinempopayan/resources/views/beta.blade.php ENDPATH**/ ?>