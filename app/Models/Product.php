<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'name_marathi',
        'slug',
        'description',
        'pack_size',
        'price',
        'mrp',
        'rating',
        'image_path',
        'is_featured',
        'stock_status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
        'mrp' => 'decimal:2',
        'rating' => 'decimal:1',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function whatsappOrderUrl(): string
    {
        $number = \App\Models\SiteSetting::current()->brand_whatsapp;
        $message = "Hello Sudama Farsan, I want to order:\nProduct: {$this->name}\nPack: {$this->pack_size}\nQuantity: 1";

        return 'https://wa.me/'.$number.'?text='.rawurlencode($message);
    }
}
