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
    <div>
        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="wrapper">
            <?php echo $__env->yieldContent('content'); ?>

            <div class="contactsDiv">
                <a href="https://wa.me/544119656?text=Me%20gustaria%20hacerles%20una%20concuslta" target="_blank" style="border-bottom: 0">
                    <img class="whatsAppIcon" src="<?php echo e(asset('images/whatsapp.png')); ?>" alt="">
                </a>

                <a href="<?php echo e(route('contacto')); ?>" style="border-bottom: 0">
                    <img class="whatsAppIcon" src="<?php echo e(asset('images/mail.png')); ?>" alt="">
                </a>
            </div>
        </div>



        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('javascript'); ?>
        <script>
          console.log('hola');
        </script>
    </div>
</body>
</html>
<?php /**PATH /home/crissavino/Desktop/.proyects/villarreal/resources/views/layouts/app.blade.php ENDPATH**/ ?>