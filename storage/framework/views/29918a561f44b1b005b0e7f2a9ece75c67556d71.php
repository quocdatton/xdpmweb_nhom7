

<?php $__env->startSection('content'); ?>
 
    <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="login-box">
  <h2>Login</h2>
  <form method="post" action="<?php echo e(route('login.perform')); ?>">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email</label>
            <?php if($errors->has('username')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abb\vdregister\laravel_demo_app\resources\views/layouts/auth/login.blade.php ENDPATH**/ ?>