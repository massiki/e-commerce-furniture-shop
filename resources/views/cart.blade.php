<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Cart'])
  <!-- Page Banner Section End -->

  <!-- Shopping Cart Section Start -->
  <div class="section section-padding">
    <div class="container">
      @if ($cartItems->count() == 0)
        <!-- empty cart Start -->
        <div class="cart-wrapper">
          <div class="empty-cart text-center pb-5">
            <h2 class="empty-cart-title">
              There are no more items in your cart
            </h2>
            <div class="empty-cart-img">
              <img src="{{ asset('assets/images/cart.png') }}" alt="Cart">
            </div>
            <p>No item found in your cart</p>
            <a href="{{ route('shop') }}" wire:navigate class="btn btn-info btn-hover-dark">Continue browsing</a>
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
                  <th class="product-action">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cartItems as $items)
                  <tr>
                    <td class="product-thumb">
                      <img src="{{ asset('storage/' . $items->product->image) }}" alt="" />
                    </td>
                    <td class="product-info">
                      <h6 class="name">
                        <a href="#" wire:navigate>{{ $items->product->name }}</a>
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
                        <p>Size <span>-</span></p>
                        <p>Color <span>-</span></p>
                      </div>
                    </td>
                    <td class="quantity">
                      <div class="product-quantity d-inline-flex">
                        <button type="button" class="" wire:click.prevent="decrement({{ $items->id }})">
                          -
                        </button>
                        <input type="text" disabled value="{{ $items->quantity }}" />
                        <button type="button" class="" wire:click.prevent="increment({{ $items->id }})">
                          +
                        </button>
                      </div>
                    </td>
                    <td class="product-total-price">
                      <span class="price">Rp
                        {{ $items->product->sale_price ? number_format($items->product->sale_price * $items->quantity, 0, ',', '.') : number_format($items->product->regular_price * $items->quantity, 0, ',', '.') }}
                      </span>
                    </td>
                    <td class="product-action">
                      <button class="remove" wire:click.prevent="remove({{ $items->id }})">
                        <i class="pe-7s-trash"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Cart Wrapper End -->
          <!-- Cart btn Start -->
          <div class="cart-btn">
            <div class="left-btn">
              <a href="{{ route('shop') }}" wire:navigate class="btn btn-dark btn-hover-primary">Continue Shopping</a>
            </div>
            <div class="right-btn">
              <button wire:click="clear" class="btn btn-outline-dark">Clear Cart</button>
            </div>
          </div>
        </div>
        <!-- Cart btn Start -->

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
      @endif
    </div>
  </div>
  <!-- Shopping Cart Section End -->
</div>
