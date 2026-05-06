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
              <a href="{{ route('login') }}" wire:navigate>Log in instead!</a>
            </p>
            <form action="#" wire:submit="register">
              <div class="single-form">
                <input type="text" placeholder="Full Name *" wire:model="name" />
              </div>
              <x-alert-error field="name" />

              <div class="single-form">
                <input type="text" placeholder="Email Address*" wire:model="email" />
              </div>
              <x-alert-error field="email" />

              <div class="single-form">
                <input type="password" placeholder="Password" wire:model="password" />
              </div>
              <x-alert-error field="password" />

              <div class="single-form">
                <input type="password" placeholder="Confirm Password" wire:model="password_confirmation" />
              </div>
              <div class="single-form">
                <input type="checkbox" id="receive" />
                <label for="receive">
                  <span></span> Receive Offers From Our
                  Partners</label>
              </div>
              <div class="single-form">
                <button type="submit" class="btn btn-primary btn-hover-dark" wire:loading.attr="disabled">
                  <span wire:loading.remove>Register</span>
                  <span wire:loading>Register...</span>
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
