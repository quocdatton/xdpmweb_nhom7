@extends('layouts')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<h2>Create user</h2>
<form role="form" action="/user/store" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="txtName" placeholder="Input name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Input email">
    </div>
    <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Input email">
    </div>
    <button class="btn btn-success" type="submit">Add</button>
</form>
</main>
@endsection