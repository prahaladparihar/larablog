<nav class="navbar navbar-expand-md navbar-default bg-light shadow-sm rounded">
  <div class="container">
      @guest
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/blog.png" alt="logo">
          {{-- {{ config('app.name', 'Laravel') }} --}}
        </a>
      @else
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
          <img src="/blog.png" alt="logo">
          {{-- {{ config('app.name', 'Laravel') }} --}}
        </a>
      @endguest
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            @guest
              <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
              </li>
            @endguest
            {{-- <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/posts">Blogs</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href = '/dashboard'>
                            <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                          </a>
                          <a class="dropdown-item" href = '/posts/create'>
                            <i class="fa fa-plus" aria-hidden="true"></i> Create New
                          </a>
                          <a class="dropdown-item" href = '/dashboard/fav'>
                            <i class="fa fa-heart" aria-hidden="true"></i> Favorite Post
                          </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out" aria-hidden="true"></i>
                              {{ __('Logout') }} 
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>