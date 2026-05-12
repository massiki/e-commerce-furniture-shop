<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Checkout'])
  <!-- Page Banner Section End -->

  <!-- Shopping Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
      <form wire:submit="checkout">
        <div class="row">
          <div class="col-lg-7">
            <!-- Checkout Form Start -->
            <div class="checkout-form">
              <div class="checkout-title">
                <h4 class="title">Shipping details</h4>
              </div>

              <div class="row mt-5">
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="name">
                    <label for="name">Full Name *</label>
                    <x-alert-error field="name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="phone">
                    <label for="phone">Phone Number *</label>
                    <x-alert-error field="phone" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="province">
                    <label for="province">Province *</label>
                    <x-alert-error field="province" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" wire:model="city">
                    <label for="city">City *</label>
                    <x-alert-error field="city" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="district">
                    <label for="district">District *</label>
                    <x-alert-error field="district" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="subdistrict">
                    <label for="subdistrict">Subdistrict *</label>
                    <x-alert-error field="subdistrict" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="postal_code">
                    <label for="postal_code">Postal Code *</label>
                    <x-alert-error field="postal_code" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="full_address">
                    <label for="full_address">Full Address *</label>
                    <x-alert-error field="full_address" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" wire:model="address_note">
                    <label for="address_note">Address Note</label>
                    <x-alert-error field="address_note" />
                  </div>
                </div>
              </div>


            </div>
            <!-- Checkout Form End -->
          </div>
          <div class="col-lg-5">
            <div class="checkout-order">
              <div class="checkout-title">
                <h4 class="title">Your Order</h4>
              </div>

              <div class="checkout-order-table table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="Product-name">Product</th>
                      <th class="Product-price">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orderItems as $item)
                      <tr>
                        <td class="Product-name">
                          <p class="order-products">
                            <img src="{{ asset('storage/' . $item['image']) }}" class="order-img" width="75">
                            &nbsp; {{ $item['nameProduct'] }} × {{ $item['quantity'] }}
                          </p>
                        </td>
                        <td class="Product-price">
                          <p>Rp {{ number_format($item['totalPrice'], 0, ',', '.') }}</p>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="Product-name">
                        <p>Subtotal</p>
                      </td>
                      <td class="Product-price">
                        <p>Rp {{ number_format($subTotal, 0, ',', '.') }}</p>
                      </td>
                    </tr>
                    @if (session('coupon'))
                      <tr>
                        <td class="Product-name">
                          <p class="value">Vocher | {{ session('coupon.type') }}</p>
                        </td>
                        <td class="Product-price">
                          <p class="price text-end">
                            - Rp {{ number_format($discount, 0, ',', '.') }}
                          </p>
                        </td>
                      </tr>
                    @endif
                    <tr>
                      <td class="Product-name">
                        <p>Total</p>
                      </td>
                      <td class="total-price">
                        <p>Rp {{ number_format($total, 0, ',', '.') }}</p>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <div class="checkout-payment">
                <ul>
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="mode" id="cod" value="cod" wire:model="payment_method"
                          checked>
                        <label for="cod"><span></span> Cash on Delivery (COD)</label>
                        <div class="payment-details" style="display: block;">
                          <p>Pay with cash upon delivery.</p>
                        </div>
                      </div>
                      <x-alert-error field="payment_method" />
                    </div>
                  </li>
                  {{-- <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="mode" id="bank_transfer" value="bank_transfer"
                          wire:model="payment_method">
                        <label for="bank_transfer"><span></span> Bank Transfer</label>
                        <div class="payment-details">
                          <p>Transfer the total payment to our bank account. Further instructions will be provided after
                            order placement.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="mode" id="e_wallet" value="e_wallet"
                          wire:model="payment_method">
                        <label for="e_wallet"><span></span> E-Wallet</label>
                        <div class="payment-details">
                          <p>Pay securely using your preferred e-wallet service such as GoPay, OVO, or Dana.</p>
                        </div>
                      </div>
                    </div>
                  </li> --}}
                </ul>

                <div class="single-form">
                  <button type="submit" class="btn btn-primary btn-hover-dark d-block" wire:loading.attr="disabled">
                    <span wire:loading.remove>Place Order</span>
                    <span wire:loading>Processing...</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Shopping Cart Section End -->
</div>
