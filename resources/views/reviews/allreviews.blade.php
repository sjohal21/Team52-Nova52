<!-- TODO: add ability to remove and edit reviews -->
<x-layout>
    <x-slot:title>
        All reviews
    </x-slot:title>
    <div class="p-5">
        @if($reviews)
            @foreach($reviews as $review)
                <div class="bg-base-200 m-5 p-5 card">
                    <div class="card-body">
                        <h2 class="font-bold text-xl">Reviewed {{$review->product->name}}</h2>
                        <h4 class="text-lg mt-5">Description:</h4>
                        <div class="bg-base-300 p-5 mt-5">
                            <p>{{$review->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No reviews!</p>
        @endif
    </div>
</x-layout>
