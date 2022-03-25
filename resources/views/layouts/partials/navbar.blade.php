<header >
  <div >
    <div >
      @auth
        {{auth()->user()->name}}
          <a href="{{ route('logout.perform') }}" >Logout</a>    
      @endauth
      @guest
          <a href="{{ route('login.perform') }}" >Login</a>
      @endguest
    </div>
  </div>
</header>