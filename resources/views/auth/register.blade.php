<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Register'])
  <!-- Page Banner Section End -->

  <!-- Register Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <!-- Login & Register Start -->
          <div class="login-register-wrapper">
            <h4 class="title">Create New Account</h4>
            <p>
              Already have an account?
              <a href="login.html">Log in instead!</a>
            </p>
            <form action="#">
              <div class="single-form">
                <input type="text" placeholder="First Name" />
              </div>
              <div class="single-form">
                <input type="text" placeholder="Last Name" />
              </div>
              <div class="single-form">
                <input type="text" placeholder="Email Address *" />
              </div>
              <div class="single-form">
                <input type="text" placeholder="Username *" />
              </div>
              <div class="single-form">
                <input type="password" placeholder="Password" />
              </div>
              <div class="single-form">
                <input type="password" placeholder="Confirm Password" />
              </div>
              <div class="single-form">
                <input type="checkbox" id="receive" />
                <label for="receive">
                  <span></span> Receive Offers From Our
                  Partners</label>
              </div>
              <div class="single-form">
                <button class="btn btn-primary btn-hover-dark">
                  Register
                </button>
              </div>
            </form>
          </div>
          <!-- Login & Register End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Register Section End -->
</div>
