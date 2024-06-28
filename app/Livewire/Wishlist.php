<?php
namespace App\Livewire;

use Livewire\Component;

class Wishlist extends Component
{
    public $productId;
    public $isWishlisted = false;

    public function mount($product_id)
    {
        $this->productId = $product_id;
        $this->isWishlisted = $this->checkWishlist();
    }

    public function toggleWishlist()
    {
        $user = auth()->user();

        if (!$user) {
            // Handle the case where the user is not authenticated
            session()->flash('error', 'You need to be logged in to manage your wishlist.');
            return;
        }

        if ($this->isWishlisted) {
            // Detach the product from the user's wishlist
            $user->products()->detach($this->productId);
            $this->dispatch('removed_wishlist',['type' => 'danger']);
        } else {
            // Attach the product to the user's wishlist
            $user->products()->attach($this->productId);
            $this->dispatch('added_wishlist',['type' => 'success']);
        }

        $this->isWishlisted = !$this->isWishlisted;
    }

    private function checkWishlist()
    {
        $user = auth()->user();

        if (!$user) {
            return false;
        }

        return $user->products()->find($this->productId) !== null;
    }

    public function render()
    {
        return view('livewire.wishlist');
    }
}
