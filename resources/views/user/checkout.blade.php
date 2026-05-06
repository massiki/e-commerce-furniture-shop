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
                    <input type="text" class="form-control" name="name" required="" value="">
                    <label for="name">Full Name *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="phone" required="" value="">
                    <label for="phone">Phone Number *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="zip" required="" value="">
                    <label for="zip">Pincode *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" name="state" required="" value="">
                    <label for="state">State *</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="city" required="" value="">
                    <label for="city">Town / City *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="address" required="" value="">
                    <label for="address">House no, Building Name *</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="locality" required="" value="">
                    <label for="locality">Road Name, Area, Colony *</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" name="landmark" required="" value="">
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
                    <tr>
                      <td class="Product-name">
                        <p class="order-products">
                          <img src="{{ asset('uploads/products/thumbnails/1747188775.jpg') }}" class="order-img">
                          &nbsp; Fourth Product × 1
                        </p>
                      </td>
                      <td class="Product-price">
                        <p>$210.00</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="Product-name">
                        <p class="order-products">
                          <img src="{{ asset('uploads/products/thumbnails/1747188478.jpg') }}" class="order-img">
                          &nbsp; Second Product × 1
                        </p>
                      </td>
                      <td class="Product-price">
                        <p>$300.00</p>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="Product-name">
                        <p>Subtotal</p>
                      </td>
                      <td class="Product-price">
                        <p>$510.00</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="Product-name">
                        <p>Shipping</p>
                      </td>
                      <td class="Product-price">
                        <p>Free</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="Product-name">
                        <p>VAT</p>
                      </td>
                      <td class="total-price">
                        <p>$107.10</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="Product-name">
                        <p>Total</p>
                      </td>
                      <td class="total-price">
                        <p>$617.10</p>
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
