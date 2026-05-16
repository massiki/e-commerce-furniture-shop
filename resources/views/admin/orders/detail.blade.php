<div class="main_content_iner overly_inner">
  <div class="container-fluid p-0">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Order Details</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Order Details</li>
            </ol>
          </div>
          <div class="page_title_right">
            <div class="page_date_button d-flex align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row ">
              <div class="col-6">
                <h5>Ordered Details</h5>
              </div>
              <div class="col-6">
                <a class="btn btn-sm btn-danger btn-smt float-end" href="{{ route('admin.orders.index') }}"
                  wire:navigate>Back</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-transaction">
                <tbody>
                  <tr>
                    <th>Order No</th>
                    <td>{{ $order->id }}</td>
                    <th>Phone</th>
                    <td>{{ $order->phone }}</td>
                    <th>Total</th>
                    <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                  </tr>
                  <tr>
                    <th>Order Date</th>
                    <td>{{ $order->created_at->translatedFormat('d F Y') }}</td>
                    <th>Delivered Date</th>
                    <td>
                      {{ $order->delivered_date ? $order->delivered_date->translatedFormat('d F Y') : '-' }}
                    </td>
                    <th>Canceled Date</th>
                    <td>{{ $order->cancelled_date ? $order->cancelled_date->translatedFormat('d F Y') : '-' }}</td>
                  </tr>
                  <tr>
                    <th>Order Status</th>
                    <td colspan="5">
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
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <div>
              <h5>Ordered Items</h5>
            </div>
            <div class="table-responsive order-items">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Options</th>
                    <th class="text-center">Return Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orderItems as $item)
                    <tr>
                      <td class="pname img-thumb">
                        <div class="image">
                          <img
                            src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($item->product_image) ? asset('storage/' . $item->product_image) : asset('assets/images/placehold-400x400.svg') }}"
                            alt="{{ $item->product_name ?? '' }}" class="image" style="max-height: 75px;">
                        </div>
                        <div class="name">
                          <a href="{{ route('product.detail', $item->product_slug ?? '') }}" target="_black"
                            class="body-title-2">
                            {{ $item->product_name ?? '' }}
                          </a>
                        </div>
                      </td>
                      <td class="text-center">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                      <td class="text-center">{{ $item->quantity }}</td>
                      <td class="text-center">{{ $item->category_name ?? '-' }}</td>
                      <td class="text-center">{{ $item->brand_name ?? '-' }}</td>
                      <td class="text-center">{{ $item->options ?? '-' }}</td>
                      <td class="text-center">
                        {{ $item->return_status ?? 'No' }}
                      </td>
                      <td class="text-center">
                        <div class="list-icon-function view-icon">
                          <div class="item eye">
                            <i class="fa fa-eye"></i>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  @if (count($orderItems) === 0)
                    <tr>
                      <td colspan="9" class="text-center">No items found in this order.</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="divider"></div>
            <div>
              <!-- Add any additional info if needed -->
            </div>
          </div>
        </div>


        <div class="card mb-3">
          <div class="card-body">
            <h5>Shipping Address</h5>
            <div class="col-md-6">
              <p><strong>Name:</strong> {{ $order->name }}</p>
              <p><strong>Phone:</strong> {{ $order->phone }}</p>
              <p><strong>Province:</strong> {{ $order->province }}</p>
              <p><strong>City:</strong> {{ $order->city }}</p>
              <p><strong>District:</strong> {{ $order->district }}</p>
              <p><strong>Subdistrict:</strong> {{ $order->subdistrict }}</p>
              <p><strong>Postal Code:</strong> {{ $order->postal_code }}</p>
              <p><strong>Full Address:</strong> {{ $order->full_address }}</p>
              <p><strong>Address Note:</strong> {{ $order->address_note }}</p>
            </div>
          </div>
        </div>


        <div class="card mb-3">
          <div class="card-body">
            <h5>Transactions</h5>
            <table class="table table-striped table-bordered table-transaction">
              <tbody>
                <tr>
                  <th>Subtotal</th>
                  <td>Rp {{ number_format($order->subtotal, 0, ',', '.') }}</td>
                  <th>Payment Method</th>
                  <td>{{ strtoupper($order->payment_method) }}</td>
                  <th>Discount</th>
                  <td>Rp {{ number_format($order->discount, 0, ',', '.') }}</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                  <th>Payment Status</th>
                  <td>
                    {{ strtoupper($order->payment_status) }}
                  </td>
                  <th>Status</th>
                  <td>
                    @switch($order->order_status)
                      @case('pending')
                        <span class="badge bg-secondary">Pending</span>
                      @break

                      @case('processed')
                        <span class="badge bg-info text-dark">Processed</span>
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
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="wg-box mt-5">
          <h5>Update Order Status</h5>
          <x-alert-success />
          @if ($order->order_status === 'pending')
            <form wire:submit.prevent="updateStatus">
              <div class="row">
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary tf-button w208">Process</button>
                </div>
              </div>
            </form>
          @elseif($order->order_status === 'processed')
            <form wire:submit.prevent="updateStatus">
              <div class="row">
                <div class="col-md-3">
                  <div class="select">
                    <select id="order_status" name="order_status" class="form-select" wire:model.live="orderStatus">
                      <option value="">Select Option</option>
                      <option value="shipped">Shipped</option>
                      <option value="cancelled">Cancelled</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary tf-button w208">Update Status</button>
                </div>
              </div>
            </form>
          @elseif($order->order_status === 'shipped')
            <form wire:submit.prevent="updateStatus">
              <div class="row">
                <div class="col-md-3">
                  <div class="select">
                    <select id="order_status" name="order_status" class="form-select" wire:model.live="orderStatus">
                      <option value="">Select Option</option>
                      <option value="delivered">Delivered</option>
                      <option value="cancelled">Cancelled</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary tf-button w208">Update Status</button>
                </div>
              </div>
            </form>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
