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
        if (session()->has('searchTerm')) {
            $this->search = session('searchTerm');
            session()->forget('searchTerm');
        }

        $products = $this->queryProducts();

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
        $searchTerms = explode(' ', $this->search);

        return Product::query()
            ->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where(function ($query) use ($term) {
                        $query->where('name', 'like', '%' . $term . '%')
                            ->orWhereHas('category', function ($query) use ($term) {
                                $query->where('name', 'like', '%' . $term . '%');
                            })
                            ->orWhereHas('brand', function ($query) use ($term) {
                                $query->where('name', 'like', '%' . $term . '%');
                            });
                    });
                }
            })
            ->when($this->selectedCategory, function ($query) {
                return $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                return $query->where('brand_id', $this->selectedBrand);
            })
            ->take($this->amount)
            ->get();
    }
    public function searchPerformed($query)
    {
        $this->resetPage();
        // Update the search query
        $this->search = $query;

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
