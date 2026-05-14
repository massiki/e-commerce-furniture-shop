<div>
  <!-- Header Start  -->
  <nav class="header-area header-white header-sticky d-none d-lg-block" x-data="{ searchBar: false }">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-lg-3">
          <!-- Header Logo Start -->
          <div class="header-logo">
            <a href="javascript:void(0)">
              <img src="{{ asset('assets/images/logo/logo-fikri.png') }}" alt="Logo" style="max-width: 50px" />
            </a>
          </div>
          <!-- Header Logo End -->
        </div>
        <div class="col-lg-6">
          <div class="header-menu">
            <ul class="nav-menu">
              <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
              <li><a href="{{ route('shop') }}" wire:navigate>Shop</a></li>
              <li><a href="{{ route('user.cart') }}" wire:navigate>Cart</a></li>
              <li><a href="{{ route('user.wishlist') }}" wire:navigate>Wishlist</a></li>
              <li><a href="{{ route('contact') }}" wire:navigate>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <!-- Header Meta Start -->
          <div class="header-meta">
            <div class="dropdown" @click="searchBar = !searchBar">
              <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                <i class="pe-7s-search"></i>
              </a>

              {{-- @if ($showSearchBar) --}}
              <div class="dropdown-menu dropdown-search" x-show="searchBar">
                <!-- Header Search Start -->
                <div class="header-search">
                  <form action="#">
                    <input type="text" placeholder="Enter your search key ... " />
                    <button>
                      <i class="pe-7s-search"></i>
                    </button>
                  </form>
                </div>
                <!-- Header Search End -->
              </div>
              {{-- @endif --}}
            </div>

            <div class="dropdown">
              <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

              <ul class="dropdown-menu dropdown-profile">
                <li><a href="{{ route('user.dashboard') }}" wire:navigate>My Account</a></li>
                <li><a href="{{ route('user.checkout') }}" wire:navigate>Checkout</a></li>
                @auth
                  <li><a href="{{ route('user.dashboard') }}" wire:navigate>{{ auth()->user()->name }}</a></li>
                @else
                  <li><a href="{{ route('login') }}" wire:navigate>Sign In</a></li>
                @endauth
              </ul>
            </div>
            <div class="dropdown">
              <a class="action" href="{{ route('user.wishlist') }}" wire:navigate>
                <i class="pe-7s-like"></i>
                @if ($countWishlists > 0)
                  <span class="number">{{ $countWishlists }}</span>
                @endif
              </a>
            </div>
            <div class="dropdown">
              <a class="action" href="{{ route('user.cart') }}" wire:navigate>
                <i class="pe-7s-shopbag"></i>
                @if ($countCartItems > 0)
                  <span class="number">{{ $countCartItems }}</span>
                @endif
              </a>
            </div>
          </div>
          <!-- Header Meta End -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Header End -->

  <!-- Header Mobile Start -->
  <nav class="header-mobile section d-lg-none">
    <!-- Header Mobile top Start -->
    <div class="header-mobile-top header-sticky">
      <div class="container">
        <div class="row row-cols-3 gx-2 align-items-center">
          <div class="col">
            <!-- Header Toggle Start -->
            <div class="header-toggle">
              <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
            <!-- Header Toggle End -->
          </div>
          <div class="col">
            <!-- Header Logo Start -->
            <div class="header-logo text-center">
              <a href="javascript:void(0)"><img src="{{ asset('assets/images/logo/logo-fikri.png') }}"
                  style="max-width: 40px" alt="Logo" /></a>
            </div>
            <!-- Header Logo End -->
          </div>
          <div class="col">
            <!-- Header Action Start -->
            <div class="header-meta">
              <div class="dropdown">
                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                <ul class="dropdown-menu dropdown-profile">
                  <li>
                    <a href="{{ route('user.dashboard') }}" wire:navigate>My Account</a>
                  </li>
                  <li><a href="{{ route('user.checkout') }}" wire:navigate>Checkout</a></li>
                  @auth
                    <li><a href="{{ route('user.dashboard') }}" wire:navigate>{{ auth()->user()->name }}</a></li>
                  @else
                    <li><a href="{{ route('login') }}" wire:navigate>Sign In</a></li>
                  @endauth
                </ul>
              </div>
              <a class="action" href="{{ route('user.cart') }}" wire:navigate>
                <i class="pe-7s-shopbag"></i>
                @if ($countCartItems > 0)
                  <span class="number">{{ $countCartItems }}</span>
                @endif
              </a>
            </div>
            <!-- Header Action End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Header Mobile top End -->

    <!-- Header Mobile Bottom End -->
    <div class="header-mobile-bottom">
      <div class="container">
        <!-- Header Search Start -->
        <div class="header-search">
          <form action="#">
            <input type="text" placeholder="Enter your search key ... " />
            <button><i class="pe-7s-search"></i></button>
          </form>
        </div>
        <!-- Header Search End -->
      </div>
    </div>
    <!-- Header Mobile Bottom End -->
  </nav>
  <!-- Header Mobile End -->

  <!-- off Canvas Start -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
      <!-- Canvas Action Start -->
      <div class="canvas-action">
        <a class="action" href="{{ route('user.wishlist') }}" wire:navigate><i class="icon-heart"></i> Wishlist
          @if ($countWishlists > 0)
            <span class="action-num">({{ $countWishlists }})</span>
          @endif
        </a>
        <a class="action" href="{{ route('user.cart') }}" wire:navigate><i class="icon-sliders"></i> Cart
          @if ($countCartItems > 0)
            <span class="action-num">({{ $countCartItems }})</span>
          @endif
        </a>
      </div>
      <!-- Canvas Action end -->

      <!-- Canvas Close bar Start -->
      <div class="canvas-close-bar">
        <span>Menu</span>
        <button class="menu-close" data-bs-dismiss="offcanvas">
          <i class="pe-7s-angle-left"></i>
        </button>
      </div>
      <!-- Canvas Close bar End -->
    </div>

    <div class="offcanvas-body">
      <!-- Canvas Menu Start -->
      <div class="canvas-menu">
        <nav>
          <ul class="nav-menu">
            <li><a href="{{ route('home') }}" wire:navigate>Home</a></li>
            <li><a href="{{ route('shop') }}" wire:navigate>Shop</a></li>
            <li><a href="{{ route('user.cart') }}" wire:navigate>Cart</a></li>
            <li><a href="{{ route('user.wishlist') }}" wire:navigate>Wishlist</a></li>
            <li><a href="{{ route('contact') }}" wire:navigate>Contact</a></li>
          </ul>
        </nav>
      </div>
      <!-- Canvas Menu End -->
    </div>
  </div>
  <!-- off Canvas End -->
</div>
