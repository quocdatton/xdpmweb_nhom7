@extends('layouts.auth.master')

@section('content')
 
    @include('layouts.partials.messages')
    <div class="login-box">
  <h2>Login</h2>
  <form method="post" action="{{ route('login.perform') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
    </div>
    <div class="user-box">
    <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
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
@endsection