<!-- TODO: create a page to show details of an order and enable returns -->
<x-layout>
    <x-slot:title>Order details</x-slot:title>
    <div class="card p-5 m-5 bg-base-300">
        <h2 class="card-title">Order #{{$order->id}}</h2>
        <div class="card-body">
            <div class="bg-base-300">
                @foreach($order->Orderitems as $orderItem)
                    <div class="p-5 bg-base-200 card m-2">
                        <div class="card-body">
                            <p class="font-bold">{{$orderItem->product->name}}</p>
                            <p>Quantity: x{{$orderItem->amount}}</p>
                            <p>£{{$orderItem->price}}</p>
                        </div>
                        <div class="card-actions">
                            <a class="btn" href="{{URL::to("/user/orders/returnItem/{$orderItem->id}")}}">Return item</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card bg-base-200 p-5 m-5">
            <h2 class="card-title">Payment</h2>
            <div class="card-body">
                <p>Items: £{{$order->total_price - $extraCost}}</p>
                <p>Postage, packaging, and taxes: £{{round($extraCost, 2)}}</p>
                <p>Total price: £{{$order->total_price}}</p>
            </div>
        </div>
    </div>
</x-layout>
