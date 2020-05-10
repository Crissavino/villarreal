<?php $__env->startSection('content'); ?>

    <!-- Form -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <section>
                <h2 style="display: inline-block">Inicia sesion</h2>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row gtr-uniform">

                        <div class="col-12">
                            <input type="email" name="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   id="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                   placeholder="Email" autofocus/>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-12">
                            <input type="password" name="password" id="password"
                                   class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="" required
                                   autocomplete="new-password" placeholder="Contrasena"/>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group row w-100">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Recordarme')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="actions stacked">
                                <li>
                                    <button type="submit" class="primary fit">
                                        <?php echo e(__('Iniciar sesion')); ?>

                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </form>

                <h3 style="display: inline-block; margin-left: 20px; margin-bottom: 20px;">
                    No tiene cuenta? <a style="border-bottom: 0;" href="<?php echo e(route('register')); ?>">Crea una</a>
                </h3>
                <?php if(Route::has('password.request')): ?>
                    <h4 style="display: block; margin-left: 20px">
                        Olvidaste tu contrasena?
                        <a style="border-bottom: 0;" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Recuperala')); ?>

                        </a>
                    </h4>
                <?php endif; ?>
            </section>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crissavino/Desktop/.proyects/villarreal/resources/views/auth/login.blade.php ENDPATH**/ ?>