<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Basket
    </x-slot:title>
    <div class="max-w-xl bg-base-100 text-base-content">
        @foreach($items as $item)
            <p class="p-10">{{$item['name']}}</p>
        @endforeach
        <p class="p-10">Total {{$total}}</p>
        <p class="p-10">There are {{$count}} items</p>
    </div>
</x-layout>
