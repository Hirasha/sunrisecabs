
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sunrise Cabs</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/vowner') }}">List your car</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="{{ url('/viewvehicle') }}">Vehicles</a>
            </li>
            <!-- Authentication Links -->
            @if (Auth::guest())
                        <li class="nav-item"><a class = "nav-link js-scroll-trigger" href="{{ url('/login') }}">Login</a></li>
                        <li><a class = "nav-link js-scroll-trigger" href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown nav-item"">
                            <a class = "nav-link js-scroll-trigger" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li class="nav-item"><a class = "nav-link js-scroll-trigger" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
          </ul>
        </div>
      </div>
    </nav>