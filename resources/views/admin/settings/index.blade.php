<div class="main_content_iner overly_inner " bis_skin_checked="1">
  <div class="container-fluid p-0 " bis_skin_checked="1">
    <!-- page title  -->
    <div class="row" bis_skin_checked="1">
      <div class="col-12" bis_skin_checked="1">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between" bis_skin_checked="1">
          <div class="page_title_left d-flex align-items-center" bis_skin_checked="1">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Settings</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
          <div class="page_title_right" bis_skin_checked="1">
            <div class="page_date_button d-flex align-items-center" bis_skin_checked="1">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row " bis_skin_checked="1">
      <div class="col-lg-12" bis_skin_checked="1">
        <div class="white_card card_height_100 mb_30" bis_skin_checked="1">
          <div class="white_card_header" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
              <div class="col-6" bis_skin_checked="1">
                <div class="box_header m-0" bis_skin_checked="1">
                  <div class="main-title" bis_skin_checked="1">
                    <h3 class="m-0">Settings</h3>
                  </div>
                </div>
              </div>
              <div class="col-6" bis_skin_checked="1">
              </div>
            </div>
          </div>
          <div class="white_card_body" bis_skin_checked="1">
            <div class="m-b-30" bis_skin_checked="1">

              <form method="POST" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                <input type="hidden" name="_method" value="PUT">
                <div class="row mb-3" bis_skin_checked="1">
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                      value="info@surfsidemedia.in" required="">
                  </div>
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="phone" class="form-label">Phone 1</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                      placeholder="Enter primary phone" value="1234567890" required="">
                  </div>
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="phone2" class="form-label">Phone 2</label>
                    <input type="text" class="form-control" id="phone2" name="phone2"
                      placeholder="Enter secondary phone" value="1234567891">
                  </div>
                </div>

                <div class="row mb-3" bis_skin_checked="1">
                  <div class="col-md-12" bis_skin_checked="1">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
                      value="ABC, 123, India" required="">
                  </div>
                </div>

                <div class="row mb-3" bis_skin_checked="1">
                  <div class="col-md-12" bis_skin_checked="1">
                    <label for="map" class="form-label">Map Embed Code</label>
                    <textarea class="form-control" id="map" name="map" rows="4"
                      placeholder="Paste map embed code or URL" required="">#</textarea>
                  </div>
                </div>

                <div class="row mb-3" bis_skin_checked="1">
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="twitter" class="form-label">Twitter URL</label>
                    <input type="text" class="form-control" id="twitter" name="twiter"
                      placeholder="Enter Twitter URL" value="#">
                  </div>
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="facebook" class="form-label">Facebook URL</label>
                    <input type="text" class="form-control" id="facebook" name="facebook"
                      placeholder="Enter Facebook URL" value="#">
                  </div>
                  <div class="col-md-4" bis_skin_checked="1">
                    <label for="pinterest" class="form-label">Pinterest URL</label>
                    <input type="text" class="form-control" id="pinterest" name="pinterest"
                      placeholder="Enter Pinterest URL" value="#">
                  </div>
                </div>

                <div class="row mb-3" bis_skin_checked="1">
                  <div class="col-md-6" bis_skin_checked="1">
                    <label for="instagram" class="form-label">Instagram URL</label>
                    <input type="text" class="form-control" id="instagram" name="instagram"
                      placeholder="Enter Instagram URL" value="#">
                  </div>
                  <div class="col-md-6" bis_skin_checked="1">
                    <label for="youtube" class="form-label">YouTube URL</label>
                    <input type="text" class="form-control" id="youtube" name="youtube"
                      placeholder="Enter YouTube URL" value="#">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Settings</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
