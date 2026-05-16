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
                {{ $orders->links(data: ['scrollTo' => false]) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
