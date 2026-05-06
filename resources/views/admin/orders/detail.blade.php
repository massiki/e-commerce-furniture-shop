<div class="main_content_iner overly_inner " bis_skin_checked="1">
  <div class="container-fluid p-0 " bis_skin_checked="1">
    <!-- page title  -->
    <div class="row" bis_skin_checked="1">
      <div class="col-12" bis_skin_checked="1">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between" bis_skin_checked="1">
          <div class="page_title_left d-flex align-items-center" bis_skin_checked="1">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Order Details</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Order Details</li>
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
        <div class="card mb-3" bis_skin_checked="1">
          <div class="card-body" bis_skin_checked="1">
            <div class="row pb-5" bis_skin_checked="1">
              <div class="col-6" bis_skin_checked="1">
                <h5>Ordered Details</h5>
              </div>
              <div class="col-6" bis_skin_checked="1">
                <a class="btn btn-sm btn-danger btn-smt float-end" href="{{ route('admin.orders.index') }}"
                  wire:navigate>Back</a>
              </div>
            </div>
            <div class="table-responsive" bis_skin_checked="1">
              <table class="table table-bordered table-striped table-transaction">
                <tbody>
                  <tr>
                    <th>Order No</th>
                    <td>7</td>
                    <th>Mobile</th>
                    <td>1234567890</td>
                    <th>Zip Code</th>
                    <td>804401</td>
                  </tr>
                  <tr>
                    <th>Order Date</th>
                    <td>2025-07-12 07:08:59</td>
                    <th>Delivered Date</th>
                    <td></td>
                    <th>Canceled Date</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Order Status</th>
                    <td colspan="5">
                      <span class="badge bg-warning">Ordered</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3" bis_skin_checked="1">
          <div class="card-body" bis_skin_checked="1">
            <div class="" bis_skin_checked="1">
              <h5>Ordered Items</h5>
            </div>
            <div class="table-responsive order-items" bis_skin_checked="1">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">SKU</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Options</th>
                    <th class="text-center">Return Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pname img-thumb">
                      <div class="image" bis_skin_checked="1">
                        <img src="uploads/products/thumbnails/1747188775.jpg" alt="Fourth Product" class="image">
                      </div>
                      <div class="name" bis_skin_checked="1">
                        <a href="{{ url('shop/fourth-product') }}" target="_blank" class="body-title-2"
                          wire:navigate>Fourth Product</a>
                      </div>
                    </td>
                    <td class="text-center">$210</td>
                    <td class="text-center">1</td>
                    <td class="text-center">243432</td>
                    <td class="text-center">Category 1</td>
                    <td class="text-center">Brand 1</td>
                    <td class="text-center"></td>
                    <td class="text-center">No</td>
                    <td class="text-center">
                      <div class="list-icon-function view-icon" bis_skin_checked="1">
                        <div class="item eye" bis_skin_checked="1">
                          <i class="icon-eye"></i>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="pname img-thumb">
                      <div class="image" bis_skin_checked="1">
                        <img src="uploads/products/thumbnails/1747188706.jpg" alt="Third Product" class="image">
                      </div>
                      <div class="name" bis_skin_checked="1">
                        <a href="{{ url('shop/third-product') }}" target="_blank" class="body-title-2"
                          wire:navigate>Third Product</a>
                      </div>
                    </td>
                    <td class="text-center">$158</td>
                    <td class="text-center">1</td>
                    <td class="text-center">44566</td>
                    <td class="text-center">Category 1</td>
                    <td class="text-center">Brand 1</td>
                    <td class="text-center"></td>
                    <td class="text-center">No</td>
                    <td class="text-center">
                      <div class="list-icon-function view-icon" bis_skin_checked="1">
                        <div class="item eye" bis_skin_checked="1">
                          <i class="icon-eye"></i>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="divider" bis_skin_checked="1"></div>
            <div class="" bis_skin_checked="1">

            </div>
          </div>
        </div>


        <div class="card mb-3" bis_skin_checked="1">
          <div class="card-body mt-5" bis_skin_checked="1">
            <h5>Shipping Address</h5>
            <div class="col-md-6" bis_skin_checked="1">
              <p>Sudhir Kumar</p>
              <p>1/2 ABC, DEF<br>ABC<br>EFG, Test<br>Test</p>
              <p>123456</p>
              <p>Mobile : 1234567890</p>
            </div>
          </div>
        </div>


        <div class="card mb-3" bis_skin_checked="1">
          <div class="card-body mt-5" bis_skin_checked="1">
            <h5>Transactions</h5>
            <table class="table table-striped table-bordered table-transaction">
              <tbody>
                <tr>
                  <th>Subtotal</th>
                  <td>$368</td>
                  <th>Tax</th>
                  <td>$77.28</td>
                  <th>Discount</th>
                  <td>$0</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>$445.28</td>
                  <th>Payment Mode</th>
                  <td>
                    cod
                  </td>
                  <th>Status</th>
                  <td>
                    <span class="badge bg-warning">Pending</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="wg-box mt-5" bis_skin_checked="1">
          <h5>Update Order Status</h5>
          <form>
            <div class="row" bis_skin_checked="1">
              <div class="col-md-3" bis_skin_checked="1">
                <div class="select" bis_skin_checked="1">
                  <select id="order_status" name="order_status" class="form-select">
                    <option value="ordered" selected="">Ordered</option>
                    <option value="delivered">Delivered</option>
                    <option value="canceled">Canceled</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3" bis_skin_checked="1">
                <button type="submit" class="btn btn-primary tf-button w208">Update Status</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
