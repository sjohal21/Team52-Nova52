<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Basket
    </x-slot:title>
        <div class="flex lg:flex-row flex-col p-8 rounded-xl mt-10 w-11/12 mx-auto gap-40">
            <div class = "flex-1 bg-base-300 p-6 rounded-xl shadow">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-2xl font-bold text-center">Your Order</h1>
                        <div class="divider"></div>
                        <div class="flex flex-col justify-between mb-10 font-bold text-lg">
                            @foreach($items as $item)
                                <span>{{$item->product->name}}</span>
                            <div class="card">
                                <div class="card-body">
                                    <div class="flex flex-col items-end">
                                        <form method="post" action="{{URL::to("/basket/update")}}">
                                            <input type="number" name="amount" value="{{$item->amount}}" class="w-12">
                                            <input type="hidden" name="product_id" value="{{$item->product->id}}">
                                            <input type="submit" value="Update quantity" class="btn m-2">
                                            @csrf
                                        </form>
                                        <form method="post" action="{{URL::to("/basket/remove")}}">
                                            <input type="hidden" name="product_id" value="{{$item->product->id}}">
                                            <input type="submit" value="Remove Item" class="btn m-2">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="divider"></div>
                        <div class="card font-bold text-lg">
                            <span>Items in basket: {{$count}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-base-300 p-6 rounded-xl shadow">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-2xl font-bold text-center">Basket summary</h1>
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
