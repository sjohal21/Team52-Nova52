<x-layout>
    <x-slot:title>
        Products
</x-slot:title>

<!-- the beginning part of the webpage/ content for the heading-->
 <section class="py-12 px-6 text-center">

  <h1 class="text-3xl md:text-4xl font-bold mb-2 text-black dark:text-white">
    Our Products
</h1>

<p class="text-sm md:text-base text-black dark:text-white">
    Explore the latest tech across all of our categories
</p>

<!-- Search Bar + Filter -->
<div class="max-w-2xl mx-auto mt-6">
    <form action="{{route('products.search')}}" method="GET"
    class="flex items-center bg-base-100 rounded-full shadow px-4 py-3 gap-2">

        <!-- Search input -->
        <input
     type="text"
     name="search"
     value="{{ request('search') }}"
      placeholder="Search products..."
      class="flex-1 bg-transparent outline-none text-sm"
        >

     <!-- Category filter -->
    <select name="category" class="select select-bordered rounded-full text-sm">
    <option value="">All</option>

    <option value="Laptop" {{ request('category') == 'Laptop' ? 'selected' : '' }}>
        Laptops
    </option>

    <option value="Smartphone" {{ request('category') == 'Smartphone' ? 'selected' : '' }}>
        Smartphones
    </option>

    <option value="Tablet" {{ request('category') == 'Tablet' ? 'selected' : '' }}>
        Tablets
    </option>

    <option value="Desktop" {{ request('category') == 'Desktop' ? 'selected' : '' }}>
        Desktops
    </option>

    <option value="Audio" {{ request('category') == 'Audio' ? 'selected' : '' }}>
        Audio
    </option>
</select>

        <!-- Button -->
        <button type="submit"
                class="btn btn-neutral rounded-full px-4">
            Filter
        </button>

    </form>
</div>
    
</form>
</div>
</section>

<!-- this is for the product cards/grid-->
 <section class="max-w-7xl mx-auto mb-20 px-4">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        @forelse ($products as $product)
        <div class="card bg-base-100 shadow-md rounded-2xl pb-4 relative hover:shadow-xl transition">
            <!--design for the product-->
            <!-- Commented out until future development
            <button class="absolute right-3 top-3 text-lg opacity-80 hover:opacity-100">
                [icon]
            </button>
            -->
         <!--Product Image-->
            @if($product->photo_url)

            <figure class="h-75 overflow-hidden rounded-t-2xl">
                <img src="{{Storage::url($product->photo_url)}}"
                alt="{{$product->name}}"
                class="w-full h-full object-cover">
            </figure>
            @else
                <figure class="h-40 overflow-hidden rounded-t-2xl">
                    <p>No image</p>
                </figure>
            @endif


        <!--Product Information -->
        <div class="card-body text-center px-4">
            <h3 class="font-semibold text-sm">{{$product->name}}</h3>

            <p class="text-xs text-base-content mb-3">
                from £{{number_format($product->price,2)}}
            </p>
            <!--Product Details-->
            <a href="{{route('products.show', $product->id) }}"
            class="btn btn-neutral btn-xs rounded-full px-4">
            View Product
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

