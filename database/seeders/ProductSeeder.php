<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you have already seeded the Brand and Category tables
        Product::factory()->count(150)->create()->each(function ($product) {
            // Simulate the image storage path as it would be after uploading
            // Example: 'storage/images/product_1234567890.jpg'
            $imageName = '1706107605_65b122d5eeb9b'. '.webp';

            // Create and associate an image with the product
            $image = new Image(['name' => $imageName]);
            $product->image()->save($image);
        });
    }
}
