<x-layout>
    <x-slot:title>
        Products
</x-slot:title>
<!-- the beginning part of the webpage/ content for the heading-->
 <section class="py-12 px-6 text-center">
    <!-- this is for the box-->
     <h1 class="text-3x1 md:text-4x1 font-bold mb-2">
        <!-- this is the specs for the headings-->
         Our Products
</h1>
<p class="text-sm md:text-base text-neutral">
    Explore the latest tech across all of our categories
</p>

<!-- this is the specs for the search bar-->
 <div class="max-w-md mx-auto mt-6">
    <form action="{{route('product.search')}}"method="GET"
    class="flex items-center bg-base-100 rounded-full shadow px-4 py-3 gap-2">
    <span class="text-lg"><!--search icon for the placeholder--></span>
        <input
        type="text"
        name="q"
        value="{{request('q') }}"
        placeholder="search products..."
        class="w-full bg-transparent outline-none text-sm"
        >
</form>
</div>
</section>
<!-- this is for the content/ products within the catalog-->
 <section class="text-center mb-10">
    <div class="flex flex-wrap justify-center gap-4">

    <!--this section of code is so the users interact within the page-->
    <a href="{{route('products.index')}}"
    class="btn btn-sm rounded-full px-6{{request('category')?'btn-neutral'}}>
    All
</a>

@foreach ($categories as $category)
<a href="{{route('products.index,['category'=> $category->slug])}}">
    <!-- these are all the icons for the products/ sections-->
     @if ($category->name ==='Smartphones') [icon] @endif
     @if ($category->name ==='laptops') [icon] @endif
     @if ($category->name ==='Desktops') [icon] @endif
     @if ($category->name ==='Audio') [icon] @endif
     @if ($category->name ==='Tablets') [icon] @endif
     {{$category->name}}
</a>
@endforeach

</div>
</section>

<!-- this is for the product cards/grid-->
 <section class="max-w-7x1 mx-auto mb-20 px-4">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        @forelse ($products as $product)
        <div class="card bg-base-100 shadow-md rounded-2x1 pb-4 relative hover:shadow-x1 transition">
            <!--design for the product-->

            <!--this is for adding the product to the wishlist-->
            <button class="absolute right-3 top-3 text-lg opacity-80 hover:opacity-100">
                [icon]
</button>

<!--this is for a image-->
<figure class="h-40 overflown-hidden rounded-t-2x1">
    <img src="{{$product->photo_url}}"
    alt="{{$product->name}}"
    class="W-full h-full object-cover">
</figure>

<!--this is for the information within the card-->
<div class="card-body text-center px-4">
    <h3 class="font-semibod text-sm">{{$product->name}}</h3>

    <p class="text-xs text-neutral mb-3">
        from £{{number_format($product->price,2)}}
</p>

<a href="{{route('products.show', $product->id) }}"
class="btn btn-neutral btn-xs rounded-full px-4">
view product
</a>
</div>
</div>
@empty
<p class="text-center col-span-full text-sm md:text-base">
    No peoducts found.
</p>
@endforelse

</div>
</section>
</x-layout>

