<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Brands</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a></li>
              <li class="breadcrumb-item active">Brands</li>
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
                    <h3 class="m-0">Brands</h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.brands.create') }}" class="btn btn-sm btn-outline-primary float-end"
                  style="display: flex; align-items: center; vertical-align: middle;" wire:navigate>
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
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Total Products</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($brands as $brand)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid"
                              src="{{ \Illuminate\Support\Facades\Storage::disk('public')->exists($brand->image) ? asset('storage/' . $brand->image) : asset('assets/images/placehold-400x400.svg') }}"
                              alt="">
                          </div>
                          <span class="f_s_12 f_w_600 color_text_5">{{ $brand->name }}</span>
                        </div>
                      </td>
                      <td>{{ $brand->slug }}</td>
                      <td>{{ $brand->products->count() }}</td>
                      <td>
                        <div class="list-icon-function" bis_skin_checked="1">
                          <a href="{{ route('admin.brands.edit', $brand->id) }}" wire:navigate>
                            <div class="item edit" bis_skin_checked="1">
                              <i class="fa fa-edit"></i>
                            </div>
                          </a>
                          <form wire:submit="delete({{ $brand->id }})"
                            wire:confirm="Are you sure you want to delete this data?">
                            <button type="submit" class="btn item text-danger delete" bis_skin_checked="1">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <x-admin-empty-data totalColspan="5" title="No brands found"
                      subtitle="You haven not added any brands yet." />
                  @endforelse
                </tbody>
              </table>
              {{ $brands->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
