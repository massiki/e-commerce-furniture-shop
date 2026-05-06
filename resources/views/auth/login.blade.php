<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Login'])
  <!-- Page Banner Section End -->

  <!-- Login Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <!-- Login & Register Start -->
          <div class="login-register-wrapper">
            <h4 class="title">Login to Your Account</h4>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="single-form">
                <input type="text" name="email" placeholder="Username or email *" required />
              </div>
              <div class="single-form">
                <input type="password" name="password" placeholder="Password" required />
              </div>
              <div class="single-form">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember"><span></span> Remember me</label>
              </div>
              <div class="single-form">
                <button class="btn btn-primary btn-hover-dark" type="submit">
                  Login
                </button>
              </div>
            </form>
            <p>
              <a href="javascript:void(0)">Lost your password?</a>
            </p>
            <p>
              No account?
              <a href="{{ route('register') }}" wire:navigate>Create one here.</a>
            </p>
          </div>
          <!-- Login & Register End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Login Section End -->
</div>
