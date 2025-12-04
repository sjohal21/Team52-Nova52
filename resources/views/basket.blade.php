<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Basket
    </x-slot:title>
    <div class="max-w-xl bg-base-100 text-base-content">
        @foreach($items as $item)
            <p class="p-10">Product name:{{$item->product->name}}</p>
            <p class="p-10">Quantity: {{$item->amount}}</p>
        @endforeach
        <p class="p-10">Total {{$total}}</p>
        <p class="p-10">{{$count}} items</p>
        <a href="{{URL::to('/checkout')}}" class="underline">Check out</a>
    </div>
</x-layout>
