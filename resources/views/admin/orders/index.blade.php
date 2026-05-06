<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Orders</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Orders</li>
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
                    <h3 class="m-0">Orders</h3>
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
                    <th class="col">OrderNo</th>
                    <th class="col">Name</th>
                    <th class="col">Phone</th>
                    <th class="col">Subtotal</th>
                    <th class="col">Tax</th>
                    <th class="col">Total</th>
                    <th class="col">Status</th>
                    <th class="col">Order Date</th>
                    <th class="col">Total Items</th>
                    <th class="col">Delivered On</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">5</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567890</td>
                    <td class="text-center">$788</td>
                    <td class="text-center">$165.48</td>
                    <td class="text-center">$953.48</td>
                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2025-07-06 16:58:13</td>
                    <td class="text-center">4</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', ['order' => 5]) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567890</td>
                    <td class="text-center">$788</td>
                    <td class="text-center">$165.48</td>
                    <td class="text-center">$953.48</td>
                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2025-07-06 16:50:00</td>
                    <td class="text-center">4</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', ['order' => 4]) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567890</td>
                    <td class="text-center">$368</td>
                    <td class="text-center">$77.28</td>
                    <td class="text-center">$445.28</td>
                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2025-07-06 16:44:53</td>
                    <td class="text-center">2</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', ['order' => 3]) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567890</td>
                    <td class="text-center">$330</td>
                    <td class="text-center">$69.3</td>
                    <td class="text-center">$399.3</td>
                    <td class="text-center">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                    <td class="text-center">2025-07-06 16:41:18</td>
                    <td class="text-center">2</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', ['order' => 2]) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Sudhir Kumar</td>
                    <td class="text-center">1234567890</td>
                    <td class="text-center">$120</td>
                    <td class="text-center">$25.2</td>
                    <td class="text-center">$145.2</td>
                    <td class="text-center">
                      <span class="badge bg-success">Delivered</span>
                    </td>
                    <td class="text-center">2025-05-12 11:16:16</td>
                    <td class="text-center">1</td>
                    <td class="text-center">2025-05-12 11:31:33</td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', ['order' => 1]) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
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
