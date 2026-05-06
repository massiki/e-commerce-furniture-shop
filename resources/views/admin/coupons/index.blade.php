<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Coupons</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Coupons</li>
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
            <div class="row">
              <div class="col-6">
                <div class="box_header m-0">
                  <div class="main-title">
                    <h3 class="m-0">Coupons</h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.coupons.create') }}" class="btn btn-sm btn-outline-primary float-end"
                  style="display: flex; align-items: center; vertical-align: middle;" wire:navigate>
                  <i class="material-icons" style="margin-right: 4px;">add</i>
                  Add New
                </a>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="table-responsive m-b-30">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code Type</th>
                    <th scope="col">Value</th>
                    <th scope="col">Cart Value</th>
                    <th scope="col">Expiry Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Off10</td>
                    <td>10</td>
                    <td>200</td>
                    <td>05-05-2025</td>
                    <td>
                      <div class="list-icon-function" bis_skin_checked="1">
                        <a href="{{ route('admin.coupons.edit', ['coupon' => 1]) }}" wire:navigate>
                          <div class="item edit" bis_skin_checked="1">
                            <i class="fa fa-edit"></i>
                          </div>
                        </a>
                        <form action="#" method="POST">
                          <div class="item text-danger delete" bis_skin_checked="1">
                            <i class="fa fa-trash"></i>
                          </div>
                        </form>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
