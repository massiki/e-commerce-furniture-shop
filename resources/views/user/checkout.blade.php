<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Checkout'])
  <!-- Page Banner Section End -->

  <!-- Shopping Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
      <form>
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
                    <input type="text" class="form-control">
                    <label for="name">Full Name *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="phone">Phone Number *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="zip">Pincode *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control">
                    <label for="state">State *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="city">Town / City *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="address">House no, Building Name *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="locality">Road Name, Area, Colony *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control">
                    <label for="landmark">Landmark *</label>
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
                        <input type="radio" name="mode" id="card" value="card">
                        <label for="card"><span></span> Debit or Credit Card</label>
                        <div class="payment-details">
                          <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store
                            Postcode, Store Country.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="mode" id="paypal">
                        <label for="paypal"><span></span> Paypal</label>
                        <div class="payment-details">
                          <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="mode" id="cod" value="cod" checked="checked">
                        <label for="mode"><span></span> Cash on Delivery</label>
                        <div class="payment-details" style="display: block;">
                          <p>Pay with cash upon delivery.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="single-form">
                  <button type="submit" class="btn btn-primary btn-hover-dark d-block">Place Order</button>
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
