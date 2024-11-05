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
            $table->string('name_product', 50)->nullable()->default('producto');
            $table->foreignId('brand_id');
           // $table->string('brand', 100)->nullable()->default('marca');
            $table->integer('stock')->unsigned()->nullable()->default(12);
            $table->decimal('unit_price', 5, 2)->nullable()->default(123.45);
            $table->string('image', 100)->nullable()->default('imagen');

            $table->timestamps();
             $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')
                 ->onUpdate('cascade');
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

