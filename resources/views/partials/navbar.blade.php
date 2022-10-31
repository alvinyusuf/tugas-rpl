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
          @if (auth()->user()->role === 'admin')
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Toko Laundryku</a>
              </li>
            </ul>
          @endif
        {{-- <form class="d-flex"> --}}
          <ul class="btn btn-primary" style="list-style: none;">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ auth()->user()->name }}</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-store"></i> My Store</a></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                      </form>
                      {{-- <a class="dropdown-item" href="#"> --}}
                      {{-- <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>Logout</button>
                      </form> --}}
                      {{-- <i class="fa-solid fa-right-from-bracket"></i> Logout --}}
                      {{-- </a> --}}
                    </li>
                  </ul>
              </li>
          </ul>
        {{-- </form> --}}
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
        {{-- <div class="d-flex justify-content-center align-items-center">
          <a class="btn btn-primary w-100" style="height: 40px;"
              href="/register">Gabung</a>
        </div> --}}
        @endauth
      </div>
    </div>
  </nav>