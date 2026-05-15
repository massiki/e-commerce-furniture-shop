<div>
  @livewire('components.user-banner', ['title' => 'Order Confirmed'])

  <div class="order-confirmed-page">
    <div class="section section-padding">
      <div class="container">
        <div class="order-confirmed-header text-center">
          <div class="order-confirmed-header__icon">
            <i class="fa fa-check" aria-hidden="true"></i>
          </div>
          <h1 class="order-confirmed-header__title">Order Confirmed!</h1>
          <p class="order-confirmed-header__subtitle">
            Thank you for your purchase. Your order has been received.
          </p>
          <p class="order-confirmed-header__order-id">
            Order ID: <span>{{ strtoupper(sprintf('%08X', $order->id)) }}</span>
          </p>
        </div>

        <div class="row g-4">
          <div class="col-lg-8">
            <div class="order-confirmed-card">
              <h2 class="order-confirmed-card__title">Order Details</h2>
              <div class="row g-4">
                <div class="col-sm-6">
                  <div class="order-confirmed-meta">
                    <span class="order-confirmed-meta__icon"><i class="fa fa-calendar"></i></span>
                    <div>
                      <span class="order-confirmed-meta__label">Order Date</span>
                      <span
                        class="order-confirmed-meta__value">{{ \Carbon\Carbon::parse($order->created_at)->translatedFormat('d F Y') }}</span>

                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="order-confirmed-meta">
                    <span class="order-confirmed-meta__icon"><i class="fa fa-credit-card"></i></span>
                    <div>
                      <span class="order-confirmed-meta__label">Payment Method</span>
                      <span class="order-confirmed-meta__value">{{ $this->paymentMethodLabel() }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="order-confirmed-meta">
                    <span class="order-confirmed-meta__icon"><i class="fa fa-user"></i></span>
                    <div>
                      <span class="order-confirmed-meta__label">Customer Name</span>
                      <span class="order-confirmed-meta__value">{{ $order->name }}</span>
                      <span class="order-confirmed-meta__sub">{{ Auth::user()->email }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="order-confirmed-meta">
                    <span class="order-confirmed-meta__icon"><i class="fa fa-phone"></i></span>
                    <div>
                      <span class="order-confirmed-meta__label">Phone Number</span>
                      <span class="order-confirmed-meta__value">{{ $order->phone }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="order-confirmed-card">
              <h2 class="order-confirmed-card__title order-confirmed-card__title--icon">
                <i class="fa fa-map-marker"></i> Shipping Address
              </h2>
              <p class="order-confirmed-address mb-0">
                {{ $order->full_address }}
                @if ($order->address_note)
                  , {{ $order->address_note }}
                @endif
                <br>
                {{ $order->subdistrict }}, {{ $order->district }}, {{ $order->city }}, {{ $order->province }}
                {{ $order->postal_code }}
              </p>
            </div>

            <div class="order-confirmed-card">
              <h2 class="order-confirmed-card__title">Order Items</h2>
              <ul class="order-confirmed-items list-unstyled mb-0">
                @foreach ($order->orderItems as $item)
                  <li class="order-confirmed-item">
                    <img
                      src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($item->product_image) ? asset('storage/' . $item->product_image) : asset('assets/images/placehold-400x400.svg') }}"
                      alt="{{ $item->product_name }}" class="order-confirmed-item__img">
                    <div class="order-confirmed-item__info">
                      <h3 class="order-confirmed-item__name">{{ $item->product_name }}</h3>
                      <p class="order-confirmed-item__meta mb-0">
                        {{ $item->brand_name }} &middot; {{ $item->category_name }}
                      </p>
                      <p class="order-confirmed-item__qty mb-0">Quantity: {{ $item->quantity }}</p>
                    </div>
                    <div class="order-confirmed-item__price text-end">
                      <span class="order-confirmed-item__unit-label">Unit Price</span>
                      <span class="order-confirmed-item__unit">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                      <span class="order-confirmed-item__total">Rp
                        {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</span>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="order-confirmed-card order-confirmed-summary">
              <h2 class="order-confirmed-card__title">Order Summary</h2>

              <div class="order-confirmed-summary__row">
                <span>Subtotal</span>
                <span>Rp {{ number_format($order->subtotal, 0, ',', '.') }}</span>
              </div>
              <div class="order-confirmed-summary__row">
                <span>Shipping</span>
                <span>
                  @if ($order->shipping_cost > 0)
                    Rp {{ number_format($order->shipping_cost, 0, ',', '.') }}
                  @else
                    Free
                  @endif
                </span>
              </div>
              @if ($order->discount > 0)
                <div class="order-confirmed-summary__row">
                  <span>Discount</span>
                  <span>- Rp {{ number_format($order->discount, 0, ',', '.') }}</span>
                </div>
              @endif

              <div class="order-confirmed-summary__total">
                <span>Total</span>
                <span>Rp {{ number_format($order->total, 0, ',', '.') }}</span>
              </div>

              <div class="order-confirmed-payment-status">
                <span class="order-confirmed-payment-status__label">Payment Status</span>
                <strong class="order-confirmed-payment-status__value">{{ $this->paymentStatusLabel() }}</strong>
                @if ($note = $this->paymentStatusNote())
                  <small class="order-confirmed-payment-status__note">{{ $note }}</small>
                @endif
              </div>

              <a href="{{ route('shop') }}" wire:navigate class="order-confirmed-btn w-100 text-center">
                Continue Shopping
              </a>
              <a href="{{ route('user.orders.detail', $order) }}" wire:navigate
                class="commerce-btn-outline w-100 mt-2 text-center">
                View Order Details
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
