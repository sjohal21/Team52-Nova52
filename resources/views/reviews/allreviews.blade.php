<x-layout>
    <x-slot:title>
        All reviews
    </x-slot:title>
    <div class="p-5">
        @if(count($reviews)>0)
            @foreach($reviews as $review)
                <div class="bg-base-200 m-5 p-5 card">
                    <div class="card-body">
                        <h2 class="font-bold text-xl">Reviewed {{$review->product->name}}</h2>
                        <h4 class="text-lg mt-5">Description:</h4>
                        <div class="bg-base-300 p-5 mt-5">
                            <p>{{$review->description}}</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <form method="post" action="{{URL::to('/user/reviews/remove')}}">
                            <input type="hidden" value="{{$review->id}}" name="review_id">
                            @csrf
                            <input class="btn" type="submit" value="Delete">
                        </form>
                        <a class="btn" href="/review/{{$review->id}}/edit">Edit</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="pt-40 pb-40">
                <p class="font-bold text-center">No reviews!</p>
            </div>
        @endif
    </div>
</x-layout>
