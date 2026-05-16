<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
          </div>
          <div class="page_title_right">
            <div class="page_date_button d-flex align-items-center">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-xl-7 ">
        <div class="white_card mb_30 card_height_100">
          <div class="white_card_header">
            <div class="row align-items-center justify-content-between flex-wrap">
              <div class="col-lg-4">
                <div class="main-title">
                  <h3 class="m-0">Stoke Details</h3>
                </div>
              </div>
              <div class="col-lg-4 text-end d-flex justify-content-end">
                <select class="nice_Select2 max-width-220">
                  <option value="1">Show by month</option>
                  <option value="1">Show by year</option>
                  <option value="1">Show by day</option>
                </select>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div id="management_bar"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 " bis_skin_checked="1">
        <div class="white_card card_height_100 mb_30 overflow_hidden" bis_skin_checked="1">
          <div class="white_card_header" bis_skin_checked="1">
            <div class="box_header m-0" bis_skin_checked="1">
              <div class="main-title" bis_skin_checked="1">
                <h3 class="m-0">Sales Details</h3>
              </div>
              <div class="header_more_tool" bis_skin_checked="1">
                <div class="dropdown" bis_skin_checked="1">
                  <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    <i class="ti-more-alt"></i>
                  </span>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                    bis_skin_checked="1">
                    <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                    <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                    <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                    <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                    <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                      Download</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="white_card_body pb-0" bis_skin_checked="1">
            <div class="Sales_Details_plan" bis_skin_checked="1">
              <div class="row" bis_skin_checked="1">

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        📦
                      </div>
                      <div bis_skin_checked="1">
                        <h5>{{ $totalOrders }}</h5>
                        <span>Total Orders</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        💰
                      </div>
                      <div bis_skin_checked="1">
                        <h5>Rp {{ number_format($totalAmount, 0, ',', '.') }}</h5>
                        <span>Total Amount</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        ⏳
                      </div>
                      <div bis_skin_checked="1">
                        <h5>{{ $pendingOrders }}</h5>
                        <span>Pending Orders</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        💰
                      </div>
                      <div bis_skin_checked="1">
                        <h5>Rp {{ number_format($pendingOrdersAmount, 0, ',', '.') }}</h5>
                        <span>Pending Orders Amount</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        ✅
                      </div>
                      <div bis_skin_checked="1">
                        <h5>{{ $deliveredOrders }}</h5>
                        <span>Delivered Orders</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        💰
                      </div>
                      <div bis_skin_checked="1">
                        <h5>Rp {{ number_format($deliveredOrdersAmount, 0, ',', '.') }}</h5>
                        <span>Delivered Orders Amount</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        🚫
                      </div>
                      <div bis_skin_checked="1">
                        <h5>{{ $canceledOrders }}</h5>
                        <span>Canceled Orders</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" bis_skin_checked="1">
                  <div class="single_plan d-flex align-items-center justify-content-between" bis_skin_checked="1">
                    <div class="plan_left d-flex align-items-center" bis_skin_checked="1">
                      <div class="thumb" bis_skin_checked="1">
                        💰
                      </div>
                      <div bis_skin_checked="1">
                        <h5>Rp {{ number_format($canceledOrdersAmount, 0, ',', '.') }}</h5>
                        <span>Canceled Orders Amount</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-12" bis_skin_checked="1">
        <div class="white_card card_height_100 mb_30" bis_skin_checked="1">
          <div class="white_card_header" bis_skin_checked="1">
            <div class="row align-items-center" bis_skin_checked="1">
              <div class="col-lg-4" bis_skin_checked="1">
                <div class="main-title" bis_skin_checked="1">
                  <h3 class="m-0">Latest Orders</h3>
                </div>
              </div>
              <div class="col-lg-8" bis_skin_checked="1">
                <a href="{{ route('admin.orders.index') }}" wire:navigate class="btn_1 float-end">View All Orders</a>
              </div>
            </div>
          </div>
          <div class="white_card_body table-responsive" bis_skin_checked="1">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="col">No</th>
                  <th class="col">Name</th>
                  <th class="col">Phone</th>
                  <th class="col">Subtotal</th>
                  <th class="col">Total</th>
                  <th class="col">Status</th>
                  <th class="col">Order Date</th>
                  <th class="col">Total Items</th>
                  <th class="col">Delivered On</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($orders as $order)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $order->name }}</td>
                    <td class="text-center">{{ $order->phone }}</td>
                    <td class="text-center">
                      Rp {{ number_format($order->subtotal, 0, ',', '.') }}
                    </td>
                    <td class="text-center">
                      Rp {{ number_format($order->total, 0, ',', '.') }}
                    </td>
                    <td class="text-center">
                      @switch($order->order_status)
                        @case('pending')
                          <span class="badge bg-secondary">Pending</span>
                        @break

                        @case('processed')
                          <span class="badge bg-info text-white">Processed</span>
                        @break

                        @case('shipped')
                          <span class="badge bg-primary">Shipped</span>
                        @break

                        @case('delivered')
                          <span class="badge bg-success">Delivered</span>
                        @break

                        @case('cancelled')
                          <span class="badge bg-danger">Cancelled</span>
                        @break

                        @default
                          <span class="badge bg-warning text-dark">{{ ucfirst($order->order_status) }}</span>
                      @endswitch
                    </td>
                    <td class="text-center">{{ $order->created_at->translatedFormat('d M Y') }}</td>
                    <td class="text-center">{{ $order->orderItems->count() }}</td>
                    <td class="text-center">
                      {{ $order->order_status === 'delivered' && $order->delivered_date ? $order->delivered_date->translatedFormat('d M Y') : '' }}
                    </td>
                    <td class="text-center">
                      <a href="{{ route('admin.orders.detail', $order->id) }}" wire:navigate>
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </a>
                    </td>
                  </tr>
                  @empty
                    <tr>
                      <td colspan="11" class="text-center">No orders found.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
