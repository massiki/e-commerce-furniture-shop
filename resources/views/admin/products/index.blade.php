<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Products</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                    <h3 class="m-0">Products</h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.products.create') }}" wire:navigate
                  class="btn btn-sm btn-outline-primary float-end"
                  style="display: flex; align-items: center; vertical-align: middle;">
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
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>SalePrice</th>
                    <th>SKU</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Featured</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>6</td>
                    <td>
                      <img src="{{ asset('img/products/img-5.png') }}" alt="" height="52">
                      <p class="d-inline-block align-middle mb-0">
                        <a href="#" class="d-inline-block align-middle mb-0 f_s_16 f_w_600 color_theme2">
                          Reebok Beg
                        </a>
                        <br>
                        <span class="text-muted font_s_13">size-08 (Model 2025)</span>
                      </p>
                    </td>
                    <td>$128.00</td>
                    <td>$110.00</td>
                    <td>SKU7868</td>
                    <td>Category3</td>
                    <td>Brand2</td>
                    <td>Yes</td>
                    <td>instock</td>
                    <td>11</td>
                    <td>
                      <div class="list-icon-function" bis_skin_checked="1">
                        <a href="#" target="_blank">
                          <div class="item eye" bis_skin_checked="1">
                            <i class="fa fa-eye"></i>
                          </div>
                        </a>
                        <a href="{{ route('admin.products.edit', 6) }}" wire:navigate>
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
