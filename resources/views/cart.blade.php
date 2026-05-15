<div class="commerce-page">
  @livewire('components.user-banner', ['title' => 'Cart'])

  <div class="section section-padding">
    <div class="container">
      @if ($cartItems->count() == 0)
        <div class="commerce-card commerce-empty">
          <img src="{{ asset('assets/images/cart.png') }}" alt="Cart" class="commerce-empty__icon">
          <h2 class="commerce-empty__title">Your cart is empty</h2>
          <p class="commerce-empty__text">There are no items in your cart yet.</p>
          <a href="{{ route('shop') }}" wire:navigate class="commerce-btn-primary">Continue Shopping</a>
        </div>
      @else
        <div class="commerce-card mb-0">
          <h2 class="commerce-card__title">Shopping Cart</h2>
          <p class="commerce-card__subtitle">{{ $cartItems->count() }} item(s) in your cart</p>

          <div class="commerce-table-wrap">
            <table class="table commerce-table">
              <thead>
                <tr>
                  <th class="product-thumb">Image</th>
                  <th class="product-info">Product</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total-price">Total</th>
                  <th class="product-action">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cartItems as $items)
                  <tr>
                    <td class="product-thumb">
                      <img
                        src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($items->product->image) ? asset('storage/' . $items->product->image) : asset('assets/images/placehold-400x400.svg') }}"
                        alt="{{ $items->product->name }}" />
                    </td>
                    <td class="product-info">
                      <h6 class="name">
                        <a href="{{ route('product.detail', $items->product->slug) }}"
                          wire:navigate>{{ $items->product->name }}</a>
                      </h6>
                      <div class="product-prices">
                        @if ($items->product->sale_price)
                          <span class="old-price">
                            Rp {{ number_format($items->product->regular_price, 0, ',', '.') }}
                          </span>
                          <span class="sale-price">
                            Rp {{ number_format($items->product->sale_price, 0, ',', '.') }}
                          </span>
                        @else
                          <span class="sale-price">
                            Rp {{ number_format($items->product->regular_price, 0, ',', '.') }}
                          </span>
                        @endif
                      </div>
                      <div class="product-size-color">
                        <p>Stock: <span>{{ $items->product->quantity }}</span></p>
                      </div>
                    </td>
                    <td class="quantity">
                      <div class="product-quantity d-inline-flex">
                        <button type="button" wire:click.prevent="decrement({{ $items->id }})">-</button>
                        <input type="text" disabled value="{{ $items->quantity }}" />
                        <button type="button" wire:click.prevent="increment({{ $items->id }})">+</button>
                      </div>
                    </td>
                    <td class="product-total-price">
                      <span class="price">Rp
                        {{ $items->product->sale_price ? number_format($items->product->sale_price * $items->quantity, 0, ',', '.') : number_format($items->product->regular_price * $items->quantity, 0, ',', '.') }}
                      </span>
                    </td>
                    <td class="product-action">
                      <button type="button" class="remove" wire:click.prevent="remove({{ $items->id }})"
                        aria-label="Remove item">
                        <i class="pe-7s-trash"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="commerce-actions">
            <a href="{{ route('shop') }}" wire:navigate class="commerce-btn-outline">Continue Shopping</a>
            <button type="button" wire:click="clear" class="commerce-btn-outline">Clear Cart</button>
          </div>
        </div>

        <div class="row g-4 mt-1">
          <div class="col-lg-4">
            <div class="commerce-card">
              <h2 class="commerce-card__title">Calculate Shipping</h2>
              <p class="commerce-card__subtitle">Estimate your shipping fee *</p>
              <div class="cart-form" wire:ignore>
                <form action="#">
                  <div class="single-select2 mb-3">
                    <div class="form-select2">
                      <select class="select2">
                        <option value="0">Select a country…</option>
                        <option value="4">Indonesia</option>
                      </select>
                    </div>
                  </div>
                  <div class="single-select2 mb-3">
                    <div class="form-select2">
                      <select class="select2">
                        <option value="">Select an option…</option>
                        <option value="DHA">Dhaka</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Postcode / ZIP" />
                  </div>
                  <button type="button" class="commerce-btn-outline w-100">Update totals</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="commerce-card">
              <h2 class="commerce-card__title">Coupon Code</h2>
              <p class="commerce-card__subtitle">Enter your coupon code if you have one.</p>
              <form wire:submit="{{ session('coupon') ? 'removeCoupon' : 'applyCoupon' }}">
                <div class="mb-3">
                  <input class="form-control" type="text" placeholder="Enter coupon code" wire:model="code">
                  @if (session('success'))
                    <span class="text-success d-block mt-2 small">{{ session('success') }}</span>
                  @elseif (session('error'))
                    <span class="text-danger d-block mt-2 small">{{ session('error') }}</span>
                  @endif
                </div>
                <button type="submit" class="commerce-btn-outline w-100">
                  {{ session('coupon') ? 'Remove Coupon' : 'Apply Coupon' }}
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="commerce-card">
              <h2 class="commerce-card__title">Cart Totals</h2>
              <div class="commerce-summary mb-4">
                <div class="commerce-summary-row">
                  <span>Subtotal</span>
                  <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                </div>
                @if (session('coupon'))
                  <div class="commerce-summary-row">
                    <span>Voucher | {{ session('coupon.type') }}</span>
                    <span class="text-success">- Rp {{ number_format($discount, 0, ',', '.') }}</span>
                  </div>
                @endif
                <div class="commerce-summary-row commerce-summary-row--total">
                  <span>Total</span>
                  <span class="price">Rp {{ number_format($total, 0, ',', '.') }}</span>
                </div>
              </div>
              <a href="{{ route('user.checkout') }}" wire:navigate class="commerce-btn-primary w-100 text-center">
                Proceed To Checkout
              </a>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
