<!doctype html>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>EJI Villarreal - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div id="app">
        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('javascript'); ?>
    </div>
</body>
</html>
<?php /**PATH /home/crissavino/Desktop/.proyects/villarreal/resources/views/layouts/app.blade.php ENDPATH**/ ?>