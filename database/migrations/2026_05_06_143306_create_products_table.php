<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->string('short_description');
            $table->string('information');
            $table->text('description');
            $table->string('image');
            $table->json('images')->nullable();
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->unsignedInteger('quantity')->default(10);
            $table->enum('stock_status', ['instock', 'outofstock']);
            $table->boolean('featured')->default(false);

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->nullOnDelete();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
