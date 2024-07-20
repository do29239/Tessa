<?php
namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class LoadProducts extends Component
{
    public $amount = 9;
    public $selectedCategory = null;
    public $selectedBrand = null;
    public $noMoreProducts = null;
    public $search = '';
    protected $listeners = ['categorySelected', 'brandSelected'];

    public function mount($brandId = null)
    {
        if ($brandId) {
            session()->forget(['selectedCategory', 'searchTerm', 'amount']);
            $this->selectedBrand = $brandId;
            session(['selectedBrand' => $brandId]);
        } else {
            $this->selectedBrand = session('selectedBrand', null);
        }

        if (session('searchTerm')) {
            $this->search = session('searchTerm', '');
            $this->updatedSearch();
        } else {
            $this->search = session('searchTerm', '');
            $this->selectedCategory = session('selectedCategory', null);
            $this->amount = session('amount', 9);
        }
    }

    public function hydrate()
    {
        $this->dispatch('loadState', [
            'selectedCategory' => $this->selectedCategory,
            'selectedBrand' => $this->selectedBrand,
            'searchTerm' => $this->search,
            'amount' => $this->amount
        ]);
    }

    public function render()
    {
        $products = $this->queryProducts();
        return view('livewire.product.load-products', compact('products'));
    }

    public function load()
    {
        $productsCount = $this->queryProducts()->count();

        if ($this->amount <= $productsCount) {
            $this->amount += 9;
        } else {
            $this->noMoreProducts = true; // all products are loaded
        }

        $this->updateSessionState(); // Save the current state to session
    }

    private function queryProducts()
    {
        $query = Product::query();

        if (!empty($this->search)) {
            $keywords = explode(' ', $this->search);
            foreach ($keywords as $keyword) {
                $query->where(function ($subQuery) use ($keyword) {
                    $likeKeyword = '%' . $keyword . '%';
                    $subQuery->where('name', 'like', $likeKeyword)
                        ->orWhereHas('category', function ($query) use ($likeKeyword) {
                            $query->where('name', 'like', $likeKeyword);
                        })
                        ->orWhereHas('brand', function ($query) use ($likeKeyword) {
                            $query->where('name', 'like', $likeKeyword);
                        });
                });
            }
        }

        if (!empty($this->selectedCategory)) {
            $query->where('category_id', $this->selectedCategory);
        }

        if (!empty($this->selectedBrand)) {
            $query->where('brand_id', $this->selectedBrand);
        }

        return $query->take($this->amount)->get();
    }

    public function resetNoMoreProducts()
    {
        $this->noMoreProducts = null;
    }

    public function resetFilters()
    {
        session()->forget(['searchTerm', 'selectedCategory', 'selectedBrand', 'amount']);
        $this->search = null;
        $this->selectedCategory = null;
        $this->selectedBrand = null;
        $this->resetPage();
    }

    public function categorySelected($categoryId)
    {
        $this->resetFilters();
        $this->resetNoMoreProducts();
        $this->selectedCategory = $categoryId;
        $this->updateSessionState(); // Save the current state to session
    }

    public function brandSelected($brandId)
    {
        $this->resetFilters();
        $this->resetNoMoreProducts();
        $this->selectedBrand = $brandId;
        $this->updateSessionState(); // Save the current state to session
    }

    private function resetPage()
    {
        $this->amount = 9;
    }

    public function updatedSearch()
    {
        session()->forget(['selectedCategory', 'selectedBrand', 'amount']);
        session(['searchTerm' => $this->search]);
        $this->resetPage();
        $this->updateSessionState(); // Save the current state to session
    }

    private function updateSessionState()
    {
        session([
            'selectedCategory' => $this->selectedCategory,
            'selectedBrand' => $this->selectedBrand,
            'searchTerm' => $this->search,
            'amount' => $this->amount
        ]);
    }
}
