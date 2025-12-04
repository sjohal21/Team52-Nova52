<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Basket
    </x-slot:title>
        <div class="flex flex-row p-8 rounded-xl mt-10 w-11/12 mx-auto gap-40">
            <div class = "flex-1 bg-base-300 p-6 rounded-xl shadow">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-2xl font-bold text-center">Your Order</h1>
                        <div class="divider"></div>
                        <div class="flex justify-between mb-10 font-bold text-lg">
                            @foreach($items as $item)
                                <span>{{$item->product->name}}</span>
                                <span>Quantity: {{$item->amount}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-base-300 p-6 rounded-xl shadow">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-2xl font-bold text-center">Basket Summary</h1>
                        <div class="divider"></div>
                        <div class="flex justify-between mb-10 font-bold text-lg">
                            <span>Total:</span>
                            <span>{{$total}}</span>
                        </div>
                        <a class="btn" href="{{URL::to("/checkout")}}">Check out</a>
                    </div>
                    </div>
                </div>
        </div>
</x-layout>
