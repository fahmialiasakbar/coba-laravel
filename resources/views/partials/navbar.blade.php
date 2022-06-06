<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Dinata Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ $active === "home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ $active === "about" ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ $active === "posts" ? 'active' : '' }}" href="/posts">Posts</a>
          <a class="nav-link {{ $active === "categories" ? 'active' : '' }}" href="/categories">Categories</a>
        </div>

        <div class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a href="/dashboard" class="dropdown-item">
                    <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-right"></i>Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <a href="/login" class="nav-link {{ $active === "login" ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          @endauth
        </div>
      </div>
    </div>
</nav>