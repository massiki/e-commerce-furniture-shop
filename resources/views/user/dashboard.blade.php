<div>
  <!-- Page Banner Section Start -->
  @livewire('components.user-banner', ['title' => 'My Account'])
  <!-- Page Banner Section End -->

  <!-- My Account Section Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-4">
          <!-- My Account Menu Start -->
          <div class="my-account-menu">
            <ul class="nav account-menu-list flex-column">
              <li>
                <a class="active" data-bs-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i>
                  Dashboard</a>
              </li>
              <li>
                <a data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i>
                  Order</a>
              </li>
              <li>
                <a data-bs-toggle="pill" href="#pills-download"><i class="fa fa-cloud-download"></i>
                  Download</a>
              </li>
              <li>
                <a data-bs-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i>
                  Payment Method</a>
              </li>
              <li>
                <a data-bs-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i>
                  Address</a>
              </li>
              <li>
                <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account
                  Details</a>
              </li>
              <li>
                <a href="#" wire:click="logout"><i class="fa fa-sign-out"></i>
                  <span wire:loading.remove>Logout</span>
                  <span wire:loading>Logout...</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- My Account Menu End -->
        </div>
        <div class="col-xl-9 col-md-8">
          <!-- Tab content start -->
          <div class="tab-content my-account-tab">
            <div class="tab-pane fade show active" id="pills-dashboard">
              <div class="my-account-dashboard account-wrapper">
                <h4 class="account-title">Dashboard</h4>
                <x-alert-success />
                <div class="welcome-dashboard">
                  <p>
                    Hello,
                    <strong>{{ auth()->user()->name }}</strong> (If
                    Not <strong>Tuntuni !</strong>
                    <a href="login-2.html">Logout</a> )
                  </p>
                </div>
                <p>
                  From your account dashboard. you can
                  easily check & view your recent orders,
                  manage your shipping and billing
                  addresses and edit your password and
                  account details.
                </p>
              </div>
            </div>

            <div class="tab-pane fade" id="pills-order">
              <div class="my-account-order account-wrapper">
                <h4 class="account-title">Orders</h4>
                <div class="account-table text-center table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="no">No</th>
                        <th class="name">Name</th>
                        <th class="date">Date</th>
                        <th class="status">
                          Status
                        </th>
                        <th class="total">Total</th>
                        <th class="action">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($orders as $order)
                        <tr>
                          <td>{{ ($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration }}</td>
                          <td>{{ $order->name }}</td>
                          <td>{{ $order->created_at->translatedFormat('d M Y') }}</td>
                          <td>
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

                          <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                          <td>
                            <a href="{{ route('user.orders.detail', $order) }}" wire:navigate>View</a>
                          </td>
                        </tr>
                        @empty
                          <tr>
                            <td colspan="6" class="text-center">No orders found.</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                    {{ $orders->links(data: ['scrollTo' => false]) }}
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-download">
                <div class="my-account-download account-wrapper">
                  <h4 class="account-title">Download</h4>
                  <div class="account-table text-center table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="name">
                            Product
                          </th>
                          <th class="date">Date</th>
                          <th class="status">
                            Expire
                          </th>
                          <th class="action">
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mostarizing Oil</td>
                          <td>Aug 22, 2020</td>
                          <td>Yes</td>
                          <td>
                            <a href="#">Download File</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Katopeno Altuni</td>
                          <td>July 22, 2020</td>
                          <td>Never</td>
                          <td>
                            <a href="#">Download File</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-payment">
                <div class="my-account-payment account-wrapper">
                  <h4 class="account-title">
                    Payment Method
                  </h4>
                  <p>
                    You Can't Saved Your Payment Method yet.
                  </p>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-address">
                <div class="my-account-address account-wrapper">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="account-address">
                        <h4 class="account-title">
                          Billing address
                        </h4>
                        <h6 class="name">
                          Alex Tuntuni
                        </h6>
                        <p>
                          1355 Market St, Suite 900
                          <br />
                          San Francisco, CA 94103
                        </p>
                        <p>Mobile: (123) 456-7890</p>
                        <a class="btn btn-primary btn-hover-dark" href="#"><i class="fa fa-edit"></i>
                          Edit Address</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="account-address">
                        <h4 class="account-title">
                          Shipping address
                        </h4>
                        <h6 class="name">
                          Alex Tuntuni
                        </h6>
                        <p>
                          1355 Market St, Suite 900
                          <br />
                          San Francisco, CA 94103
                        </p>
                        <p>Mobile: (123) 456-7890</p>
                        <a class="btn btn-primary btn-hover-dark" href="#"><i class="fa fa-edit"></i>
                          Edit Address</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-account">
                <div class="my-account-details account-wrapper">
                  <h4 class="account-title">
                    Account Details
                  </h4>

                  <div class="account-details">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="single-form">
                          <input type="text" placeholder="First Name" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form">
                          <input type="text" placeholder="Last Name" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form">
                          <input type="text" placeholder="Display Name" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form">
                          <input type="text" placeholder="Email address" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form">
                          <h5 class="title">
                            Password change
                          </h5>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="single-form">
                          <input type="password" placeholder="Current Password" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form">
                          <input type="password" placeholder="New Password" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form">
                          <input type="password" placeholder="Confirm Password" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="single-form">
                          <button class="btn btn-primary btn-hover-dark">
                            Save Change
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tab content End -->
          </div>
        </div>
      </div>
    </div>
    <!-- My Account Section End -->
  </div>
