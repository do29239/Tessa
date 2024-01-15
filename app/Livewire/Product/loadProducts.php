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
    public $search = '';
    protected $listeners = ['categorySelected', 'brandSelected', 'searchPerformed'];

    public function render()
    {
        $this->search = session('searchTerm', '');
        $products = $this->queryProducts();
        session()->forget('searchTerm');

        return view('livewire.load-products', compact('products'));
    }

    public function load()
    {
        $productsCount = $this->queryProducts()->count();

        if ($this->amount <= $productsCount) {
            $this->amount += 9;
        } else {
            $this->noMoreProducts = true; // all products are loaded
        }
    }

    private function queryProducts()
    {
        $query = Product::query();

        // Optimize search by avoiding splitting into multiple terms
        if (!empty($this->search)) {
            $searchTerm = '%' . $this->search . '%';
            $query->where('name', 'like', $searchTerm)
                ->orWhereHas('category', function ($query) use ($searchTerm) {
                    $query->where('name', 'like', $searchTerm);
                })
                ->orWhereHas('brand', function ($query) use ($searchTerm) {
                    $query->where('name', 'like', $searchTerm);
                });
        }

        // Apply filters for category and brand if they are set
        if (!empty($this->selectedCategory)) {
            $query->where('category_id', $this->selectedCategory);
        }

        if (!empty($this->selectedBrand)) {
            $query->where('brand_id', $this->selectedBrand);
        }

        // Implement pagination and limit the number of products loaded
        return $query->take($this->amount)->get();
    }

    public function resetNoMoreProducts()
    {
        $this->noMoreProducts = null;
    }
    public function resetFilters()
    {
        $this->search = null;
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
