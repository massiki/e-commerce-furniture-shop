<div>
  <!-- Slider Section Start -->
  <div class="section slider-section">
    <div class="slider-shape"></div>

    <div class="container">
      <div class="slider-active">
        <div class="swiper-container" wire:ignore>
          <div class="swiper-wrapper">
            <!-- Single Slider Start  -->
            @foreach ($sliders as $slider)
              <div class="single-slider swiper-slide animation-style-01">
                <!-- Slider Content Start -->
                <div class="slider-content">
                  <h1 class="title">
                    {{ $slider->title }}
                  </h1>
                  <p>
                    {{ $slider->tagline }}
                  </p>
                  <a href="{{ $slider->link }}" class="btn btn-primary btn-hover-dark btn-margin">
                    purchase now
                  </a>

                </div>
                <!-- Slider Content End -->

                <!-- Slider images Start -->
                <div class="slider-images">
                  <img
                    src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($slider->image) ? asset('storage/' . $slider->image) : asset('assets/images/placehold-700x477.svg') }}"
                    width="707" height="477" alt="{{ $slider->name }}" />
                </div>
                <!-- Slider images End -->
              </div>
            @endforeach
            <!-- Single Slider End  -->
          </div>

          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Section End -->

  <!-- Popular Category Section Start -->
  <div class="section brand-logo">
    <div class="container">
      <div class="section-title pb-3">
        <h2 class="title">Popular Categories</h2>
      </div>
      <!-- Brand Logo Wrapper Start -->
      <div class="brand-logo-wrapper brand-active">
        <div class="swiper-container" wire:ignore>
          <div class="swiper-wrapper">
            <!-- Brand Logo Wrapper Start -->
            @foreach ($categories as $category)
              <div class="swiper-slide single-brand-02">
                <a href="#" wire:navigate><img
                    src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($category->image) ? asset('storage/' . $category->image) : asset('assets/images/placehold-400x400.svg') }}"
                    width="118" height="87" alt="" /></a>
                <h4 class="title mt-3"><a href="#" wire:navigate>{{ $category->name }}</a></h4>
              </div>
            @endforeach
            <!-- Brand Logo Wrapper End -->
          </div>
        </div>
      </div>
      <!-- Brand Logo Wrapper End -->
    </div>
  </div>
  <!-- Popular Category Section End -->

  <!-- Benefit Section Start -->
  <div class="section section-padding-02">
    <div class="container">
      <!-- Benefit Wrapper Start -->
      <div class="benefit-wrapper">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Single Benefit Start -->
            <div class="single-benefit">
              <img src="{{ asset('assets/images/should-dinamis/icon-1.png') }}" width="70" height="92"
                alt="Icon" />
              <h3 class="title">Free Shipping</h3>
              <p>
                Get 10% cash back, free shipping, free
                returns, and more at 1000+ top retailers!
              </p>
            </div>
            <!-- Single Benefit End -->
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Benefit Start -->
            <div class="single-benefit">
              <img src="{{ asset('assets/images/should-dinamis/icon-2.png') }}" width="70" height="92"
                alt="Icon" />
              <h3 class="title">Safe Payment</h3>
              <p>
                Get 10% cash back, free shipping, free
                returns, and more at 1000+ top retailers!
              </p>
            </div>
            <!-- Single Benefit End -->
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Benefit Start -->
            <div class="single-benefit">
              <img src="{{ asset('assets/images/should-dinamis/icon-3.png') }}" width="70" height="92"
                alt="Icon" />
              <h3 class="title">Online Support</h3>
              <p>
                Get 10% cash back, free shipping, free
                returns, and more at 1000+ top retailers!
              </p>
            </div>
            <!-- Single Benefit End -->
          </div>
        </div>
      </div>
      <!-- Benefit Wrapper End -->
    </div>
  </div>
  <!-- Benefit Section End -->

  <!-- Popular Brands Section Start -->
  <div class="section brand-logo mt-5">
    <div class="container">
      <div class="section-title pb-3">
        <h2 class="title">Popular Brands</h2>
      </div>
      <!-- Brand Logo Wrapper Start -->
      <div class="brand-logo-wrapper brand-active">
        <div class="swiper-container" wire:ignore>
          <div class="swiper-wrapper">
            <!-- Brand Logo Wrapper Start -->
            @foreach ($brands as $brand)
              <div class="swiper-slide single-brand-02">
                <a href="#" wire:navigate><img
                    src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($brand->image) ? asset('storage/' . $brand->image) : asset('assets/images/placehold-400x400.svg') }}"
                    width="118" height="87" alt="" /></a>
                <h4 class="title mt-3"><a href="#" wire:navigate>{{ $brand->name }}</a></h4>
              </div>
            @endforeach
            <!-- Brand Logo Wrapper End -->
          </div>
        </div>
      </div>
      <!-- Brand Logo Wrapper End -->
    </div>
  </div>
  <!-- Popular Brands Section End -->

  <!-- New Product Section Start -->
  <div class="section section-padding-02">
    <div class="container">
      <!-- Section Title Start -->
      <div class="section-title-02 text-center">
        <h2 class="title">New Products</h2>
      </div>
      <!-- Section Title End -->

      <!-- Product Wrapper 02 Start -->
      <div class="product-wrapper-02">
        <!-- Product Tabs Content Start -->
        <div class="product-tabs-content">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
              <div class="row">
                <!-- Single Product Start -->
                @foreach ($newProducts as $product)
                  <div class="col-lg-3 col-sm-6">
                    <div class="single-product-02 position-relative">
                      <div class="product-images position-relative">
                        <!-- BADGE: NEW (top left) -->
                        @if ($product->created_at >= now()->subDays(30))
                          <span class="position-absolute top-0 start-0 badge text-white z-1 rounded px-2 py-1"
                            style="background-color: #f2a100; font-size: 13px;">
                            NEW
                          </span>
                        @endif
                        <!-- BADGE: DISCOUNT (top right) -->
                        @if ($product->sale_price)
                          <span class="discount position-absolute top-0 end-0 z-2 fw-bold">
                            -<strong>{{ round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100) }}%</strong>
                          </span>
                        @endif
                        <!-- BADGE: OUT OF STOCK (center overlay) -->
                        @if ($product->stock_status === 'outofstock' || $product->quantity < 1)
                          <span
                            class="position-absolute top-50 start-50 translate-middle badge bg-secondary text-white z-2 opacity-75 fs-6 rounded px-3 py-2">
                            OUT OF STOCK
                          </span>
                        @endif
                        <!-- Existing Product Image -->
                        <a href="{{ route('product.detail', $product->slug) }}" wire:navigate>
                          <img
                            src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('assets/images/placehold-400x400.svg') }}"
                            width="270" height="303" alt="">
                        </a>
                        <ul class="product-meta">
                          <li>
                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                class="pe-7s-search"></i></a>
                          </li>
                          <li>
                            <a class="action p-0 @auth {{ $product->wishlists->isNotEmpty() ? 'border-0 text-white' : '' }} @endauth"
                              style="@auth {{ $product->wishlists->isNotEmpty() ? 'background-color: #f2a100' : '' }} @endauth"
                              wire:click.prevent="toggleWishlist({{ $product->id }})" href="javascript:void(0)">
                              <i class="pe-7s-like"></i>
                            </a>
                          </li>
                          <li>
                            @if ($product->stock_status === 'instock' && $product->quantity > 0)
                              <a class="action p-0 @auth {{ $product->cartItems->first() ? 'border-0 text-white' : '' }} @endauth"
                                style="@auth {{ $product->cartItems->first() ? 'background-color: #f2a100' : '' }} @endauth"
                                wire:click.prevent="toggleCart({{ $product->id }})" href="javascript:void(0)">
                                <i class="pe-7s-shopbag"></i>
                              </a>
                            @else
                              <a class="action p-0 bg-secondary border-0 text-white" href="javascript:void(0)">
                                <i class="pe-7s-shopbag"></i>
                              </a>
                            @endif
                          </li>
                        </ul>
                      </div>
                      <div class="product-content">
                        <h4 class="title">
                          <a href="{{ route('product.detail', $product->slug) }}"
                            wire:navigate>{{ $product->name }}</a>
                        </h4>
                        <div class="price">
                          @if ($product->sale_price)
                            <span class="sale-price">Rp {{ number_format($product->sale_price, 0, ',', '.') }}
                            </span>
                            <span class="old-price">Rp
                              {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                          @else
                            <span class="sale-price">Rp
                              {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                <!-- Single Product End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Product Tabs Content End -->
      </div>
      <!-- Product Wrapper 02 End -->
    </div>
  </div>
  <!-- New Product Section End -->

  <!-- Banner Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- Single Banner Start -->
          <div class="single-banner-03">
            <img src="{{ asset('assets/images/should-dinamis/banner-05.jpg') }}" width="570" height="299"
              alt="Banner" />
            <div class="banner-content">
              <h6 class="sub-title">High-Quality</h6>
              <h3 class="title">
                <a href="#">New Kitchen <br />
                  Furniture</a>
              </h3>
              <a class="btn btn-primary btn-hover-dark" href="#">Shop
                Now</a>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>
        <div class="col-lg-6">
          <!-- Single Banner Start -->
          <div class="single-banner-03">
            <img src="{{ asset('assets/images/should-dinamis/banner-06.jpg') }}" width="570" height="299"
              alt="Banner" />
            <div class="banner-content">
              <h6 class="sub-title">Best-Quality</h6>
              <h3 class="title">
                <a href="#">Bed Room <br />
                  Furniture</a>
              </h3>
              <a class="btn btn-primary btn-hover-dark" href="#">Shop
                Now</a>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Section End -->

  <!-- Countdown Section Start -->
  <div class="section section-padding overflow-hidden bg-color-01">
    <div class="container">
      <div class="countdown-main-wrapper">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <!-- Countdown Content Start -->
            <div class="countdown-content">
              <h2 class="title">
                Chair Collection <span>50%</span> Off
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                adipisicing sed do eiusmol tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad
                mini veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip eao commodo
                consequat Duis aute irure.
              </p>

              <div class="countdown-wrapper">
                <div class="countdown" data-countdown="2026/11/20" data-format="short">
                  <div class="single-countdown">
                    <span class="count countdown__time daysLeft"></span>
                    <span class="value countdown__time daysText"></span>
                  </div>
                  <div class="single-countdown">
                    <span class="count countdown__time hoursLeft"></span>
                    <span class="value countdown__time hoursText"></span>
                  </div>
                  <div class="single-countdown">
                    <span class="count countdown__time minsLeft"></span>
                    <span class="value countdown__time minsText"></span>
                  </div>
                  <div class="single-countdown">
                    <span class="count countdown__time secsLeft"></span>
                    <span class="value countdown__time secsText"></span>
                  </div>
                </div>
              </div>

              <a href="#" class="btn btn-primary btn-hover-dark">Shop Now</a>
            </div>
            <!-- Countdown Content End -->
          </div>

          <div class="col-lg-6">
            <!-- Countdown Images Start -->
            <div class="countdown-images">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
              <div class="shape-3"></div>

              <div class="image-box">
                <img src="{{ asset('assets/images/should-dinamis/countdown.png') }}" width="480" height="383"
                  alt="Countdown" />
              </div>
            </div>
            <!-- Countdown Images End -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Countdown Section End -->

  <!-- Featured Product Section Start -->
  <div class="section section-padding-02 mb-5">
    <div class="container">
      <div class="">
        <!-- Product Active Start -->
        <div class="product-active-02">
          <!-- Product Top Wrapper Start -->
          <div class="product-top-wrapper">
            <!-- Section Title Start -->
            <div class="section-title">
              <h2 class="title">Featured Products</h2>
            </div>
            <!-- Section Title End -->

            <!-- Swiper Arrows End -->
            <div class="swiper-arrows">
              <!-- Add Arrows -->
              <div class="swiper-button-prev">
                <i class="pe-7s-angle-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="pe-7s-angle-right"></i>
              </div>
            </div>
            <!-- Swiper Arrows End -->
          </div>
          <!-- Product Top Wrapper End -->

          <!-- Product Tabs Content Start -->
          <div class="product-tabs-content">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab7">
                <div class="swiper-container" wire:ignore>
                  <div class="swiper-wrapper">
                    <!-- Single Product Start -->
                    @foreach ($featuredProducts as $product)
                      <div class="swiper-slide">
                        <div class="single-product-02 position-relative">
                          <div class="product-images position-relative">
                            <!-- BADGE: NEW (top left) -->
                            @if ($product->created_at >= now()->subDays(30))
                              <span class="position-absolute top-0 start-0 badge text-white z-1 rounded px-2 py-1"
                                style="background-color: #f2a100; font-size: 13px;">
                                NEW
                              </span>
                            @endif
                            <!-- BADGE: DISCOUNT (top right) -->
                            @if ($product->sale_price)
                              <span class="discount position-absolute top-0 end-0 z-2 fw-bold">
                                -<strong>{{ round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100) }}%</strong>
                              </span>
                            @endif
                            <!-- BADGE: OUT OF STOCK (center overlay) -->
                            @if ($product->stock_status === 'outofstock' || $product->quantity < 1)
                              <span
                                class="position-absolute top-50 start-50 translate-middle badge bg-secondary text-white z-2 opacity-75 fs-6 rounded px-3 py-2">
                                OUT OF STOCK
                              </span>
                            @endif
                            <a href="{{ route('product.detail', $product->slug) }}" class="swiper-no-swiping"
                              wire:navigate>
                              <img
                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('assets/images/placehold-400x400.svg') }}"
                                width="270" height="303" alt="{{ $product->name }}" />
                            </a>
                          </div>
                          <div class="product-content">
                            <h4 class="title">
                              <a href="{{ route('product.detail', $product->slug) }}" class="swiper-no-swiping"
                                wire:navigate>
                                {{ $product->name }}
                              </a>
                            </h4>
                            <div class="price">
                              @if ($product->sale_price)
                                <span class="sale-price">
                                  Rp {{ number_format($product->sale_price, 0, ',', '.') }}
                                </span>
                                <span class="old-price">
                                  Rp {{ number_format($product->regular_price, 0, ',', '.') }}
                                </span>
                              @else
                                <span class="sale-price">
                                  Rp {{ number_format($product->regular_price, 0, ',', '.') }}
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                    <!-- Single Product End -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product Tabs Content End -->
        </div>
        <!-- Product Active End -->
      </div>
    </div>
  </div>
  <!-- Featured Product Section End -->

  <!-- Sale Product Section Start -->
  <div class="section section-padding-02 mb-5">
    <div class="container">
      <div class="">
        <!-- Product Active Start -->
        <div class="product-active-02">
          <!-- Product Top Wrapper Start -->
          <div class="product-top-wrapper">
            <!-- Section Title Start -->
            <div class="section-title">
              <h2 class="title">Sale Products</h2>
            </div>
            <!-- Section Title End -->

            <!-- Swiper Arrows End -->
            <div class="swiper-arrows">
              <!-- Add Arrows -->
              <div class="swiper-button-prev">
                <i class="pe-7s-angle-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="pe-7s-angle-right"></i>
              </div>
            </div>
            <!-- Swiper Arrows End -->
          </div>
          <!-- Product Top Wrapper End -->

          <!-- Product Tabs Content Start -->
          <div class="product-tabs-content">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab8">
                <div class="swiper-container" wire:ignore>
                  <div class="swiper-wrapper">
                    <!-- Single Product Start -->
                    @foreach ($saleProducts as $product)
                      <div class="swiper-slide">
                        <div class="single-product-02 position-relative">
                          <div class="product-images position-relative">
                            <!-- BADGE: NEW (top left) -->
                            @if ($product->created_at >= now()->subDays(30))
                              <span class="position-absolute top-0 start-0 badge text-white z-1 rounded px-2 py-1"
                                style="background-color: #f2a100; font-size: 13px;">
                                NEW
                              </span>
                            @endif
                            <!-- BADGE: DISCOUNT (top right) -->
                            @if ($product->sale_price)
                              <span class="discount position-absolute top-0 end-0 z-2 fw-bold">
                                -<strong>{{ round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100) }}%</strong>
                              </span>
                            @endif
                            <!-- BADGE: OUT OF STOCK (center overlay) -->
                            @if ($product->stock_status === 'outofstock' || $product->quantity < 1)
                              <span
                                class="position-absolute top-50 start-50 translate-middle badge bg-secondary text-white z-2 opacity-75 fs-6 rounded px-3 py-2">
                                OUT OF STOCK
                              </span>
                            @endif
                            <a href="{{ route('product.detail', $product->slug) }}" class="swiper-no-swiping"
                              wire:navigate>
                              <img
                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('assets/images/placehold-400x400.svg') }}"
                                width="270" height="303" alt="{{ $product->name }}" />
                            </a>
                          </div>
                          <div class="product-content">
                            <h4 class="title">
                              <a href="{{ route('product.detail', $product->slug) }}" class="swiper-no-swiping"
                                wire:navigate>
                                {{ $product->name }}
                              </a>
                            </h4>
                            <div class="price">
                              @if ($product->sale_price)
                                <span class="sale-price">Rp
                                  {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                                <span class="old-price">Rp
                                  {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                              @else
                                <span class="sale-price">Rp
                                  {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    <!-- Single Product End -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product Tabs Content End -->
        </div>
        <!-- Product Active End -->
      </div>
    </div>
  </div>
  <!-- Sale Product Section End -->
</div>
