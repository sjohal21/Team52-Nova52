<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Wish List
    </x-slot:title>
    <div class="p-10">
        @foreach($items as $item)
            <div class="flex-row">
                <div class="card bg-base-300 p-5 m-5">
                    <p>Image</p>
                </div>
                <div class="card bg-base-200">
                    <div class="card-body">
                        <div class="card-title">{{$item->product->name}}</div>
                        <p>{{$item->product->description}}</p>
                        <form method="post" action="{{URL::to('/wishlist/remove')}}">
                            <input type="hidden" value="{{$item->id}}" name="product_id">
                            <input class="btn" type="submit" class="btn m-2" value="Remove Item">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
