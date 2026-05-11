<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Product Detail'])
  <!-- Page Banner Section End -->

  <!-- Product Details Section Start -->
  <div class="section section-padding-02">
    <div class="container">
      <!-- Product Section Wrapper Start -->
      <div class="product-section-wrapper">
        <div class="row">
          <div class="col-lg-6">
            <!-- Product Details Images Start -->
            <div class="product-details-images">
              <!-- Details Gallery Images Start -->
              <div class="details-gallery-images" id="img-container">
                <div class="swiper-container" wire:ignore>
                  <div class="swiper-wrapper">
                    @foreach ($allImages as $img)
                      <div class="swiper-slide single-img zoom">
                        <img src="{{ asset('storage/' . $img) }}" width="570" height="604" alt="Product Image" />
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- Details Gallery Images End -->

              <!-- Details Gallery Thumbs Start -->
              <div class="details-gallery-thumbs">
                <div class="swiper-container" wire:ignore>
                  <div class="swiper-wrapper">
                    @foreach ($allImages as $img)
                      <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $img) }}" width="88" height="93"
                          alt="Product Thumbnail" />
                      </div>
                    @endforeach
                  </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-prev">
                  <i class="pe-7s-angle-left"></i>
                </div>
                <div class="swiper-button-next">
                  <i class="pe-7s-angle-right"></i>
                </div>
              </div>
              <!-- Details Gallery Thumbs End -->
            </div>
            <!-- Product Details Images End -->
          </div>
          <div class="col-lg-6">
            <!-- Product Details Description Start -->
            <div class="product-details-description">
              <h1 class="product-name">
                {{ $product->name }}
              </h1>
              <div class="price">
                @if ($product->sale_price)
                  <span class="sale-price">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                  <span class="old-price">Rp {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                @else
                  <span class="sale-price">Rp {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                @endif
              </div>
              <div class="review-wrapper">
                <div class="review-star">
                  <div class="star" style="width: 80%"></div>
                </div>
                <p>
                  <a href="#reviews">( 1 Customer Review )</a>
                </p>
              </div>

              <div class="product-color">
                <span class="lable">Color:</span>
                <ul>
                  <li>
                    <input type="radio" name="colors" id="color1" />
                    <label for="color1"><span class="color-blue"></span></label>
                  </li>
                  <li>
                    <input type="radio" name="colors" id="color2" />
                    <label for="color2"><span class="color-gray"></span></label>
                  </li>
                  <li>
                    <input type="radio" name="colors" id="color3" />
                    <label for="color3"><span class="color-dark-blue"></span></label>
                  </li>
                  <li>
                    <input type="radio" name="colors" id="color4" />
                    <label for="color4"><span class="color-gray-dark"></span></label>
                  </li>
                </ul>
              </div>
              <p>{{ $product->short_description }}</p>
              <div class="product-meta">
                <div class="meta-action">
                  <button wire:click="toggleCart" class="btn btn-dark btn-hover-primary"
                    style="@auth {{ $product->cartItems->isNotEmpty() ? 'background-color: rgb(255, 150, 150)' : '' }} @endauth">
                    {{ $product->cartItems->isNotEmpty() ? 'Added To Cart' : 'Add To Cart' }}
                  </button>
                </div>
                <div class="meta-action">
                  <button class="action border-0" wire:click="toggleWishlist"
                    style="@auth {{ $product->wishlists->isNotEmpty() ? 'background-color: rgb(255, 150, 150)' : '' }} @endauth">
                    <i class="pe-7s-like"></i>
                  </button>
                </div>
                <div class="meta-action">
                  <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                </div>
              </div>

              <div class="product-info">
                <div class="single-info">
                  <span class="lable">Categories:</span>
                  <span class="value">
                    <a href="javascript:void(0)">{{ $product->category->name }}</a>
                  </span>
                </div>
                <div class="single-info">
                  <span class="lable">tag:</span>
                  <span class="value">
                    <a href="#">-</a>
                  </span>
                </div>
                <div class="single-info">
                  <span class="lable">Share:</span>
                  <ul class="social">
                    <li>
                      <a href="#"><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Product Details Description End -->
          </div>
        </div>
      </div>
      <!-- Product Section Wrapper End -->
    </div>
  </div>
  <!-- Product Details Section End -->

  <!-- Product Details tab Section Start -->
  <div class="section section-padding-02">
    <div class="container">
      <!-- Product Details Tabs Start -->
      <div class="product-details-tabs">
        <ul class="nav justify-content-center">
          <li>
            <button data-bs-toggle="tab" data-bs-target="#information">
              Information
            </button>
          </li>
          <li>
            <button class="active" data-bs-toggle="tab" data-bs-target="#description">
              Description
            </button>
          </li>
          <li>
            <button data-bs-toggle="tab" data-bs-target="#reviews">
              Reviews (03)
            </button>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade" id="information">
            <!-- Information Content Start -->
            <div class="information-content">
              <h4 class="title">Information</h4>
              <p>{{ $product->information }}</p>
            </div>
            <!-- Information Content End -->
          </div>
          <div class="tab-pane fade show active" id="description">
            <!-- Description Content Start -->
            <div class="description-content">
              <p>{{ $product->description }}</p>
            </div>
            <!-- Description Content End -->
          </div>
          <div class="tab-pane fade" id="reviews">
            <!-- Reviews Content Start -->
            <div class="reviews-content">
              <!-- Review Comment Start  -->
              <div class="reviews-comment">
                <!-- Single Comment Start  -->
                <div class="single-reviews">
                  <div class="comment-author">
                    <img src="assets/images/author/author-1.png" width="100" height="100" alt="author" />
                  </div>
                  <div class="comment-content">
                    <div class="author-name-rating">
                      <h6 class="name">Rosie Silva</h6>
                      <div class="review-star">
                        <div class="star" style="width: 80%"></div>
                      </div>
                    </div>
                    <span class="date">11/20/2023</span>
                    <p>
                      Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Esse deleniti itaque
                      velit explicabo at eum incidunt vel
                      reprehenderit maxime eos facere ut
                      pariatur voluptas aut, porro quia
                      molestias sequi cupiditate!
                    </p>
                  </div>
                </div>
                <!-- Single Comment End  -->
                <!-- Single Comment Start  -->
                <div class="single-reviews">
                  <div class="comment-author">
                    <img src="assets/images/author/author-2.png" width="100" height="100" alt="author" />
                  </div>
                  <div class="comment-content">
                    <div class="author-name-rating">
                      <h6 class="name">Aidyn Cody</h6>
                      <div class="review-star">
                        <div class="star" style="width: 80%"></div>
                      </div>
                    </div>
                    <span class="date">11/20/2023</span>
                    <p>
                      Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Esse deleniti itaque
                      velit explicabo at eum incidunt vel
                      reprehenderit maxime eos facere ut
                      pariatur voluptas aut, porro quia
                      molestias sequi cupiditate!
                    </p>
                  </div>
                </div>
                <!-- Single Comment End  -->
                <!-- Single Comment Start  -->
                <div class="single-reviews">
                  <div class="comment-author">
                    <img src="assets/images/author/author-3.png" width="100" height="100" alt="author" />
                  </div>
                  <div class="comment-content">
                    <div class="author-name-rating">
                      <h6 class="name">Rosie Silva</h6>
                      <div class="review-star">
                        <div class="star" style="width: 80%"></div>
                      </div>
                    </div>
                    <span class="date">11/20/2023</span>
                    <p>
                      Lorem ipsum dolor sit amet consectetur
                      adipisicing elit. Esse deleniti itaque
                      velit explicabo at eum incidunt vel
                      reprehenderit maxime eos facere ut
                      pariatur voluptas aut, porro quia
                      molestias sequi cupiditate!
                    </p>
                  </div>
                </div>
                <!-- Single Comment End  -->
              </div>
              <!-- Review Comment End  -->

              <!-- Review Form Start  -->
              <div class="reviews-form">
                <h3 class="reviews-title">Add a review</h3>

                <form action="#">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="single-form">
                        <input type="text" placeholder="Enter your name" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-form">
                        <input type="email" placeholder="john.smith@example.com" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="review-rating">
                        <label class="title">Rating:</label>
                        <ul id="rating" class="rating">
                          <li class="star" title="Poor" data-value="1">
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li class="star" title="Poor" data-value="2">
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li class="star" title="Poor" data-value="3">
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li class="star" title="Poor" data-value="4">
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li class="star" title="Poor" data-value="5">
                            <i class="fa fa-star-o"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="single-form">
                        <textarea placeholder="Write your comments here"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="single-form">
                        <button class="btn btn-dark btn-hover-primary">
                          Submit Review
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Review Form End  -->
            </div>
            <!-- Reviews Content End -->
          </div>
        </div>
      </div>
      <!-- Product Details Tabs End -->
    </div>
  </div>
  <!-- Product Details tab Section End -->

  <!-- Related Product Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="">
        <!-- Product Wrapper Start -->
        <div class="product-active-02">
          <!-- Product Top Wrapper Start -->
          <div class="product-top-wrapper">
            <!-- Section Title Start -->
            <div class="section-title">
              <h2 class="title"># Related Products</h2>
            </div>
            <!-- Section Title End -->

            <!-- Product Menu Start -->
            {{-- <div class="product-menu">
              <ul class="nav">
                <li>
                  <button class="active" data-bs-toggle="tab" data-bs-target="#tab7">
                    All Time
                  </button>
                </li>
                <li>
                  <button data-bs-toggle="tab" data-bs-target="#tab8">
                    This Year
                  </button>
                </li>
                <li>
                  <button data-bs-toggle="tab" data-bs-target="#tab9">
                    This Month
                  </button>
                </li>
              </ul>
            </div> --}}
            <!-- Product Menu End -->

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
                    @foreach ($relatedProducts as $product)
                      <div class="swiper-slide">
                        <div class="single-product-02">
                          <div class="product-images">
                            <a href="{{ route('product.detail', $product->slug) }}" class="swiper-no-swiping"
                              wire:navigate>
                              <img src="{{ asset('storage/' . $product->image) }}" width="270" height="303"
                                alt="{{ $product->name }}" />
                            </a>
                            @if ($product->sale_price)
                              <span
                                class="discount">-{{ round((($product->regular_price - $product->sale_price) / $product->regular_price) * 100) }}%
                              </span>
                            @endif
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
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product Tabs Content End -->
        </div>
        <!-- Product Wrapper End -->
      </div>
    </div>
  </div>
  <!-- Related Product Section End -->
</div>
