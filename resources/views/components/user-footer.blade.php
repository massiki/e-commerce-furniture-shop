<div class="section footer-section">
  <!-- Footer Widget Section Start -->
  <div class="footer-widget-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-7 col-sm-12">
          <!-- Footer Widget Start -->
          <div class="footer-widget">
            <div class="footer-logo">
              <a href="#"><img src="{{ asset('assets/images/logo/logo-fikri.png') }}" style="max-width: 50px"
                  alt="Logo" /></a>
            </div>
            <div class="widget-about">
              <ul class="align-items-center">
                <li class="ec-footer-link">Kp. Cigadog Rt.01/Rw.10 Kec. Cibiuk Kab. Garut</li>
                <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+6285294532451" bis_skin_checked="1">
                    +62 852 9453 2451</a></li>
                <li class="ec-footer-link"><span>Email:</span><a href="mailto:fikri.amrulloh15@gmail.com"
                    bis_skin_checked="1">fikri.amrulloh15@gmail.com</a></li>
              </ul>
            </div>
            <div class="widget-social">
              <ul>
                <li>
                  <a href="https://github.com/massiki" target="_blank"><i class="fa fa-github"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/fikri-amrullah-5583b52b6/" target="_blank"><i
                      class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/fikri.amrulloh.15/" target="_blank"><i
                      class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Footer Widget End -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="footer-widget">
            <h4 class="footer-widget-title">Our Categories</h4>
            <ul class="footer-link footer-link-m">
              @foreach ($categories as $category)
                <li><a href="javascript:void(0)">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <!-- Footer Widget Start -->
          <div class="footer-widget">
            <h4 class="footer-widget-title">Information</h4>
            <ul class="footer-link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How to Shop</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="{{ route('contact') }}" wire:navigate>Contact us</a></li>
              <li><a href="{{ route('login') }}" wire:navigate>Log in</a></li>
            </ul>
          </div>
          <!-- Footer Widget End -->
        </div>
        <div class="col-lg-2 col-md-5 col-sm-6 col-6">
          <!-- Footer Widget Start -->
          <div class="footer-widget">
            <h4 class="footer-widget-title">My Account</h4>
            <ul class="footer-link">
              <li><a href="{{ route('register') }}" wire:navigate>Sign In</a></li>
              <li><a href="{{ route('user.cart') }}">View Cart</a></li>
              <li><a href="{{ route('user.wishlist') }}">My Wishlist</a></li>
              <li><a href="#">Track My Order</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <!-- Footer Widget End -->
        </div>

      </div>
    </div>
  </div>
  <!-- Footer Widget End -->

  <!-- Footer Copyright End -->
  <div class="copyright">
    <div class="container">
      <div class="row" style="padding-top:12px; padding-bottom:12px;">
        <div class="col-md-6">
          <p>&copy; {{ date('Y') }} Fikri Amrullah All rights reserved.</p>
        </div>
        <div class="col-md-6 text-end">
          <img src="{{ asset('assets/images/payment.png') }}" width="192" height="21" alt="Payment" />
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Copyright End -->
</div>
