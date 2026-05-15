<div class="commerce-page">
  @livewire('components.user-banner', ['title' => 'Wishlist'])

  <div class="section section-padding">
    <div class="container">
      @if ($wishlists->count() == 0)
        <div class="commerce-card commerce-empty">
          <img src="{{ asset('assets/images/wishlist.png') }}" alt="Wishlist" class="commerce-empty__icon">
          <h2 class="commerce-empty__title">Your wishlist is empty</h2>
          <p class="commerce-empty__text">Save your favorite products here.</p>
          <a href="{{ route('shop') }}" wire:navigate class="commerce-btn-primary">Browse Products</a>
        </div>
      @else
        <div class="commerce-card">
          <h2 class="commerce-card__title">My Wishlist</h2>
          <p class="commerce-card__subtitle">{{ $wishlists->count() }} item(s) saved</p>

          <div class="commerce-table-wrap">
            <table class="table commerce-table">
              <thead>
                <tr>
                  <th class="product-thumb">Image</th>
                  <th class="product-info">Product</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total-price">Price</th>
                  <th class="product-add-to-cart">Add to Cart</th>
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
                      <img
                        src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('assets/images/placehold-400x400.svg') }}"
                        alt="{{ $product->name ?? '-' }}" />
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
                        <p>Stock: <span>{{ $product->quantity }}</span></p>
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
                        <a href="javascript:void(0)" class="commerce-btn-primary btn-sm"
                          wire:click.prevent="addToCart({{ $product->id }})">Add to Cart</a>
                      @else
                        <span class="badge bg-secondary">Out Of Stock</span>
                      @endif
                    </td>
                    <td class="product-action">
                      <button type="button" class="remove" wire:click.prevent="remove({{ $wishlist->id }})"
                        aria-label="Remove from wishlist">
                        <i class="pe-7s-trash"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
