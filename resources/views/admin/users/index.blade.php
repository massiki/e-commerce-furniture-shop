<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Users</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Users</li>
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
                    <h3 class="m-0">Users</h3>
                  </div>
                </div>
              </div>
              <div class="col-6">

              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="table-responsive m-b-30">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th class="text-center">Total Orders</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="pname">
                      <div class="image">
                        <img src="{{ asset('img/staf/2.png') }}" alt="" class="image">
                      </div>
                      <div class="name">
                        <a href="#" class="body-title-2">Admin</a>
                        <div class="text-tiny">ADM</div>
                      </div>
                    </td>
                    <td>1234567890</td>
                    <td>admin@surfsidemedia.in</td>
                    <td class="text-center"><a href="#" target="_blank">0</a></td>
                    <td>
                      <div class="list-icon-function">
                        <a href="#" wire:navigate>
                          <div class="item edit">
                            <i class="icon-edit-3"></i>
                          </div>
                        </a>
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
