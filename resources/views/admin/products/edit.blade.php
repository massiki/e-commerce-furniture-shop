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
              <form wire:submit="update">
                <x-admin-input-text field="name" :isCol="false" />

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="category">Category</label>
                    <select class="form-select" id="category" wire:model="category_id">
                      <option value="">Select Category</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                    <x-alert-error field="category_id" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="brand">Brand</label>
                    <select class="form-select" id="brand" wire:model="brand_id">
                      <option value="">Select Brand</option>
                      @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endforeach
                    </select>
                    <x-alert-error field="brand_id" />
                  </div>
                </div>

                <x-admin-input-textarea field="short_description" />

                <x-admin-input-textarea field="information" />

                <x-admin-input-textarea field="description" />

                <div class="mb-3">
                  <label class="form-label" for="image">Image</label>
                  <input type="file" class="form-control" id="image" accept="image/*" wire:model="image">
                  <x-alert-error field="image" />
                </div>
                <div class="mb-3">
                  <img id="image-preview" src="{{ $image ? $image->temporaryUrl() : asset('storage/' . $oldImage) }}"
                    alt="Image Preview" style=" max-width: 150px; height: auto;">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="gallery-images">Upload Gallery Images</label>
                  <input type="file" class="form-control" id="gallery-images" accept="image/*" wire:model="images"
                    multiple>
                  <x-alert-error field="images" />
                </div>
                @if ($images && count($images) > 0)
                  <div class="mb-3 d-flex flex-wrap gap-2">
                    @foreach ($images as $img)
                      <img src="{{ $img->temporaryUrl() }}" alt="Gallery Image Preview"
                        style="max-width: 150px; height: auto;">
                    @endforeach
                  </div>
                @elseif ($oldImages && count($oldImages) > 0)
                  <div class="mb-3 d-flex flex-wrap gap-2">
                    @foreach ($oldImages as $img)
                      <img src="{{ asset('storage/' . $img) }}" alt="Gallery Image Preview"
                        style="max-width: 150px; height: auto;">
                    @endforeach
                  </div>
                @endif

                <div class="row mb-3">
                  <x-admin-input-text field="regular_price" :isCol="true" />
                  <x-admin-input-text field="sale_price" :isCol="true" />
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="stock_status">Stock</label>
                    <select class="form-select" id="stock_status" wire:model="stock_status">
                      <option value="instock">In Stock</option>
                      <option value="outofstock">Out of Stock</option>
                    </select>
                    <x-alert-error field="stock_status" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="featured">Featured</label>
                    <select class="form-select" id="featured" wire:model.live="featured">
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                    <x-alert-error field="featured" />
                  </div>
                </div>
                <div class="row mb-3">
                  <x-admin-input-text field="quantity" :isCol="true" />
                </div>
                <x-admin-button-submit />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
