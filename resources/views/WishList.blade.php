<x-layout>
    <x-slot:title>
        Wish List
    </x-slot:title>

    <!--Wishlist card-->

    <section class="max-w-6xl mx-auto px-4 py-10 md:py-12 space-y-8">
<div class="text-center space-y-3">
 <p class="text-sm uppercase tracking-[0.2em] text-base-content/60">
     Nova52
</p>
<h1 class="text-3xl md:text-5xl font-semibold text-base-content">
                Your Wishlist
</h1>
<p class="text-sm md:text-base text-base-content/70 max-w-2xl mx-auto">
      Products you’ve saved for later, all in one place.
 </p>
</div>

@if(sizeof($items))
    <div class="space-y-6">
 @foreach($items as $item)
    <div class="bg-base-200 border border-base-300 rounded-[1.75rem] overflow-hidden">
    <div class="grid md:grid-cols-[220px_1fr] items-center">

    <div class="bg-base-100 h-56 md:h-full flex items-center justify-center p-6">
    @if($item->product->photo_url)
     <img src="{{ $item->product->photo_url }}"
           alt="{{ $item->product->name }}"
     class="max-h-40 w-auto object-contain">
         @else
       <div class="text-base-content/40 text-sm">
    No image available
       </div>
   @endif
 </div>

        <div class="p-6 md:p-8 flex flex-col justify-between h-full">
            div class="space-y-3">
            <h2 class="text-2xl font-semibold text-base-content">
         {{ $item->product->name }}
      </h2>

    <p class="text-base-content/70 leading-relaxed">
       {{ $item->product->description }}
        </p>

          @if(isset($item->product->price))
         <p class="text-lg font-semibold text-base-content">
      £{{ number_format($item->product->price, 2) }}
       </p>
       @endif
      </div>

    <div class="mt-6 flex flex-wrap gap-3">
    <a href="{{ route('products.show', $item->product->id) }}"
  class="btn btn-neutral rounded-full px-6">
  View Product
 </a>

 <form method="post" action="{{ URL::to('/wishlist/remove') }}">
 @csrf
<input type="hidden" value="{{ $item->product->id }}" name="product_id">
 <input type="submit" value="Remove"
      class="btn btn-outline rounded-full px-6">
     </form>
     </div>
</div>
 </div>
  </div>
                @endforeach
            </div>
     <div class="text-center pt-4">
 <form method="post" action="{{ URL::to('/wishlist/clear') }}">
     @csrf
    <input type="submit" value="Clear Wishlist"
  class="btn btn-neutral rounded-full px-8">
         </form>
     </div>

     @else
         <div class="bg-base-200 border border-base-300 rounded-[2rem] p-10 md:p-14 text-center max-w-3xl mx-auto">
 <h2 class="text-2xl md:text-3xl font-semibold text-base-content mb-4">
    Your wishlist is empty
     </h2>
<p class="text-base-content/70 max-w-xl mx-auto">
  Save products you love and come back to them later.
 </p>
<div class="mt-8">
<a href="{{ URL::to('/products') }}"
                      
    class="btn btn-neutral rounded-full px-8">  
    Browse Products
    </a>
</div>
</div>
 @endif

    </section>
</x-layout>