<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Cart'])
  <!-- Page Banner Section End -->

  <!-- Shopping Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="cart-wrapper">
        <!-- empty cart Start -->
        <div class="empty-cart text-center pb-5">
          <h2 class="empty-cart-title">
            There are no more items in your cart
          </h2>
          <div class="empty-cart-img">
            <img src="assets/images/cart.png" alt="Cart">
          </div>
          <p>No item found in your cart</p>
          <a href="%7b%7broute(%27shop.html" class="btn btn-info btn-hover-dark">Continue browsing</a>
        </div>
        <!-- empty cart End -->
      </div>
      <div class="cart-wrapper">
        <!-- Cart Wrapper Start -->
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
                <th class="product-action">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product-thumb">
                  <img src="assets/images/product/product-03.jpg" alt="" />
                </td>
                <td class="product-info">
                  <h6 class="name">
                    <a href="product-details-2.html">Pendant Chandelier Light</a>
                  </h6>
                  <div class="product-prices">
                    <span class="old-price">$35.90</span>
                    <span class="sale-price">$28.72</span>
                  </div>
                  <div class="product-size-color">
                    <p>Size <span>S</span></p>
                    <p>Color <span>White</span></p>
                  </div>
                </td>
                <td class="quantity">
                  <div class="product-quantity d-inline-flex">
                    <button type="button" class="sub">
                      -
                    </button>
                    <input type="text" value="1" />
                    <button type="button" class="add">
                      +
                    </button>
                  </div>
                </td>
                <td class="product-total-price">
                  <span class="price">$28.72</span>
                </td>
                <td class="product-action">
                  <button class="remove">
                    <i class="pe-7s-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="product-thumb">
                  <img src="assets/images/product/product-04.jpg" alt="" />
                </td>
                <td class="product-info">
                  <h6 class="name">
                    <a href="product-details-2.html">High quality vase bottle</a>
                  </h6>
                  <div class="product-prices">
                    <span class="sale-price">$35.72</span>
                  </div>
                  <div class="product-size-color">
                    <p>Size <span>S</span></p>
                    <p>Color <span>White</span></p>
                  </div>
                </td>
                <td class="quantity">
                  <div class="product-quantity d-inline-flex">
                    <button type="button" class="sub">
                      -
                    </button>
                    <input type="text" value="1" />
                    <button type="button" class="add">
                      +
                    </button>
                  </div>
                </td>
                <td class="product-total-price">
                  <span class="price">$28.72</span>
                </td>
                <td class="product-action">
                  <button class="remove">
                    <i class="pe-7s-trash"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="product-thumb">
                  <img src="assets/images/product/product-08.jpg" alt="" />
                </td>
                <td class="product-info">
                  <h6 class="name">
                    <a href="product-details-2.html">Reece Seater Sofa</a>
                  </h6>
                  <div class="product-prices">
                    <span class="sale-price">$28.72</span>
                  </div>
                  <div class="product-size-color">
                    <p>Size <span>S</span></p>
                    <p>Color <span>White</span></p>
                  </div>
                </td>
                <td class="quantity">
                  <div class="product-quantity d-inline-flex">
                    <button type="button" class="sub">
                      -
                    </button>
                    <input type="text" value="1" />
                    <button type="button" class="add">
                      +
                    </button>
                  </div>
                </td>
                <td class="product-total-price">
                  <span class="price">$28.72</span>
                </td>
                <td class="product-action">
                  <button class="remove">
                    <i class="pe-7s-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Cart Wrapper End -->
        <!-- Cart btn Start -->
        <div class="cart-btn">
          <div class="left-btn">
            <a href="shop-grid-left-sidebar-2.html" class="btn btn-dark btn-hover-primary">Continue Shopping</a>
          </div>
          <div class="right-btn">
            <a href="#" class="btn btn-outline-dark">Clear Cart</a>
            <a href="#" class="btn btn-outline-dark">Update Cart</a>
          </div>
        </div>
        <!-- Cart btn Start -->
      </div>
      <div class="row">
        <div class="col-lg-4">
          <!-- Cart Shipping Start -->
          <div class="cart-shipping">
            <div class="cart-title">
              <h4 class="title">Calculate Shipping</h4>
              <p>Estimate your shipping fee *</p>
            </div>
            <div class="cart-form">
              <p>Calculate shipping</p>
              <form action="#">
                <div class="single-select2">
                  <div class="form-select2">
                    <select class="select2">
                      <option value="0">
                        Select a country…
                      </option>
                      <option value="1">
                        Bangladesh
                      </option>
                      <option value="2">
                        Canada
                      </option>
                      <option value="3">
                        Colombia
                      </option>
                      <option value="4">
                        Indonesia
                      </option>
                      <option value="5">Italy</option>
                      <option value="6">
                        Pakistan
                      </option>
                      <option value="7">
                        Turkey
                      </option>
                    </select>
                  </div>
                </div>
                <div class="single-select2">
                  <div class="form-select2">
                    <select class="select2">
                      <option value="">
                        Select an option…
                      </option>
                      <option value="BAG">
                        Bagerhat
                      </option>
                      <option value="BAN">
                        Bandarban
                      </option>
                      <option value="BAR">
                        Barguna
                      </option>
                      <option value="BARI">
                        Barisal
                      </option>
                      <option value="BHO">
                        Bhola
                      </option>
                      <option value="BOG">
                        Bogra
                      </option>
                      <option value="BRA">
                        Brahmanbaria
                      </option>
                      <option value="CHA">
                        Chandpur
                      </option>
                      <option value="CHI">
                        Chittagong
                      </option>
                      <option value="CHU">
                        Chuadanga
                      </option>
                      <option value="COM">
                        Comilla
                      </option>
                      <option value="COX">
                        Cox's Bazar
                      </option>
                      <option value="DHA">
                        Dhaka
                      </option>
                      <option value="DIN">
                        Dinajpur
                      </option>
                      <option value="FAR">
                        Faridpur
                      </option>
                      <option value="FEN">
                        Feni
                      </option>
                      <option value="GAI">
                        Gaibandha
                      </option>
                      <option value="GAZI">
                        Gazipur
                      </option>
                      <option value="GOP">
                        Gopalganj
                      </option>
                      <option value="HAB">
                        Habiganj
                      </option>
                      <option value="JAM">
                        Jamalpur
                      </option>
                      <option value="JES">
                        Jessore
                      </option>
                      <option value="JHA">
                        Jhalokati
                      </option>
                      <option value="JHE">
                        Jhenaidah
                      </option>
                      <option value="JOY">
                        Joypurhat
                      </option>
                      <option value="KHA">
                        Khagrachhari
                      </option>
                      <option value="KHU">
                        Khulna
                      </option>
                      <option value="KIS">
                        Kishoreganj
                      </option>
                      <option value="KUR">
                        Kurigram
                      </option>
                      <option value="KUS">
                        Kushtia
                      </option>
                      <option value="LAK">
                        Lakshmipur
                      </option>
                      <option value="LAL">
                        Lalmonirhat
                      </option>
                      <option value="MAD">
                        Madaripur
                      </option>
                      <option value="MAG">
                        Magura
                      </option>
                      <option value="MAN">
                        Manikganj
                      </option>
                      <option value="MEH">
                        Meherpur
                      </option>
                      <option value="MOU">
                        Moulvibazar
                      </option>
                      <option value="MUN">
                        Munshiganj
                      </option>
                      <option value="MYM">
                        Mymensingh
                      </option>
                      <option value="NAO">
                        Naogaon
                      </option>
                      <option value="NAR">
                        Narail
                      </option>
                      <option value="NARG">
                        Narayanganj
                      </option>
                      <option value="NARD">
                        Narsingdi
                      </option>
                      <option value="NAT">
                        Natore
                      </option>
                      <option value="NAW">
                        Nawabganj
                      </option>
                      <option value="NET">
                        Netrakona
                      </option>
                      <option value="NIL">
                        Nilphamari
                      </option>
                      <option value="NOA">
                        Noakhali
                      </option>
                      <option value="PAB">
                        Pabna
                      </option>
                      <option value="PAN">
                        Panchagarh
                      </option>
                      <option value="PAT">
                        Patuakhali
                      </option>
                      <option value="PIR">
                        Pirojpur
                      </option>
                      <option value="RAJB">
                        Rajbari
                      </option>
                      <option value="RAJ">
                        Rajshahi
                      </option>
                      <option value="RAN">
                        Rangamati
                      </option>
                      <option value="RANP">
                        Rangpur
                      </option>
                      <option value="SAT">
                        Satkhira
                      </option>
                      <option value="SHA">
                        Shariatpur
                      </option>
                      <option value="SHE">
                        Sherpur
                      </option>
                      <option value="SIR">
                        Sirajganj
                      </option>
                      <option value="SUN">
                        Sunamganj
                      </option>
                      <option value="SYL">
                        Sylhet
                      </option>
                      <option value="TAN">
                        Tangail
                      </option>
                      <option value="THA">
                        Thakurgaon
                      </option>
                    </select>
                  </div>
                </div>
                <div class="single-form">
                  <input class="form-control" type="text" placeholder="Postcode/ziip" />
                </div>
                <div class="single-form">
                  <button class="btn btn-dark btn-hover-primary">
                    Update totals
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- Cart Shipping End -->
        </div>
        <div class="col-lg-4">
          <!-- Cart Shipping Start -->
          <div class="cart-shipping">
            <div class="cart-title">
              <h4 class="title">Coupon Code</h4>
              <p>Enter your coupon code if you have one.</p>
            </div>
            <div class="cart-form">
              <form action="#">
                <div class="single-form">
                  <input class="form-control" type="text" placeholder="Enter your coupon code.." />
                </div>
                <div class="single-form">
                  <button class="btn btn-dark btn-hover-primary">
                    Apply Coupon
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- Cart Shipping End -->
        </div>
        <div class="col-lg-4">
          <!-- Cart Totals Start -->
          <div class="cart-totals">
            <div class="cart-title">
              <h4 class="title">Cart totals</h4>
            </div>
            <div class="cart-total-table">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <p class="value">Subtotal</p>
                    </td>
                    <td>
                      <p class="price">£600.00</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="value">Shipping</p>
                    </td>
                    <td>
                      <ul class="shipping-list">
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio1" checked="" />
                          <label for="radio1"><span></span> Flat
                            Rate</label>
                        </li>
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio2" />
                          <label for="radio2"><span></span> Free
                            Shipping</label>
                        </li>
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio3" />
                          <label for="radio3"><span></span> Local
                            Pickup</label>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="value">Total</p>
                    </td>
                    <td>
                      <p class="price">£600.00</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="cart-total-btn">
              <a href="#" class="btn btn-dark btn-hover-primary btn-block">Proceed To Checkout</a>
            </div>
          </div>
          <!-- Cart Totals End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Shopping Cart Section End -->
</div>
