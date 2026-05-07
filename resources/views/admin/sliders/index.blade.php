<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Slider</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Slider</li>
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
                    <h3 class="m-0">Slider</h3>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <a href="{{ route('admin.sliders.create') }}" wire:navigate
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
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Tagline</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($sliders as $slider)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" height="52">
                      </td>
                      <td>{{ $slider->title }}</td>
                      <td>{{ $slider->tagline }}</td>
                      <td>{{ $slider->link }}</td>
                      <td>
                        <div class="list-icon-function">
                          <a href="{{ route('admin.sliders.edit', $slider->id) }}" wire:navigate>
                            <div class="item edit">
                              <i class="fa fa-edit"></i>
                            </div>
                          </a>
                          <form action="#" wire:submit="delete({{ $slider->id }})" style="display:inline;">
                            <button type="submit" class="item text-danger delete"
                              style="background:none;border:none;padding:0;">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <x-admin-empty-data totalColspan="6" title="No sliders found"
                      subtitle="You haven not added any sliders yet." />
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
