<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

class loadProducts extends Component
{
    public $amount = 9;
    public $selectedCategory = null;
    public $selectedBrand = null;
    public $noMoreProducts = null;
    public $searchTerm = null;

    protected $listeners = ['categorySelected', 'brandSelected', 'searchTerm'];

    public function searchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;

    }

    public function render()
    {
        $products = Product::query()
            ->when($this->searchTerm, function ($query) {
                return $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
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
            ->when($this->searchTerm, function ($query) {
                return $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
            ->when($this->selectedCategory, function ($query) {
                return $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                return $query->where('brand_id', $this->selectedBrand);
            });

            $productsCount = $productsQuery->count();
        if ($this->amount <= $productsCount) {
            $this->amount += 9;
            // in the below logic, the no more product message is displayed before the load more button is clicked
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