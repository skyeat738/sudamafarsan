<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Sev', 'name_marathi' => 'शेव'],
            ['name' => 'Bhujia & Gathiya', 'name_marathi' => 'भुजिया व गाठिया'],
            ['name' => 'Mixtures', 'name_marathi' => 'मिक्सचर'],
            ['name' => 'Chivda', 'name_marathi' => 'चिवडा'],
            ['name' => 'Peanuts', 'name_marathi' => 'शेंगदाणे'],
            ['name' => 'Traditional Farsan', 'name_marathi' => 'पारंपरिक फरसाण'],
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['slug' => Str::slug($cat['name'])],
                $cat + ['slug' => Str::slug($cat['name'])]
            );
        }

        $products = [
            ['name' => 'Tikha Sev', 'name_marathi' => 'तिखट शेव', 'category' => 'Sev', 'price' => 120],
            ['name' => 'Nylon Sev', 'name_marathi' => 'नायलॉन शेव', 'category' => 'Sev', 'price' => 110],
            ['name' => 'Bhujia', 'name_marathi' => 'भुजिया', 'category' => 'Bhujia & Gathiya', 'price' => 130],
            ['name' => 'Gathiya', 'name_marathi' => 'गाठिया', 'category' => 'Bhujia & Gathiya', 'price' => 125],
            ['name' => 'Ratlam Sev', 'name_marathi' => 'रतलाम शेव', 'category' => 'Sev', 'price' => 140],
            ['name' => 'Masala Peanuts', 'name_marathi' => 'मसाला शेंगदाणे', 'category' => 'Peanuts', 'price' => 115],
            ['name' => 'Poha Chivda', 'name_marathi' => 'पोहे चिवडा', 'category' => 'Chivda', 'price' => 105],
            ['name' => 'Dalmoth', 'name_marathi' => 'दालमोठ', 'category' => 'Mixtures', 'price' => 135],
            ['name' => 'Mix Farsan', 'name_marathi' => 'मिक्स फरसाण', 'category' => 'Traditional Farsan', 'price' => 120],
            ['name' => 'Cornflakes Mixture', 'name_marathi' => 'कॉर्नफ्लेक्स मिक्सचर', 'category' => 'Mixtures', 'price' => 130],
        ];

        foreach ($products as $index => $p) {
            $category = Category::where('name', $p['category'])->first();

            Product::firstOrCreate(
                ['slug' => Str::slug($p['name'])],
                [
                    'category_id' => $category?->id,
                    'name' => $p['name'],
                    'name_marathi' => $p['name_marathi'],
                    'slug' => Str::slug($p['name']),
                    'description' => "Authentic {$p['name']}, prepared with traditional recipes and quality ingredients.",
                    'pack_size' => '500g',
                    'price' => $p['price'],
                    'mrp' => $p['price'] + 20,
                    'rating' => 4.5,
                    'is_featured' => $index < 8,
                    'stock_status' => 'in_stock',
                ]
            );
        }
    }
}
