<x-layout>
    <x-slot:title>
        Add review
    </x-slot:title>
    <div class="text-center p-5">
        <h1 class="text-2xl font-bold">Edit review for {{$productToReview->name}}</h1>
    </div>
    <div class="card">
        <div class="card-body bg-base-200">
            <form method="post" action="{{URL::current()}}">
                <h2 class="font-bold text-xl m-3">Review description</h2>
                <textarea name="description" class="textarea-lg p-5 bg-base-300">{{$currentReview}}</textarea>
                <input class="m-10 btn btn-neutral w-auto md-w-64 rounded-full text-white mt-12 align-bottom" type="submit" value="Submit review">
                @csrf
            </form>
        </div>
    </div>
</x-layout>
