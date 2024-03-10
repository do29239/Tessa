<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col" class="text-center">Order Number</th>
        <th scope="col" class="text-center">Order Date</th>
        <th scope="col" class="text-center">Order Total</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td class="product-name text-center">
                <span>{{ $order->id }}</span>
            </td>
            <td class="product-price text-center">
                <span class="unit-amount">{{ $order->created_at }}</span>
            </td>
            <td class="product-subtotal text-center">
                <span class="subtotal-amount">{{ number_format($order->total, 2) }}</span>
            </td>
            @if($order->status == 1)
                <td class="product-subtotal text-center">
                    <span class="subtotal-amount">Completed</span>
                </td>
            @elseif($order->status == 0)
                <td class="product-subtotal text-center">
                    <span class="subtotal-amount">Pending...</span>
                </td>
            @endif
            <td class="product-subtotal text-center">
                <a href="{{ route('order.details', ['order_id' => $order->id]) }}" class="default-btn">View Order</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
