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
              <form wire:submit="update">
                <div class="row mb-3">
                  <x-admin-input-text field="code" :isCol="true" />
                  <div class="col-md-6">
                    <label class="form-label" for="coupon-type">Coupon Type</label>
                    <select class="form-select" id="coupon-type" wire:model="type">
                      <option value="">Select Coupon Type</option>
                      <option value="percent">Percentage</option>
                      <option value="fixed">Fixed Amount</option>
                    </select>
                    <x-alert-error field="type" />
                  </div>
                </div>

                <div class="row mb-3">
                  <x-admin-input-text field="value" :isCol="true" />
                  <x-admin-input-text field="cart_value" :isCol="true" />
                </div>

                <div class="mb-3">
                  <label class="form-label" for="expiry-date">Expiry Date</label>
                  <input type="date" class="form-control" id="expiry-date" wire:model="expired_date">
                  <x-alert-error field="expired_date" />
                </div>

                <x-admin-button-submit />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
