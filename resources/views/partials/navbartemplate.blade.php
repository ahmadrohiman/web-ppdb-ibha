<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2><img src="{{ asset('images/logo.png') }}" width="65" class="img-thumbnail rounded-circle" class="fa fa-car text-primary me-2"> IBHA </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{($title === "Home") ?'active':''}}">Home</a>
            <a href="/about" class="nav-item nav-link {{($title === "About") ?'active':''}}">About</a>
            {{-- <a href="/categories" class="nav-item nav-link {{($title === "Categories") ?'active':''}}">Categories</a> --}}
            <div class="nav-item dropdown">
            <a href="/posts" class="nav-item nav-link {{($title === "Blog") ?'active':''}}">Blog</a>
        </div>
        {{-- <a href="/login" class="nav-link {{ ($active==="login") ? 'active': '' }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Admin<i class="fa fa-arrow-right ms-3"></i></a> --}}
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Wellcome Back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">
                </i> Logout</button>
              </form>
              </li>
            </ul>
          </li>
        @else
            <li class="nav-item">
                {{-- <a href="/login" class="nav-link {{ ($active==="login") ? 'active': '' }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Admin<i class="fa fa-arrow-right ms-3"></i></a> --}}
                {{-- <a href="/login" class="nav-link {{ ($active==="login") ? 'active': '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a> --}}
            </li>
        @endauth
    </ul>
      </div>
    </div>
  </nav>
    </div>
</nav>
<!-- Navbar End -->
