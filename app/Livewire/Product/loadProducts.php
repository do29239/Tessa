<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class loadProducts extends Component
{
    public $amount = 9;
    public $selectedCategory = null;
    public $selectedBrand = null;
    public $noMoreProducts = null;
    protected $listeners = ['categorySelected', 'brandSelected'];


    public function render()
    {

        $products = Product::query()
            ->when($this->selectedCategory, function ($query) {
                return $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                return $query->where('brand_id', $this->selectedBrand);
            })
            ->take($this->amount)
            ->get();

        return view('livewire.load-products', compact('products'));
    }

    public function load()
    {
        $productsQuery = Product::query()
            ->when($this->selectedCategory, function ($query) {
                return $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                return $query->where('brand_id', $this->selectedBrand);
            });

        $productsCount = $productsQuery->count();
        if ($this->amount <= $productsCount) {
            $this->amount += 9;
            // in the below logic, the no more product message is displayed instead of the load more button
            if($productsCount - $this->amount<= 9 ){
                $this->noMoreProducts = true;
            }
        } else {
            $this->noMoreProducts = true; // all products are loaded
        }
    }

    public function resetNoMoreProducts()
    {
        $this->noMoreProducts = null;
    }
    public function resetFilters()
    {
        $this->selectedCategory = null;
        $this->selectedBrand = null;
        $this->amount = 9;
    }

    public function categorySelected($categoryId)
    {
        $this->resetPage();
        $this->resetFilters();
        $this->resetNoMoreProducts();
        $this->selectedCategory = $categoryId;


    }

    public function brandSelected($brandId)
    {
        $this->resetPage();
        $this->resetFilters();
        $this->resetNoMoreProducts();
        $this->selectedBrand = $brandId;


    }

    private function resetPage()
    {
        $this->amount = 9;
    }
}
