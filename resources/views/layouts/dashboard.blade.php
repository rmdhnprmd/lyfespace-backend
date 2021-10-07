<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
      <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
      <link href="/style/main.css" rel="stylesheet" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-end" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <a href="{{ route('home') }}">
              <img
              src="/images/dashboard-store-logo.svg"
              alt=""
              class="my-4"
              width="170"
            />
            </a>
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('dashboard') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}"
            >
              Dashboard
            </a>
            <a
              href="{{ route('dashboard-product') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }}"
            >
              My Products
            </a>
            <a
              href="{{ route('dashboard-transaction') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}"
            >
              Transactions
            </a>
            <a
              href="{{ route('dashboard-settings-store') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings')) ? 'active' : '' }}"
            >
              Store Settings
            </a>
            <a
              href="{{ route('dashboard-settings-account') }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/account')) ? 'active' : '' }}"
            >
              My Account
            </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <!-- Navbar -->
          <nav
            class="navbar navbar-expand-md navbar-light navbar-store fixed-top"
            data-aos="fade-down"
            >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none me-auto me-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Dekstop Menu -->
                <ul class="navbar-nav d-none d-md-flex ms-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      role="button"
                      id="navbarDropdown"
                      data-bs-toggle="dropdown"
                      >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle me-2 profile-picture"
                      />
                      Hi, {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                      <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                      <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">
                        Settings
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                        class="dropdown-item">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                      @php
                        $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                      @endphp
                      @if ($carts > 0)
                        <img src="/images/icon-cart-filled.svg" alt="" />
                        <div class="card-badge">{{ $carts }}</div>
                      @else
                        <img src="/images/icon-cart-empty.svg" alt="" />    
                      @endif
                    </a>
                  </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-md-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block"> Hi, {{ Auth::user()->name }} </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link d-inline-block"> Home </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block"> My Cart </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                      class="btn btn-warning d-grid nav-link"> 
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- Content --}}
          @yield('content')

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
      <script src="/vendor/jquery/jquery-3.6.0.slim.min.js"></script>
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script>
        $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
    @stack('addon-script')
  </body>
</html>
