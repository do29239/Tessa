<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist as WishlistModel;

class ShowWishlist extends Component
{
    public $items;

    public function render()
    {
        $this->items = WishlistModel::where('user_id', auth()->id())->get();
        return view('livewire.show-wishlist');
    }

    public function deleteItem($ItemId)
    {
        // Delete the item from the cart
        $Item = WishlistModel::find($ItemId);

        if ($Item) {
            $Item->delete();
        }
    }

    public function clearWishlist()
    {
        $this->items = WishlistModel::where('user_id', auth()->id())->delete();

    }
}
