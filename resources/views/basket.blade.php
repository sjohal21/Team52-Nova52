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
                                <form method="post" action="{{URL::to("/basket/remove")}}">
                                    <input type="hidden" name="product_id" value="{{$item->product->id}}">
                                    <input type="submit" value="Remove Item">
                                </form>
                                <form method="post" action="{{URL::to("/basket/update")}}">
                                    <input type="number" name="quantity" value="{{$item->amount}}">
                                    <input type="hidden" name="product_id" value="{{$item->product->id}}">
                                    <input type="submit" value="Update quantity">
                                </form>

                                <form method="post"
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
                        <!-- If nothing being added to basket then basket has not been created -->
                         @if(session('error'))
                             <p class="alert alert-error p-4 mb-4">
                                 {{ session('error') }}
                            </p>
                        @endif
                    </div>
                    </div>
                </div>
        </div>
</x-layout>
