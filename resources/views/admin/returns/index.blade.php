<!-- TODO: create page to show returned items -->
<x-adminlayout>
    <x-slot:title>
        Returns
    </x-slot:title>
    <div class="p-5 m-5">
        @if(count($returns))
            @foreach($returns as $returnedItem)
                <div class="card bg-base-300 p-5">
                    <h2 class="card-title">Returned item {{$returnedItem->id}}</h2>
                    <div class="card-body">
                        <p>{{$returnedItem->product->name}}</p>
                        <p>Refund amount: £{{$returnedItem->refund_amount}}</p>
                        <a href="{{URL::to("/admin/orders/{$returnedItem->order->id}")}}" class="underline">Order ID: #{{$returnedItem->order->id}}</a>
                        <p>Customer: {{$returnedItem->order->user->name}}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No returns found</p>
        @endif
    </div>
</x-adminlayout>
