<x-layout>
    <x-slot:title>
        Products
</x-slot:title>

<!-- the beginning part of the webpage/ content for the heading-->
 <section class="py-12 px-6 text-center">

     <h1 class="text-3xl md:text-4xl font-bold mb-2">
         Our Products
</h1>
<p class="text-sm md:text-base text-neutral">
    Explore the latest tech across all of our categories
</p>

<!-- Search Bar-->
 <div class="max-w-md mx-auto mt-6">
    <form action="{{route('products.search')}}" method="GET"
    class="flex items-center bg-base-100 rounded-full shadow px-4 py-3 gap-2">
    <span class="text-lg"><!--search icon for the placeholder--></span>
        <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="search products..."
        class="w-full bg-transparent outline-none text-sm"
        >
</form>
</div>
</section>

<!-- this is for the product cards/grid-->
 <section class="max-w-7xl mx-auto mb-20 px-4">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        @forelse ($products as $product)
        <div class="card bg-base-100 shadow-md rounded-2xl pb-4 relative hover:shadow-xl transition">
            <!--design for the product-->

            <button class="absolute right-3 top-3 text-lg opacity-80 hover:opacity-100">
                [icon]
</button>

 <!--Product Image-->
<figure class="h-40 overflow-hidden rounded-t-2xl">
    <img src="{{$product->photo_url}}"
    alt="{{$product->name}}"
    class="w-full h-full object-cover">
</figure>

<!--Product Information -->
<div class="card-body text-center px-4">
    <h3 class="font-semibold text-sm">{{$product->name}}</h3>

    <p class="text-xs text-neutral mb-3">
        from £{{number_format($product->price,2)}}
</p>
<!--Product Details-->
<a href="{{route('products.show', $product->id) }}"
class="btn btn-neutral btn-xs rounded-full px-4">
view product
</a>
</div>
</div>
@empty
<!-- If no products match search -->
<p class="text-center col-span-full text-sm md:text-base">
    No products found.
</p>
@endforelse

</div>
</section>
</x-layout>

