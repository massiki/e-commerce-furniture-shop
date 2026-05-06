<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Coupon</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('admin.coupons.index') }}" wire:navigate>Coupons</a>
              </li>
              <li class="breadcrumb-item active">Edit Coupon</li>
            </ol>
          </div>
          <div class="page_title_right">
            <div class="page_date_button d-flex align-items-center">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
          <div class="white_card_header">
            <div class="box_header m-0">
              <div class="main-title">
                <h3 class="m-0">Edit Coupon</h3>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="card-body">
              <form data-parsley-validate>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="coupon-code">Coupon Code</label>
                    <input type="text" class="form-control" id="coupon-code" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="coupon-type">Coupon Type</label>
                    <select class="form-select" id="coupon-type" required>
                      <option value="">Select Coupon Type</option>
                      <option value="percentage">Percentage</option>
                      <option value="fixed">Fixed Amount</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="value">Value</label>
                  <input type="text" class="form-control" id="value" placeholder="" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cart-value">Cart Value</label>
                  <input type="text" class="form-control" id="cart-value" placeholder="" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="expiry-date">Expiry Date</label>
                  <input type="date" class="form-control" id="expiry-date" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Image</label>
                  <input type="file" class="form-control" id="image" accept="image/*"
                    onchange="previewImage(event)" required>
                  <img id="image-preview" src="#" alt="Image Preview"
                    style="display:none; margin-top:10px; width:160px; max-width:100%;" />
                  <button type="button" id="remove-image" class="btn btn-sm btn-danger"
                    style="display:none; margin-top:5px;" onclick="removeImage()">Remove</button>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
