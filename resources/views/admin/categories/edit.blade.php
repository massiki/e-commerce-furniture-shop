<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Category</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('admin.categories.index') }}" wire:navigate>Categories</a>
              </li>
              <li class="breadcrumb-item active">Edit Category</li>
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
            <div class="box_header m-0">
              <div class="main-title">
                <h3 class="m-0">Edit Category</h3>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="card-body">
              <form data-parsley-validate>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="" required
                      data-parsley-trigger="change">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="" required
                      data-parsley-trigger="change">
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Image</label>
                  <input type="file" class="form-control" id="image" accept="image/*"
                    onchange="previewImage(event)" required data-parsley-trigger="change">
                </div>
                <div class="mb-3">
                  <img id="image-preview" src="#" alt="Image Preview"
                    style="display: none; max-width: 120px; height: auto;">
                </div>
                <div class="mb-3">
                  <button type="button" class="btn btn-danger btn-sm" id="remove-image" style="display: none;"
                    onclick="removeImage()">Remove Image</button>
                  <p id="message" style="color: green;"></p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
