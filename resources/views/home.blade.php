<div>
  <!-- Slider Section Start -->
  <div class="section slider-section">
    <div class="slider-shape"></div>

    <div class="container">
      <div class="slider-active">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Single Slider Start  -->
            <div class="single-slider swiper-slide animation-style-01">
              <!-- Slider Content Start -->
              <div class="slider-content">
                <h2 class="title">
                  New Stylish <br />
                  Decore Furniture
                </h2>
                <p>
                  Unique Furniture Style Design for Your
                  Family
                </p>
                <a href="{{ asset('product-details-2.html') }}"
                  class="btn btn-primary btn-hover-dark btn-margin">purchase now</a>
              </div>
              <!-- Slider Content End -->

              <!-- Slider images Start -->
              <div class="slider-images">
                <img src="{{ asset('assets/images/slider/slider-item-1.png') }}" width="707" height="477"
                  alt="Slider" />
              </div>
              <!-- Slider images End -->
            </div>
            <!-- Single Slider End  -->

            <!-- Single Slider Start  -->
            <div class="single-slider swiper-slide animation-style-01">
              <!-- Slider Content Start -->
              <div class="slider-content">
                <h2 class="title">
                  New Stylish <br />
                  Decore Furniture
                </h2>
                <p>
                  Unique Furniture Style Design for Your
                  Family
                </p>
                <a href="{{ asset('product-details-2.html') }}"
                  class="btn btn-primary btn-hover-dark btn-margin">purchase now</a>
              </div>
              <!-- Slider Content End -->

              <!-- Slider images Start -->
              <div class="slider-images">
                <img src="{{ asset('assets/images/slider/slider-item-2.png') }}" width="707" height="477"
                  alt="Slider" />
              </div>
              <!-- Slider images End -->
            </div>
            <!-- Single Slider End  -->

            <!-- Single Slider Start  -->
            <div class="single-slider swiper-slide animation-style-01">
              <!-- Slider Content Start -->
              <div class="slider-content">
                <h2 class="title">
                  New Stylish <br />
                  Decore Furniture
                </h2>
                <p>
                  Unique Furniture Style Design for Your
                  Family
                </p>
                <a href="{{ asset('product-details-2.html') }}"
                  class="btn btn-primary btn-hover-dark btn-margin">purchase now</a>
              </div>
              <!-- Slider Content End -->

              <!-- Slider images Start -->
              <div class="slider-images">
                <img src="{{ asset('assets/images/slider/slider-item-3.png') }}" width="707" height="477"
                  alt="Slider" />
              </div>
              <!-- Slider images End -->
            </div>
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
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Brand Logo Wrapper Start -->
            @foreach ($categories as $category)
              <div class="swiper-slide single-brand-02">
                <a href="#" wire:navigate><img src="{{ asset('storage/' . $category->image) }}" width="118"
                    height="87" alt="{{ $category->name }}" /></a>
                <h4 class="title mt-3"><a href="#">{{ $category->name }}</a></h4>
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
              <img src="{{ asset('assets/images/icon/icon-1.png') }}" width="70" height="92" alt="Icon" />
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
              <img src="{{ asset('assets/images/icon/icon-2.png') }}" width="70" height="92" alt="Icon" />
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
              <img src="{{ asset('assets/images/icon/icon-3.png') }}" width="70" height="92" alt="Icon" />
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

  <!-- Popular Category Section Start -->
  <div class="section brand-logo mt-5">
    <div class="container">
      <div class="section-title pb-3">
        <h2 class="title">Popular Brands</h2>
      </div>
      <!-- Brand Logo Wrapper Start -->
      <div class="brand-logo-wrapper brand-active">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/1.png') }}" width="118" height="87"
                  alt="Brand 1" /></a>
              <h4 class="title mt-3"><a href="#">Brand 1</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/2.png') }}" width="118" height="87"
                  alt="Brand 2" /></a>
              <h4 class="title mt-3"><a href="#">Brand 2</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/3.png') }}" width="118" height="87"
                  alt="Brand 3" /></a>
              <h4 class="title mt-3"><a href="#">Brand 3</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/4.png') }}" width="118" height="87"
                  alt="Brand 4" /></a>
              <h4 class="title mt-3"><a href="#">Brand 4</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/5.png') }}" width="118" height="87"
                  alt="Brand 5" /></a>
              <h4 class="title mt-3"><a href="#">Brand 5</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/6.png') }}" width="118" height="87"
                  alt="Brand 6" /></a>
              <h4 class="title mt-3"><a href="#">Brand 6</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->
            <!-- Brand Logo Wrapper Start -->
            <div class="swiper-slide single-brand-02">
              <a href="#"><img src="{{ asset('uploads/brands/7.png') }}" width="118" height="87"
                  alt="Brand 7" /></a>
              <h4 class="title mt-3"><a href="#">Brand 7</a></h4>
            </div>
            <!-- Brand Logo Wrapper End -->

          </div>
        </div>
      </div>
      <!-- Brand Logo Wrapper End -->
    </div>
  </div>
  <!-- Popular Category Section End -->

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
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-01.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Elona bedside grey
                          table</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-02.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>

                      <span class="discount">-50%</span>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Simple minimal Chair</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$20.00</span>
                        <span class="old-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-03.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Pendant Chandelier
                          Light</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-04.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>

                      <span class="discount">-50%</span>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">High quality vase
                          bottle</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$20.00</span>
                        <span class="old-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-05.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>

                      <span class="discount">-50%</span>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Living & Bedroom
                          Chair</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$20.00</span>
                        <span class="old-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-06.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Herman Arm Grey
                          Chair</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-11.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>

                      <span class="discount">-50%</span>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Lace Bar Stool</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$20.00</span>
                        <span class="old-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                  <!-- Single Product Start -->
                  <div class="single-product-02">
                    <div class="product-images">
                      <a href="{{ asset('details.html') }}"><img
                          src="{{ asset('assets/images/product/product-08.jpg') }}" width="270" height="303"
                          alt="product" /></a>

                      <ul class="product-meta">
                        <li>
                          <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                              class="pe-7s-search"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                        </li>
                        <li>
                          <a class="action" href="#"><i class="pe-7s-like"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-content">
                      <h4 class="title">
                        <a href="{{ asset('details.html') }}">Herman Seater Sofa</a>
                      </h4>
                      <div class="price">
                        <span class="sale-price">$40.00</span>
                      </div>
                    </div>
                  </div>
                  <!-- Single Product End -->
                </div>
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
            <img src="{{ asset('assets/images/banner/banner-05.jpg') }}" width="570" height="299"
              alt="Banner" />

            <div class="banner-content">
              <h6 class="sub-title">High-Quality</h6>
              <h3 class="title">
                <a href="{{ asset('shop-grid-left-sidebar.html') }}">New Kitchen <br />
                  Furniture</a>
              </h3>
              <a class="btn btn-primary btn-hover-dark" href="{{ asset('shop-grid-left-sidebar.html') }}">Shop
                Now</a>
            </div>
          </div>
          <!-- Single Banner End -->
        </div>
        <div class="col-lg-6">
          <!-- Single Banner Start -->
          <div class="single-banner-03">
            <img src="{{ asset('assets/images/banner/banner-06.jpg') }}" width="570" height="299"
              alt="Banner" />

            <div class="banner-content">
              <h6 class="sub-title">Best-Quality</h6>
              <h3 class="title">
                <a href="{{ asset('shop-grid-left-sidebar.html') }}">Bed Room <br />
                  Furniture</a>
              </h3>
              <a class="btn btn-primary btn-hover-dark" href="{{ asset('shop-grid-left-sidebar.html') }}">Shop
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
                <div class="countdown" data-countdown="2024/11/20" data-format="short">
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
                <img src="{{ asset('assets/images/countdown.png') }}" width="480" height="383"
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
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-12.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Modern Accent
                              Chair</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-08.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Herman Seater
                              Sofa</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-09.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Reece Seater
                              Sofa</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-10.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Round Swivel
                              Chair</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
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
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-12.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Modern Accent
                              Chair</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-08.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Herman Seater
                              Sofa</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-09.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Reece Seater
                              Sofa</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
                    <div class="swiper-slide">
                      <!-- Single Product Start -->
                      <div class="single-product-02">
                        <div class="product-images">
                          <a href="{{ asset('details.html') }}"><img
                              src="{{ asset('assets/images/product/product-10.jpg') }}" width="270"
                              height="303" alt="product" /></a>
                        </div>
                        <div class="product-content">
                          <h4 class="title">
                            <a href="{{ asset('details.html') }}">Round Swivel
                              Chair</a>
                          </h4>
                          <div class="price">
                            <span class="sale-price">$40.00</span>
                          </div>
                        </div>
                      </div>
                      <!-- Single Product End -->
                    </div>
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
