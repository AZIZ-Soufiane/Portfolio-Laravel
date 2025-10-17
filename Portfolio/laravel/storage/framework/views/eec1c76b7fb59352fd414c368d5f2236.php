<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Developer Portfolio - <?php echo $__env->yieldContent('title', 'Accueil'); ?></title>

    <!-- Tailwind via CDN (pas de npm requis) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <h1 class="text-2xl font-bold">My Portfolio</h1>
        </div>
    </header>

    <!-- Main content -->
    <main class="flex-grow container mx-auto px-6 py-10">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">© <?php echo e(date('Y')); ?> - Developer Portfolio</p>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\Users\Solicode\Documents\GitHub\Portfolio-Laravel\Portfolio\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>