<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Wish List
    </x-slot:title>
    <div class="p-10">
        @foreach($items as $item)
            <div class="card bg-base-200">
                <div class="card-body">
                    <div class="card-title">{{$item->product->name}}</div>
                    <p>{{$item->product->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
