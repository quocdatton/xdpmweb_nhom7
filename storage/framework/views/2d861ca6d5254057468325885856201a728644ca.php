<!--
=========================================================
* Material Dashboard 2 - v3.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php $__env->startSection('body'); ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Update Product</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div style="margin-left: 100px;" class="table align-items-center mb-0">
                                <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form role="form" action="/update/<?php echo e($item->id); ?>" method="post" enctype="multipart/form-data" >
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo method_field("PUT"); ?>
                                    <input type="hidden" class="form-control" value="<?php echo e($item->id); ?>" id="id" name="id" placeholder="Input name">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="txtName" value="<?php echo e($item->name); ?>" placeholder="Nh???p t??n s???n ph???m">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Brand</label>
                                        <input type="number" class="form-control" id="brand" name="txtBrand" value="<?php echo e($item->brand_id); ?>" placeholder="Nh???p th????ng hi???u id s??? (2,3,4,5)">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Price</label>
                                        <input type="number" class="form-control" id="price" name="txtPrice" value="<?php echo e($item->price); ?>" placeholder="Nh???p gi??">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Qty</label>
                                        <input type="number" class="form-control" id="qty" name="txtQty" value="<?php echo e($item->qty); ?>" placeholder="Nh???p s??? l?????ng">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Description</label>
                                        <input type="text" class="form-control" id="description" name="txtDescription" value="<?php echo e($item->description); ?>" placeholder="Nh???p th??ng tin s???n ph???m">
                                    </div>
                                    <button class="btn btn-success" type="submit">Update</button>
                                </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abb\vdregister\laravel_demo_app\resources\views/layouts/app/updateProduct.blade.php ENDPATH**/ ?>