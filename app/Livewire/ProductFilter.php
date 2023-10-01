<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use Livewire\Attributes\Layout;

class ProductFilter extends Component
{
    public $selectedCategory = null;
    public $selectedBrand = null;

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('livewire.product-filter', compact('categories', 'brands'));
    }

    public function selectCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->dispatch('categorySelected', $this->selectedCategory); // Changed from emit
    }

    public function selectBrand($brandId)
    {
        $this->selectedBrand = $brandId;
        $this->dispatch('brandSelected', $this->selectedBrand); // Changed from emit
    }
}
