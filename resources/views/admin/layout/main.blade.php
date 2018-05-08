<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="z-index:1">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RPl</a>
          <ul class="nav navbar-nav">
            @if (!Auth::guest())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->nama }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid">
      <div class="row">
        @if (!Auth::guest())
        <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar" style="z-index:0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="/home" class="nav-link">Home</a>
              <a href="{{ route('users.index') }}" class="nav-link">Users</a>
              <a href="/siswa" class="nav-link">Siswa</a>
            </li>
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          @yield('content')
        </main>
        @else
          <main role="main" class="col-md-12 pt-3">
          @yield('content')
          <main>
        @endif
      </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
