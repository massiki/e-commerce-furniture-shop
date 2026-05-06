<div class="main_content_iner overly_inner ">
  <div class="container-fluid p-0 ">
    <!-- page title  -->
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
          <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Product</h3>
            <ol class="breadcrumb page_bradcam mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}" wire:navigate>Dashboard</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('admin.products.index') }}" wire:navigate>Products</a>
              </li>
              <li class="breadcrumb-item active">Edit Product</li>
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
                <h3 class="m-0">Edit Product</h3>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="card-body">
              <form data-parsley-validate>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="category">Category</label>
                    <select class="form-select" id="category" required>
                      <option value="">Select Category</option>
                      <option value="category1">Category 1</option>
                      <option value="category2">Category 2</option>
                      <option value="category3">Category 3</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="brand">Brand</label>
                    <select class="form-select" id="brand" required>
                      <option value="">Select Brand</option>
                      <option value="brand1">Brand 1</option>
                      <option value="brand2">Brand 2</option>
                      <option value="brand3">Brand 3</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="short-description">Short Description</label>
                  <input type="text" class="form-control" id="short-description" placeholder="" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="description">Description</label>
                  <textarea class="form-control" id="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Upload Image</label>
                  <input type="file" class="form-control" id="image" accept="image/*"
                    onchange="previewImage(event)" required>
                  <img id="image-preview" src="#" alt="Image Preview"
                    style="display:none; width:130px; margin-top:10px; max-width:100%;" />
                  <button type="button" id="remove-image" class="btn btn-sm btn-danger"
                    style="display:none; margin-top:5px;" onclick="removeImage()">Remove</button>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="gallery-image">Upload Gallery Images</label>
                  <input type="file" class="form-control" id="gallery-image" accept="image/*" multiple
                    onchange="previewGalleryImages(event)">
                  <div id="gallery-preview" style="margin-top:10px;"></div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="regular-price">Regular Price</label>
                    <input type="text" class="form-control" id="regular-price" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="sale-price">Sale Price</label>
                    <input type="text" class="form-control" id="sale-price" placeholder="">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" placeholder="" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="stock">Stock</label>
                    <select class="form-select" id="stock" required>
                      <option value="in-stock">In Stock</option>
                      <option value="out-of-stock">Out of Stock</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="featured">Featured</label>
                    <select class="form-select" id="featured" required>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
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
