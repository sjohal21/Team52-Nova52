<!-- TODO: add page to add a review -->
<x-layout>
    <x-slot:title>
        Add review
    </x-slot:title>
    <div class="text-center">
        <h1 class="text-2xl font-bold">Add review</h1>
    </div>
    <div>
        <form method="post" action="{{URL::current()}}">
            <label for="description">Review description</label>
            <textarea name="description"></textarea>
            <input class="btn btn-neutral w-auto md-w-64 rounded-full text-white mt-12" type="submit" value="Submit review">
            @csrf
        </form>
    </div>
</x-layout>
