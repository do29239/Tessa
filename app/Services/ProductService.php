<?php

namespace App\Services;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductService
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getAllBrandsAndCategories()
    {
        return [
            'brands' => Brand::all(),
            'categories' => Category::all()
        ];
    }

    public function createProduct($data, $imageName)
    {

        $product = Product::query()->make($data);

        if ($imageName) {
            $image = new Image();
            $image->name = $imageName; // Assume imageName is the .webp filename provided by middleware

            DB::beginTransaction();
            try {
                $product->save();
                $product->image()->save($image);
                DB::commit();
                return true;
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } else {
            throw new \Exception("No image provided");
        }
    }

    public function updateProduct(Product $product, $data, $imageName)
    {
        DB::beginTransaction();
        try {
            $product->update($data);

            if ($imageName) {
                $image = $product->image ?: new Image();
                $image->name = $imageName; // Assume imageName is the .webp filename provided by middleware
                $product->image()->save($image);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
    }
}

