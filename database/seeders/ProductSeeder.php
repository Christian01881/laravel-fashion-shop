<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('dataseeder.products');
        foreach($products as $product){
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            $newProduct->price = $product['price'];
            $newProduct->pruduct_link = $product['product_link'];
            $newProduct->description = $product['description'];
            $newProduct->texture_id = $product['texture_id'];
            $newProduct->category_id = $product['category_id'];
            $newProduct->brand_id = $product['brand_id'];
            $newProduct->save();
        }
    }
}
