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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table->decimal('subtotal', 12);
            $table->decimal('discount', 12)->default(0);
            $table->decimal('shipping_cost', 12)->default(0);
            $table->decimal('total', 12);
            $table->string('name');
            $table->string('phone');
            $table->string('province');       // Provinsi
            $table->string('city');           // Kota / Kabupaten
            $table->string('district');       // Kecamatan
            $table->string('subdistrict');    // Kelurahan / Desa
            $table->string('postal_code');    // Kode Pos
            $table->text('full_address');     // Jalan lengkap, nomor rumah
            $table->string('address_note')
                ->nullable();                 // Contoh: rumah pagar hitam dekat Indomaret
            $table->enum('payment_method', [
                'cod',
                'bank_transfer',
                'e_wallet',
            ]);
            $table->enum('payment_status', [
                'unpaid',
                'paid',
                'failed',
            ])->default('unpaid');
            $table->enum('order_status', [
                'pending',
                'processed',
                'shipped',
                'delivered',
                'cancelled',
            ])->default('pending');
            $table->date('delivered_date')->nullable();
            $table->date('cancelled_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
