<?php

namespace App\Livewire\Admin\Products;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    public string $name = '';
    public ?int $category_id = null;
    public ?int $brand_id = null;
    public string $short_description = '';
    public string $information = '';
    public string $description = '';
    public ?TemporaryUploadedFile $image = null;
    public array $images = [];
    public ?string $regular_price = null;
    public ?string $sale_price = null;
    public ?string $quantity = null;
    public string $stock_status;
    public int $featured;
    public string $slug = '';

    public Product $product;
    public string $oldImage;
    public array $oldImages;

    protected function rules()
    {
        return [
            'name'              => ['required', 'string',  'max:255'],
            'category_id'       => ['required', 'exists:categories,id'],
            'brand_id'          => ['required', 'exists:brands,id'],
            'short_description' => ['required', 'string', 'max:255'],
            'information'       => ['required', 'string'],
            'description'       => ['required', 'string'],
            'image'             => ['nullable', 'mimes:jpg,jpeg,png,svg,webp', 'max:1024'],
            'images.*'          => ['mimes:jpg,jpeg,png,svg,webp', 'max:1024'],
            'regular_price'     => ['required', 'numeric', 'min:0'],
            'sale_price'        => ['nullable', 'numeric', 'min:0'],
            'quantity'          => ['required', 'numeric', 'min:0'],
            'stock_status'      => ['required', 'in:instock,outofstock'],
        ];
    }

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->short_description = $product->short_description;
        $this->information = $product->information;
        $this->description = $product->description;
        $this->oldImage = $product->image;
        $this->oldImages = $product->images ?? [];
        $this->regular_price = number_format($product->regular_price, 0, ',', '');
        $this->sale_price = number_format($product->sale_price, 0, ',', '');
        $this->quantity = $product->quantity;
        $this->stock_status = $product->stock_status;
        $this->featured =  (int) $product->featured;
        $this->slug = $product->slug;
    }

    public function update()
    {
        $this->validate();

        // Generate unique slug
        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Product::where('slug', '=', $slug, 'and')->where('id', '!=', $this->product->id)->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        // Store main image
        if ($this->image) {
            if ($this->oldImage && Storage::disk('public')->exists($this->oldImage)) {
                Storage::disk('public')->delete($this->oldImage);
            }
            $imagePath = $this->image->storePublicly('products', 'public');
        } else {
            $imagePath = $this->oldImage;
        }

        // Store each gallery image
        $imagesPath = [];
        if ($this->images) {
            if ($this->oldImages) {
                foreach ($this->oldImages as $img) {
                    Storage::disk('public')->delete($img);
                }
            }

            foreach ($this->images as $img) {
                $imagesPath[] = $img->storePublicly('products/gallery', 'public');
            }
        } else {
            $imagesPath = $this->oldImages;
        }

        // normalisasi: kalau user hapus isi input, Livewire kirim '' (string kosong)
        if ($this->sale_price === '' || $this->sale_price === null) {
            $this->sale_price = null;
        }

        $this->product->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'short_description' => $this->short_description,
            'information' => $this->information,
            'description' => $this->description,
            'image' => $imagePath,
            'images' => $imagesPath,
            'regular_price' => $this->regular_price,
            'sale_price' => $this->sale_price,
            'quantity' => $this->quantity,
            'stock_status' => $this->stock_status,
            'featured' => $this->featured,
        ]);

        session()->flash('success', 'Product updated successfully!');
        $this->redirect(route('admin.products.index'), true);
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.edit', compact('categories', 'brands'));
    }
}
