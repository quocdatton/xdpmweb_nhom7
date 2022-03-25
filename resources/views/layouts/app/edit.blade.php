@extends('layouts')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <h2>Edit user</h2>
    <form role="form" action="/user/update/{{$db->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="hidden" class="form-control" value="{{$db->id}}" id="id" name="id" placeholder="Input name">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{$db->name}}" id="name" name="txtName" placeholder="Input name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control"  value="{{$db->email}}" id="email" name="email" placeholder="Input email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control"  value="{{$db->password}}" id="pass" name="pass" placeholder="Input email">
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
</main>
