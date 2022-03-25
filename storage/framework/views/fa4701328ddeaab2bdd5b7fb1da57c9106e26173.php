<header >
  <div >
    <div >
      <?php if(auth()->guard()->check()): ?>
        <?php echo e(auth()->user()->name); ?>

          <a href="<?php echo e(route('logout.perform')); ?>" >Logout</a>    
      <?php endif; ?>
      <?php if(auth()->guard()->guest()): ?>
          <a href="<?php echo e(route('login.perform')); ?>" >Login</a>
      <?php endif; ?>
    </div>
  </div>
</header><?php /**PATH C:\xampp\htdocs\abb\vdregister\laravel_demo_app\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>