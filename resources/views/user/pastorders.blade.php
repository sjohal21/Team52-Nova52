<!-- TODO: create page where the user can view all their past orders and perform actions like return -->
<x-layout>
    <x-slot:title>
        Past orders
    </x-slot:title>
    <div class="p-5">
        <h1 class="font-bold text-2xl">Past orders</h1>
        <div class="bg-base-200 mt-5 p-3 rounded-md">
            @if($orders)
                @foreach($orders as $order)
                    <div class="card bg-base-300 m-5 p-5">
                        <p>Order #{{$order->id}}</p>
                        <p>Price: £{{$order->total_price}}</p>

                    </div>
                @endforeach
            @else
                <p>No orders!</p>
            @endif
        </div>
    </div>
</x-layout>
