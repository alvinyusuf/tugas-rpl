<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Ini Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Cari Laundry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Pesananku</a>
          </li>
        </ul>
        @auth
          <ul class="btn btn-primary" style="list-style: none;">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ auth()->user()->name }}</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile"><i class="fa-solid fa-user"></i> My Profile</a></li>
                    @if (auth()->user()->role === 'admin')
                      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-store"></i> My Store</a></li>
                    @else
                      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-store"></i> Bikin Toko Baru</a></li>
                    @endif
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                      </form>
                    </li>
                  </ul>
              </li>
          </ul>
        @else
        <ul class="btn btn-primary" style="list-style: none;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Daftar/Masuk</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/register"><i class="fas fa-user"></i> Daftar</a></li>
              <li><a class="dropdown-item" href="/login"><i class="fas fa-sign-in-alt"></i> Masuk</a></li>
            </ul>
          </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>