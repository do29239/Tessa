<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Routing\Route;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $searchTerm = '';



    public function render()
    {

        return view('livewire.search');
    }

    public function search()
    {
        $this->dispatch('searchTerm', $this->searchTerm);
        return redirect()->route('loadProducts');
    }
}

