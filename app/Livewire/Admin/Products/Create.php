<?php

namespace App\Livewire\Admin\Products;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Create extends Component
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
    public string $stock_status = 'instock';
    public bool $featured = true;
    public string $slug = '';

    protected function rules()
    {
        return [
            'name'              => ['required', 'string',  'max:255'],
            'category_id'       => ['required', 'exists:categories,id'],
            'brand_id'          => ['required', 'exists:brands,id'],
            'short_description' => ['required', 'string', 'max:255'],
            'information'       => ['required', 'string'],
            'description'       => ['required', 'string'],
            'image'             => ['required', 'mimes:jpg,jpeg,png,svg,webp', 'max:1024'],
            'images.*'          => ['mimes:jpg,jpeg,png,svg,webp', 'max:1024'],
            'regular_price'     => ['required', 'numeric', 'min:0'],
            'sale_price'        => ['nullable', 'numeric', 'min:0'],
            'quantity'          => ['required', 'numeric', 'min:0'],
            'stock_status'      => ['required', 'in:instock,outofstock'],
        ];
    }

    public function store()
    {
        $this->validate();

        // Generate unique slug
        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Product::where('slug', '=', $slug, 'and')->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        // Store main image
        $imagePath = $this->image->storePublicly('products', 'public');

        // Store each gallery image
        $imagesPath = [];
        foreach ($this->images as $img) {
            $imagesPath[] = $img->storePublicly('products/gallery', 'public');
        }

        Product::create([
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

        session()->flash('success', 'Product created successfully!');
        $this->redirect(route('admin.products.index'), true);
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories', 'brands'));
    }
}
