<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('name_marathi')->nullable();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('pack_size')->default('500g');
            $table->decimal('price', 8, 2);
            $table->decimal('mrp', 8, 2)->nullable();
            $table->decimal('rating', 2, 1)->default(4.5);
            $table->string('image_path')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->enum('stock_status', ['in_stock', 'low_stock', 'out_of_stock'])->default('in_stock');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
