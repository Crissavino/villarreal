<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="<?php echo e(route('index')); ?>">Bienvenido</a></li>
                <li><a href="<?php echo e(route('index')); ?>#two">Quienes somos?</a></li>
                <li><a href="<?php echo e(route('index')); ?>#one">Ultimos articulos</a></li>

                <li id="hamburgerLI"><a href="#">Contactanos</a></li>
                <?php if(auth()->guard()->check()): ?>
                    <li id="hamburgerLI"><a href="<?php echo e(route('login')); ?>">Pefil</a></li>
                <?php else: ?>

                    <li id="hamburgerLI"><a href="#">Pefil</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <a href="javascript:void(0);" class="hamburgerMenuIcon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <div class="inner" id="hamburgerMenu">
        <nav id="hamburgerNav">
            <ul id="hamburgerUL">
                <li id="hamburgerLI"><a href="<?php echo e(route('index')); ?>">Bienvenido</a></li>
                <li id="hamburgerLI"><a href="<?php echo e(route('index')); ?>#one">Quienes somos?</a></li>
                <li id="hamburgerLI"><a href="<?php echo e(route('index')); ?>#two">Ultimos articulos</a></li>

                <li id="hamburgerLI"><a href="#">Contactanos</a></li>
                <?php if(auth()->guard()->check()): ?>
                    <li id="hamburgerLI"><a href="<?php echo e(route('login')); ?>">Pefil</a></li>
                <?php else: ?>

                    <li id="hamburgerLI"><a href="#">Pefil</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section><?php /**PATH /home/crissavino/Desktop/.proyects/villarreal/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>