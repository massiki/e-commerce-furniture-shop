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
                      <a href="tel:0000000000">000 000 0000</a>
                    </p>
                  </div>
                </div>

                <div class="single-contact-info">
                  <div class="info-icon">
                    <i class="pe-7s-mail"></i>
                  </div>
                  <div class="info-content">
                    <p>
                      <a href="mailto:info@surfsidemedia.in">info@surfsidemedia.in</a>
                    </p>
                  </div>
                </div>

                <div class="single-contact-info">
                  <div class="info-icon">
                    <i class="pe-7s-map-marker"></i>
                  </div>
                  <div class="info-content">
                    <p>Your Address Goese Here</p>
                  </div>
                </div>
              </div>
              <!-- Contact Info Items End -->

              <!-- Contact Social Start -->
              <ul class="social">
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <!-- Contact Social End -->

              <img src="assets/images/contact-info.png" alt="Contact-info" />
            </div>
          </div>
          <div class="col-lg-8">
            <!-- Contact Form Start  -->
            <div class="contact-form">
              <form id="contact-form" action="#" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="name" placeholder="Name*" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="email" name="email" placeholder="Email*" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="subject" placeholder="Subject" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <input type="text" name="phone" placeholder="Phone No" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <textarea name="message" placeholder="Write your comments here"></textarea>
                    </div>
                  </div>
                  <p class="form-message"></p>
                  <div class="col-md-12">
                    <div class="single-form">
                      <button type="submit" class="btn btn-dark btn-hover-primary">
                        Submit Review
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
