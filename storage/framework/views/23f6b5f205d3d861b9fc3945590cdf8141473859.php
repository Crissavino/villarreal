<script type="application/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/jquery.scrollex.min.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/jquery.scrolly.min.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/browser.min.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/breakpoints.min.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/util.js')); ?>"></script>
<script type="application/javascript" src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

<script type="application/javascript" src="<?php echo e(asset('js/index.js')); ?>"></script>

<script type="application/javascript" src="<?php echo e(asset('js/menu.js')); ?>"></script>

<script>
  function goToIndexOne() {
    if(window.location.pathname !== '/') {
      window.location = "<?php echo route('index') . '#one'; ?>"
    }
  }
  function goToIndexTwo() {
    if(window.location.pathname !== '/') {
      window.location = "<?php echo route('index') . '#two'; ?>"
    }
  }
</script><?php /**PATH /home/crissavino/Desktop/.proyects/villarreal/resources/views/partials/scripts.blade.php ENDPATH**/ ?>