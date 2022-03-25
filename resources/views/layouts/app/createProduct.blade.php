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
@extends('layouts.app.master')
@section('body')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add Product</h6>
                            </div>
                        </div>
                        
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <div style="margin-left: 100px;" class="table align-items-center mb-0">
                                <form role="form" action="/createProduct" method="post" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="txtName" placeholder="Nhập tên sản phẩm">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>   
                                        @enderror
                                          
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Brand</label>
                                        <input type="number" class="form-control" id="brand" name="txtBrand" placeholder="Nhập thương hiệu id số (2,3,4,5)">
                                        @error("brand_id")
                                        <span class="text-danger">{{$message}}</span>   
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Price</label>
                                        <input type="number" class="form-control" id="price" name="txtPrice" placeholder="Nhập giá">
                                        @error("price")
                                        <span class="text-danger">{{$message}}</span>   
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Qty</label>
                                        <input type="number" class="form-control" id="qty" name="txtQty" placeholder="Nhập số lượng">
                                        @error("qty")
                                        <span class="text-danger">{{$message}}</span>   
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Description</label>
                                        <input type="text" class="form-control" id="description" name="txtDescription" placeholder="Nhập thông tin sản phẩm">
                                        @error("description")
                                        <span class="text-danger">{{$message}}</span>   
                                        @enderror
                                    </div>
                                    <button class="btn btn-success" type="submit">Add</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection