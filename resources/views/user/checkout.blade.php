<div class="commerce-page">
  @livewire('components.user-banner', ['title' => 'Checkout'])

  <div class="section section-padding">
    <div class="container">
      <form wire:submit="checkout">
        <div class="row g-4">
          <div class="col-lg-7">
            <div class="commerce-card">
              <h2 class="commerce-card__title">Shipping Details</h2>
              <p class="commerce-card__subtitle">Fill in your delivery information</p>

              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-name" wire:model="name"
                      placeholder="Full Name">
                    <label for="checkout-name">Full Name *</label>
                    <x-alert-error field="name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-phone" wire:model="phone"
                      placeholder="Phone">
                    <label for="checkout-phone">Phone Number *</label>
                    <x-alert-error field="phone" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-province" wire:model="province"
                      placeholder="Province">
                    <label for="checkout-province">Province *</label>
                    <x-alert-error field="province" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-city" wire:model="city" placeholder="City">
                    <label for="checkout-city">City *</label>
                    <x-alert-error field="city" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-district" wire:model="district"
                      placeholder="District">
                    <label for="checkout-district">District *</label>
                    <x-alert-error field="district" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-subdistrict" wire:model="subdistrict"
                      placeholder="Subdistrict">
                    <label for="checkout-subdistrict">Subdistrict *</label>
                    <x-alert-error field="subdistrict" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-postal" wire:model="postal_code"
                      placeholder="Postal Code">
                    <label for="checkout-postal">Postal Code *</label>
                    <x-alert-error field="postal_code" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-address" wire:model="full_address"
                      placeholder="Full Address">
                    <label for="checkout-address">Full Address *</label>
                    <x-alert-error field="full_address" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="checkout-note" wire:model="address_note"
                      placeholder="Address Note">
                    <label for="checkout-note">Address Note</label>
                    <x-alert-error field="address_note" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="commerce-card">
              <h2 class="commerce-card__title">Your Order</h2>
              <p class="commerce-card__subtitle">{{ count($orderItems) }} item(s) in your cart</p>

              <div class="commerce-checkout-items mb-3">
                @foreach ($orderItems as $item)
                  <div class="commerce-checkout-item">
                    <img
                      src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($item['image']) ? asset('storage/' . $item['image']) : asset('assets/images/placehold-400x400.svg') }}"
                      alt="" class="commerce-checkout-item__img">
                    <div class="commerce-checkout-item__info">
                      <p class="commerce-checkout-item__name">{{ $item['nameProduct'] }}</p>
                      <p class="commerce-checkout-item__qty">Qty: {{ $item['quantity'] }}</p>
                    </div>
                    <span class="commerce-checkout-item__price">Rp
                      {{ number_format($item['totalPrice'], 0, ',', '.') }}</span>
                  </div>
                @endforeach
              </div>

              <div class="commerce-summary">
                <div class="commerce-summary-row">
                  <span>Subtotal</span>
                  <span>Rp {{ number_format($subTotal, 0, ',', '.') }}</span>
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

              <div class="commerce-payment-option">
                <div class="payment-radio radio">
                  <input type="radio" name="mode" id="cod" value="cod" wire:model="payment_method"
                    checked>
                  <label for="cod"><span></span> Cash on Delivery (COD)</label>
                  <div class="payment-details" style="display: block;">
                    <p>Pay with cash upon delivery.</p>
                  </div>
                </div>
                <x-alert-error field="payment_method" />
                @if (session('error'))
                  <div class="alert alert-danger alert-dismissible fade show mt-3 mb-0" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              </div>

              <button type="submit" class="border-0 commerce-btn-primary w-100" wire:loading.attr="disabled">
                <span wire:loading.remove>Place Order</span>
                <span wire:loading>Processing...</span>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
