<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'Contact Us'])
  <!-- Page Banner Section End -->

  <!-- Contact Section Start -->
  <div class="section section-padding">
    <div class="container">
      <!-- Contact Wrapper Start -->
      <div class="contact-wrapper">
        <div class="row gx-0">
          <div class="col-lg-4">
            <div class="contact-info">
              <h2 class="title">Contact Info</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit sed eiusmod
              </p>

              <!-- Contact Info Items Start -->
              <div class="contact-info-items">
                <div class="single-contact-info">
                  <div class="info-icon">
                    <i class="pe-7s-call"></i>
                  </div>
                  <div class="info-content">
                    <p>
                      <a href="tel:085294532451">085294532451</a>
                    </p>
                  </div>
                </div>

                <div class="single-contact-info">
                  <div class="info-icon">
                    <i class="pe-7s-mail"></i>
                  </div>
                  <div class="info-content">
                    <p>
                      <a href="mailto:fikri.amrulloh15@gmail.com">fikri.amrulloh15@gmail.com</a>
                    </p>
                  </div>
                </div>

                <div class="single-contact-info">
                  <div class="info-icon">
                    <i class="pe-7s-map-marker"></i>
                  </div>
                  <div class="info-content">
                    <p>Kp. Cigadog Rt.01 Rw.10 Desa Lingkungpasir Kec. Cibiuk Kab. Garut</p>
                  </div>
                </div>
              </div>
              <!-- Contact Info Items End -->

              <!-- Contact Social Start -->
              <ul class="social">
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

              <!-- Contact Social End -->

              <img src="assets/images/contact-info.png" alt="Contact-info" />
            </div>
          </div>
          <div class="col-lg-8">
            <!-- Contact Form Start  -->
            <div class="contact-form">
              <form id="contact-form" wire:submit.prevent="send">
                <div class="row">
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="name" placeholder="Name*" wire:model.defer="name" />
                      <x-alert-error field="name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="email" name="email" placeholder="Email*" wire:model.defer="email" />
                      <x-alert-error field="email" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="subject" placeholder="Subject*" wire:model.defer="subject" />
                      <x-alert-error field="subject" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="phone" placeholder="Phone No*" wire:model.defer="phone" />
                      <x-alert-error field="phone" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <textarea name="message" placeholder="Write your comments here" wire:model.defer="message"></textarea>
                      <x-alert-error field="message" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <x-alert-success />
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <button type="submit" class="btn btn-dark btn-hover-primary">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <!-- Contact Form End  -->
          </div>
        </div>
      </div>
      <!-- Contact Wrapper End -->
    </div>
  </div>
  <!-- Contact Section End -->
</div>
