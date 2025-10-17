

<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-md p-8 text-center">
        <h2 class="text-3xl font-semibold mb-1"><?php echo e($developer['name']); ?></h2>
        <p class="text-indigo-600 font-medium mb-4"><?php echo e($developer['role']); ?></p>

        <p class="text-gray-600 leading-relaxed mb-6"><?php echo e($developer['bio']); ?></p>

        <!-- Affiche uniquement l'email en texte -->
        <p class="text-gray-800 font-medium mt-4"><?php echo e($developer['email']); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Solicode\Documents\GitHub\Portfolio-Laravel\Portfolio\laravel\resources\views/home.blade.php ENDPATH**/ ?>