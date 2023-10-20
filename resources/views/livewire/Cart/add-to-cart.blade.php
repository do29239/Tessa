<div class="d-flex align-items-center" style="padding-top: 15px;">
    <button type="submit" wire:click="addToCart" class="default-btn">Add Cart</button>
    <form class="input-counter">
        <span class="minus-btn" wire:click="decrementQuantity"><i class="bx bx-minus"></i></span>
        <input type="text" class="qty-input" wire:model="quantityCount" value="{{$this->quantityCount}}" />
        <span class="plus-btn" wire:click="incrementQuantity"><i class="bx bx-plus"></i></span>
    </form>
</div>
