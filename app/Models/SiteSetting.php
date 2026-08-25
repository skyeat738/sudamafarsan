<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['about_us', 'brand_whatsapp', 'brand_phone', 'brand_email', 'brand_address'];

    public static function current(): self
    {
        return static::firstOrCreate(['id' => 1], [
            'about_us' => "Sudama Farsan brings the authentic taste of traditional Indian namkeen to today's families. Our focus is simple — quality ingredients, traditional flavours, hygienic preparation and packaging that keeps every bite fresh.",
            'brand_whatsapp' => '919999999999',
            'brand_phone' => '+919999999999',
            'brand_email' => 'hello@sudamafarsan.com',
            'brand_address' => "Guru Krupa House, Sardar Patel Chowk, Pariwardha, Taluka Shahada, District Nandurbar, Maharashtra, India",
        ]);
    }
}
