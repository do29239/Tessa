<div>
    <form wire:submit.prevent="applyCoupon">
        <div class="form-group">
            <input type="text" wire:model="couponCode" class="form-control" placeholder="Enter your coupon code" required>
{{--            @error('couponCode') <span class="error">{{ $message }}</span> @enderror--}}
        </div>
        <button type="submit" class="default-btn">Apply Coupon</button>
    </form>
</div>
