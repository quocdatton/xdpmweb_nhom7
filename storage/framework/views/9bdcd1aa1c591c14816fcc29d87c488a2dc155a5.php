

<?php $__env->startSection('content'); ?>
<div class="login-box">
  <h2>Login</h2>
  <form method="post" action="<?php echo e(route('register.perform')); ?>">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            <?php if($errors->has('email')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            <?php if($errors->has('username')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
            <?php endif; ?>
        </div>
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <?php if($errors->has('password_confirmation')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password_confirmation')); ?></span>
            <?php endif; ?>
        </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abb\vdregister\laravel_demo_app\resources\views/layouts/auth/register.blade.php ENDPATH**/ ?>