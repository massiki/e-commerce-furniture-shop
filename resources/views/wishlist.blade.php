<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Wishlist'])
  <!-- Page Banner Section End -->

  <!-- Shopping Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
      @if ($wishlists->count() == 0)
        <!-- empty cart Start -->
        <div class="cart-wrapper">
          <div class="empty-cart text-center pb-5">
            <h2 class="empty-cart-title">
              There are no more items in your wishlist
            </h2>
            <div class="empty-cart-img">
              <img src="{{ asset('assets/images/wishlist.png') }}" alt="Cart">
            </div>
            <p>No item found in your wishlist</p>
            <a href="{{ route('shop') }}" wire:navigate class="btn btn-info btn-hover-dark">Wishlist Now</a>
          </div>
        </div>
        <!-- empty cart End -->
      @else
        <!-- Cart Wrapper Start -->
        <div class="cart-wrapper">
          <div class="cart-table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="product-thumb">Image</th>
                  <th class="product-info">
                    product Information
                  </th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total-price">
                    Total Price
                  </th>
                  <th class="product-add-to-cart">
                    Add to Cart
                  </th>
                  <th class="product-action">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($wishlists as $wishlist)
                  @php
                    $product = $wishlist->product;
                  @endphp
                  <tr>
                    <td class="product-thumb">
                      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name ?? '-' }}" />
                    </td>
                    <td class="product-info">
                      <h6 class="name">
                        <a href="{{ route('product.detail', $product->slug) }}" wire:navigate>
                          {{ $product->name }}
                        </a>
                      </h6>
                      <div class="product-prices">
                        @if ($product->sale_price)
                          <span class="old-price">Rp {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                          <span class="sale-price">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                        @else
                          <span class="sale-price">Rp {{ number_format($product->regular_price, 0, ',', '.') }}</span>
                        @endif
                      </div>
                      <div class="product-size-color">
                        <p>Size <span>-</span></p>
                        <p>Color <span>-</span></p>
                      </div>
                    </td>
                    <td class="quantity">
                      <div class="product-quantity d-inline-flex">
                        <button type="button" class="sub" disabled>-</button>
                        <input type="text" value="1" readonly />
                        <button type="button" class="add" disabled>+</button>
                      </div>
                    </td>
                    <td class="product-total-price">
                      <span class="price">
                        @if ($product->sale_price)
                          Rp {{ number_format($product->sale_price, 0, ',', '.') }}
                        @else
                          Rp {{ number_format($product->regular_price, 0, ',', '.') }}
                        @endif
                      </span>
                    </td>
                    <td class="product-add-to-cart">
                      @if ($product->stock_status === 'instock' && $product->quantity > 0)
                        <a href="javascript:void(0)" class="btn btn-dark btn-hover-primary"
                          wire:click.prevent="addToCart({{ $product->id }})">Add to Cart</a>
                      @else
                        <a href="javascript:void(0)" class="btn btn-secondary">Out Of Stock</a>
                      @endif
                    </td>
                    <td class="product-action">
                      <button class="remove" wire:click.prevent="remove({{ $wishlist->id }})">
                        <i class="pe-7s-trash"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- Cart Wrapper End -->
      @endif
    </div>
  </div>
  <!-- Shopping Cart Section End -->
</div>
