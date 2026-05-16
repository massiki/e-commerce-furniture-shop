<div>
  @livewire('components.user-banner', ['title' => 'Order Details'])

  <div class="section section-padding">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-4">
          <div class="my-account-menu">
            <ul class="nav account-menu-list flex-column">
              <li>
                <a href="{{ route('user.dashboard') }}" wire:navigate><i class="fa fa-tachometer"></i>
                  Dashboard</a>
              </li>
              <li>
                <a class="active" href="{{ route('user.dashboard') }}#pills-order" wire:navigate><i
                    class="fa fa-shopping-cart"></i>
                  Order</a>
              </li>
              <li>
                <a href="{{ route('user.dashboard') }}#pills-download" wire:navigate><i
                    class="fa fa-cloud-download"></i>
                  Download</a>
              </li>
              <li>
                <a href="{{ route('user.dashboard') }}#pills-payment" wire:navigate><i class="fa fa-credit-card"></i>
                  Payment Method</a>
              </li>
              <li>
                <a href="{{ route('user.dashboard') }}#pills-address" wire:navigate><i class="fa fa-map-marker"></i>
                  Address</a>
              </li>
              <li>
                <a href="{{ route('user.dashboard') }}#pills-account" wire:navigate><i class="fa fa-user"></i>
                  Account
                  Details</a>
              </li>
              <li>
                <a href="#" wire:click.prevent="logout"><i class="fa fa-sign-out"></i>
                  <span wire:loading.remove wire:target="logout">Logout</span>
                  <span wire:loading wire:target="logout">Logout...</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-xl-9 col-md-8">
          <div class="my-account-tab">
            <nav aria-label="breadcrumb" class="mb-3">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}" wire:navigate>Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}#pills-order" wire:navigate>Order</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
              </ol>
            </nav>

            {{-- Order Details --}}
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body p-4">
                <div class="row align-items-center mb-3">
                  <div class="col">
                    <h4 class="account-title mb-0">Order Details</h4>
                  </div>
                  <div class="col-auto">
                    <a href="{{ route('user.dashboard') }}#pills-order" wire:navigate class="btn btn-danger">back</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped mb-0">
                    <tbody>
                      <tr>
                        <th class="text-start" style="width: 12%">Order No</th>
                        <td>{{ $order->id }}</td>
                        <th class="text-start" style="width: 12%">Phone</th>
                        <td>{{ $order->phone }}</td>
                        <th class="text-start" style="width: 12%">Total</th>
                        <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                      </tr>
                      <tr>
                        <th>Order Date</th>
                        <td>{{ $order->created_at->translatedFormat('d F Y') }}</td>
                        <th>Delivered Order</th>
                        <td>
                          {{ $order->delivered_date ? $order->delivered_date->translatedFormat('d F Y') : '-' }}
                        </td>
                        <th>Cancelled Order</th>
                        <td>
                          {{ $order->cancelled_date ? $order->cancelled_date->translatedFormat('d F Y') : '-' }}
                        </td>
                      </tr>
                      <tr>
                        <th>Order Status </th>
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

            {{-- Order Items --}}
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body p-4">
                <h4 class="account-title mb-3">Order Items</h4>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped mb-0 align-middle">
                    <thead class="table-light">
                      <tr class="text-center">
                        <th class="text-start">Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Return</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($orderItems as $item)
                        <tr>
                          <td>
                            <div class="d-flex flex-wrap align-items-center gap-3 text-start" style="min-width: 0;">
                              <img
                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($item->product_image) ? asset('storage/' . $item->product_image) : asset('assets/images/placehold-400x400.svg') }}"
                                alt="{{ $item->product_name ?? '' }}" class="rounded-circle flex-shrink-0"
                                style="width: 56px; height: 56px; object-fit: cover;">
                              <div style="min-width: 0;">
                                <a href="{{ route('product.detail', $item->product_slug ?? '') }}" wire:navigate
                                  class="fw-semibold text-dark text-decoration-none"
                                  style="word-break: break-word; white-space: normal;">
                                  {{ $item->product_name ?? '-' }}
                                </a>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                          <td class="text-center">{{ $item->quantity }}</td>
                          <td class="text-center">{{ $item->category_name ?? '-' }}</td>
                          <td class="text-center">{{ $item->brand_name ?? '-' }}</td>
                          <td class="text-center">{{ $item->return_status ?? 'No' }}</td>
                          <td class="text-center">
                            <a href="{{ route('product.detail', $item->product_slug ?? '') }}" wire:navigate
                              class="btn btn-sm p-0" title="View product">
                              <i class="fa fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="8" class="text-center py-4">There are no items in this order.</td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            {{-- Shipping Address --}}
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body p-4">
                <h4 class="account-title mb-3">Shipping Address</h4>
                <div class="row">
                  <div class="col-lg-8">
                    <p class="mb-2"><strong>Name:</strong> {{ $order->name }}</p>
                    <p class="mb-2"><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p class="mb-2"><strong>Province:</strong> {{ $order->province }}</p>
                    <p class="mb-2"><strong>City / Regency:</strong> {{ $order->city }}</p>
                    <p class="mb-2"><strong>District:</strong> {{ $order->district }}</p>
                    <p class="mb-2"><strong>Subdistrict / Village:</strong> {{ $order->subdistrict }}</p>
                    <p class="mb-2"><strong>Postal Code:</strong> {{ $order->postal_code }}</p>
                    <p class="mb-2"><strong>Full Address:</strong> {{ $order->full_address }}</p>
                    <p class="mb-0"><strong>Address Note:</strong> {{ $order->address_note ?? '-' }}</p>
                  </div>
                </div>
              </div>
            </div>

            {{-- Transaction --}}
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body p-4">
                <h4 class="account-title mb-3">Transaction</h4>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped mb-0">
                    <tbody>
                      <tr>
                        <th class="text-start">Subtotal</th>
                        <td>Rp {{ number_format($order->subtotal, 0, ',', '.') }}</td>
                        <th class="text-start">Payment Method</th>
                        <td>{{ strtoupper($order->payment_method) }}</td>
                        <th class="text-start">Discount</th>
                        <td>Rp {{ number_format($order->discount, 0, ',', '.') }}</td>
                      </tr>
                      <tr>
                        <th>Total</th>
                        <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                        <th>Payment Status</th>
                        <td>{{ strtoupper($order->payment_status) }}</td>
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
            </div>
            <x-alert-success />
            @if (in_array($order->order_status, ['pending', 'processed']))
              <button class="btn btn-danger btn-sm" wire:click.prevent="cancelOrder"
                wire:confirm="Are you sure to canncel this order?">
                Cancel Order
              </button>
            @endif
            @if ($order->order_status === 'shipped')
              <button class="btn btn-success btn-sm" wire:click.prevent="confirmReceived"
                wire:confirm="Have you received the product?">
                Confirm Received
              </button>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
