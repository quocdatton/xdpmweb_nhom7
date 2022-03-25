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
<div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Product List</h6>
                                <a href="/createProduct" class="btn btn-info">Add Product</a>
                                <!-- <a href="/updateProduct" class="btn btn-info">up Product</a> -->
                            </div>
                        </div>
                        
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Brand ID</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qty</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <?php echo e($item->id); ?>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <h1 class="text-xs text-secondary mb-0"><?php echo e($item->name); ?></h1>
                                            </td>
                                            <td >
                                                <p style="white-space: nowrap;
overflow: hidden; text-overflow: ellipsis; "  class="text-xs text-secondary mb-0"><?php echo e($item->description); ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo e($item->brand_id); ?></p>
                                            </td>
                                            
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success"><?php echo e($item->price); ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?php echo e($item->qty); ?></span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?php echo e(URL::to('/updateProduct/'.$item->id)); ?>" class="btn btn-link text-dark px-3 mb-0" data-toggle="tooltip" data-original-title="Edit product">
                                                Edit <i class="material-icons text-sm me-2">edit</i>
                                                </a>
                                                <a href="<?php echo e(URL::to('/delete/'.$item->id)); ?>" class="btn btn-link text-danger text-gradient px-3 mb-0" data-toggle="tooltip" data-original-title="Delete product">
                                                Delete <i class="material-icons text-sm me-2">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\abb\vdregister\laravel_demo_app\resources\views/layouts/app/products.blade.php ENDPATH**/ ?>