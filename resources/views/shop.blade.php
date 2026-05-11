<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Shop'])
  <!-- Page Banner Section End -->

  <!-- Shop Section Start -->
  <div class="section section-padding">
    <div class="container">
      <!-- Product Section Wrapper Start -->
      <div class="product-section-wrapper">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <!-- Shop top Bar Start -->
            <div class="shop-top-bar">
              <div class="shop-text">
                <p>
                  <span>{{ $products->count() }}</span> Product Found of
                  <span>{{ $allProducts->count() }}</span>
                </p>
              </div>
              <div class="shop-tabs">
                <ul class="nav">
                  <li>
                    <button class="active" data-bs-toggle="tab" data-bs-target="#grid">
                      <i class="fa fa-th"></i>
                    </button>
                  </li>
                  <li>
                    <button data-bs-toggle="tab" data-bs-target="#list">
                      <i class="fa fa-list"></i>
                    </button>
                  </li>
                </ul>
              </div>
              <div class="shop-sort" wire:ignore>
                <span class="title">Sort By :</span>
                <select class="select2-2">
                  <option value="featured">
                    Featured
                  </option>
                  <option value="rating">Rating</option>
                  <option value="price">Price</option>
                </select>
              </div>
            </div>
            <!-- Shop top Bar End -->
            {{-- <x-alert-success /> --}}

            <div class="tab-content">
              <div class="tab-pane fade show active" id="grid">
                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">
                  <div class="row">
                    <!-- Single Product Start -->
                    @foreach ($products as $product)
                      <div class="col-lg-4 col-sm-6">
                        <div class="single-product">
                          <a href="#" wire:navigate>
                            <img src="{{ asset('storage/' . $product->image) }}" width="270" height="303"
                              alt="product" />
                          </a>
                          <div class="product-content">
                            <h4 class="title">
                              <a href="#" wire:navigate>{{ $product->name }}</a>
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
                          <ul class="product-meta">
                            <li>
                              <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                  class="pe-7s-search"></i></a>
                            </li>
                            <li>
                              <a class="action p-0 @auth {{ $product->wishlists->isNotEmpty() ? 'border-0 text-white' : '' }} @endauth"
                                style="@auth {{ $product->wishlists->isNotEmpty() ? 'background-color: rgb(255, 150, 150)' : '' }} @endauth"
                                wire:click.prevent="toggleWishlist({{ $product->id }})" href="javascript:void(0)">
                                <i class="pe-7s-like"></i>
                              </a>
                            </li>
                            <li>
                              <a class="action p-0 @auth {{ $product->cartItems->first() ? 'border-0 text-white' : '' }} @endauth"
                                style="@auth {{ $product->cartItems->first() ? 'background-color: rgb(255, 150, 150)' : '' }}" @endauth 
                                wire:click.prevent="toggleCart({{ $product->id }})"
                                href="javascript:void(0)">
                                <i class="pe-7s-shopbag"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    @endforeach
                    <!-- Single Product End -->
                  </div>
                </div>
                <!-- Shop Product Wrapper End -->

              </div>
              <div class="tab-pane fade" id="list">
                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">
                  <!-- Single Product Start -->
                  @foreach ($products as $product)
                    <div class="single-product-02 product-list">
                      <div class="product-images">
                        <a href="#" wire:navigate>
                          <img src="{{ asset('storage/' . $product->image) }}" width="270" height="303"
                            alt="{{ $product->name }}" />
                        </a>
                        <ul class="product-meta">
                          <li>
                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                class="pe-7s-search"></i></a>
                          </li>
                          <li>
                            <a class="action p-0 @auth {{ $product->cartItems->first() ? 'border-0' : '' }}" @endauth 
                              style="@auth {{ $product->cartItems->first() ? 'background-color: rgb(255, 150, 150)' : '' }}" @endauth
                              wire:click.prevent="toggleCart({{ $product->id }})" href="javascript:void(0)">
                              <i class="pe-7s-shopbag"></i>
                            </a>
                          </li>
                          <li>
                            <a class="action p-0 @auth {{ $product->wishlists->isNotEmpty() ? 'border-0 text-white' : '' }} @endauth"
                              style="@auth {{ $product->wishlists->isNotEmpty() ? 'background-color: rgb(255, 150, 150)' : '' }} @endauth"
                              wire:click.prevent="toggleWishlist({{ $product->id }})" href="javascript:void(0)">
                              <i class="pe-7s-like"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="product-content">
                        <h4 class="title">
                          <a href="#" wire:navigate>{{ $product->name }}</a>
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
                        <p>{{ $product->short_description }}</p>
                      </div>
                    </div>
                  @endforeach
                  <!-- Single Product End -->
                </div>
                <!-- Shop Product Wrapper End -->
              </div>
            </div>

            <!-- Page pagination Start -->
            <div class="page-pagination">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
            <!-- Page pagination End -->
          </div>
          <div class="col-lg-3">
            <!-- Sidebar Start -->
            <div class="sidebar">
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">
                <div class="widget-search">
                  <form action="#">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">

                <h4 class="widget-title">Filter By Categories</h4>

                <div class="widget-checkbox widget-categories">
                  <ul class="checkbox-items">
                    <li>
                      <input type="checkbox" id="checkbox1">
                      <label for="checkbox1"> <span></span>Office Chair</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox2">
                      <label for="checkbox2"> <span></span>Dining Chair</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox3">
                      <label for="checkbox3"> <span></span>Office Table</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox4">
                      <label for="checkbox4"> <span></span>Dining Table</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox5">
                      <label for="checkbox5"> <span></span>Bed Light</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox6">
                      <label for="checkbox6"> <span></span>Sofa Set</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox7">
                      <label for="checkbox7"> <span></span>Office Chair</label>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">

                <h4 class="widget-title">Refine By</h4>

                <div class="widget-checkbox">
                  <ul class="checkbox-items">
                    <li>
                      <input type="checkbox" id="checkbox8">
                      <label for="checkbox8"> <span></span>On Sale</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox9">
                      <label for="checkbox9"> <span></span>New</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox10">
                      <label for="checkbox10"> <span></span>In Stock</label>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              {{-- <div class="sidebar-widget">

                <h4 class="widget-title">Filter By Price</h4>

                <div class="widget-price">
                  <input id="price-range" type="text" wire:ignore>
                </div>
              </div> --}}
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">

                <h4 class="widget-title">Filter By Color</h4>

                <div class="widget-checkbox">
                  <ul class="checkbox-items">
                    <li>
                      <input type="checkbox" id="checkbox11">
                      <label for="checkbox11"> <span class="color-blue"></span>Blue</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox12">
                      <label for="checkbox12"> <span class="color-dark-blue"></span>Dark Blue</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox13">
                      <label for="checkbox13"> <span class="color-gray"></span>Gray</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox14">
                      <label for="checkbox14"> <span class="color-green"></span>Green</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox15">
                      <label for="checkbox15"> <span class="color-gray-dark"></span>Light Black</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox16">
                      <label for="checkbox16"> <span class="color-lower-blue"></span>Lower Blue</label>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">

                <h4 class="widget-title">Size</h4>

                <div class="widget-checkbox">
                  <ul class="checkbox-items">
                    <li>
                      <input type="checkbox" id="checkbox17">
                      <label for="checkbox17"> <span></span>S</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox18">
                      <label for="checkbox18"> <span></span>M</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox19">
                      <label for="checkbox19"> <span></span>Xl</label>
                    </li>
                    <li>
                      <input type="checkbox" id="checkbox20">
                      <label for="checkbox20"> <span></span>XXL</label>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Sidebar Widget End -->
              <!-- Sidebar Widget Start -->
              <div class="sidebar-widget">

                <h4 class="widget-title">Tags</h4>

                <div class="widget-tags">
                  <ul class="tags-list">
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">For Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Fashion</a></li>
                  </ul>
                </div>
              </div>
              <!-- Sidebar Widget End -->
            </div>
            <!-- Sidebar End -->
          </div>
        </div>
      </div>
      <!-- Product Section Wrapper End -->
    </div>
  </div>
  <!-- Shop Section End -->
</div>
