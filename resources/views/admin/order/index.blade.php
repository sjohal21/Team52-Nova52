<!-- TODO: clean up page to fit UI design -->
<x-adminlayout>
    <x-slot:title>
        All orders
    </x-slot:title>
    <div class="p-5 bg-base-200">
        <h1 class="font-bold text-2xl">All orders</h1>
        @if(count($orders))
            @foreach($orders as $order)
            <div class="bg-base-300 card">
                <div class="card-body">
                    <h2 class="text-lg font-bold">Order {{$order->id}}</h2>
                    <p>For {{$order->First_Name}} {{$order->Surname}}</p>
                </div>
                <div class="card-actions">
                    <a class="btn" href="{{URL::to("/admin/orders/{$order->id}")}}">View details</a>
                </div>
            </div>
            @endforeach
        @else
            <p class="mt-5 mb-5">No orders found</p>
        @endif
    </div>
</x-adminlayout>
