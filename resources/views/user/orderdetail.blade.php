<!-- TODO: create a page to show details of an order and enable returns -->
<x-layout>
    <x-slot:title>Order details</x-slot:title>
    <div class="bg-base-200">
        @foreach($order->Orderitems as $orderItem)
            <div class="bg-base-200 p-5 m-2">
                <p class="font-bold">{{$orderItem->product->name}}</p>
                <p>x{{$orderItem->amount}}</p>
                <p>£{{$orderItem->price}}</p>
            </div>
        @endforeach
    </div>
</x-layout>
