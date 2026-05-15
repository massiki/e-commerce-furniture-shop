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
            <x-alert-success />
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
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Featured</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($products as $product)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <img
                          src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('assets/images/placehold-400x400.svg') }}"
                          alt="" height="52">
                        <p class="d-inline-block align-middle mb-0">
                          <a href="#" class="d-inline-block align-middle mb-0 f_s_16 f_w_600 color_theme2">
                            {{ $product->name }}
                          </a>
                          <br>
                          {{-- <span class="text-muted font_s_13">size-08 (Model 2025)</span> --}}
                        </p>
                      </td>
                      <td>Rp {{ number_format($product->regular_price, 0, ',', '.') }}</td>
                      <td>{{ $product->sale_price ? 'Rp ' . number_format($product->sale_price, 0, ',', '.') : '-' }}
                      </td>
                      <td>{{ $product->category ? $product->category->name : '-' }}</td>
                      <td>{{ $product->brand ? $product->brand->name : '-' }}</td>
                      <td>
                        @if ($product->featured)
                          <i class="fa fa-star text-warning" title="Featured"></i>
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if ($product->stock_status === 'instock')
                          <span>In Stock</span>
                        @else
                          <span class="badge bg-danger">Out of Stock</span>
                        @endif
                      </td>
                      <td>
                        @if ($product->quantity <= 0)
                          <span class="badge bg-danger">{{ $product->quantity }}</span>
                        @elseif ($product->quantity <= 10)
                          <span class="badge bg-warning">{{ $product->quantity }}</span>
                        @else
                          <span class="badge bg-success">{{ $product->quantity }}</span>
                        @endif
                      </td>
                      <td>
                        <div class="list-icon-function">
                          <a href="#" target="_blank">
                            <div class="item eye">
                              <i class="fa fa-eye"></i>
                            </div>
                          </a>
                          <a href="{{ route('admin.products.edit', $product->id) }}" wire:navigate>
                            <div class="item edit">
                              <i class="fa fa-edit"></i>
                            </div>
                          </a>
                          <form wire:submit="delete({{ $product->id }})"
                            wire:confirm="Are you sure you want to delete this data?">
                            <button class="btn item text-danger delete p-0">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <x-admin-empty-data totalColspan="10" title="No products found"
                      subtitle="You haven not added any products yet." />
                  @endforelse
                </tbody>
              </table>
              {{ $products->links(data: ['scrollTo' => false]) }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
