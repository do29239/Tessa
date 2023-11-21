<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist as WishlistModel;

class Wishlist extends Component
{
    public $productId;

    public function render()
    {
        return view('livewire.wishlist');
    }
    public function mount($product_id)
    {
        $this->productId = $product_id;

    }
    public function addToWishlist()
    {

        $Item = WishlistModel::firstOrNew([
            'user_id' => auth()->id(),
            'product_id' => $this->productId,
        ]);
        $Item->save();


    }
}
