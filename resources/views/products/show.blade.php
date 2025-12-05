<x-layout>
    <x-slot:title>
        {{$product->name}}
    </x-slot:title>
<!-- this shows the names for the products-->
 <section class="bg-base-200 py-10 text center">
    <h1 class="text-3x1 md:text-4x1 font-bold">
        {{$product->name}}
</h1>
</section>

<!--this is for the box-->
<section class="max-w-6x1 mx-auto bg-base-200 rounded-2x1 p-10 mt-10">
    <div class="grid md:grid-cols-2 gap-10">

    <!--this is for the left side of the page. product images will go here-->
    <div>
        <div class="relative rounded-x1 overflown-hidden shadow">

        <!--this is for the heart-->
        <button class="absolute top-3 right-3 text-xl opacity-80 hover:opacity-100">
            [icon]
        </button>

<img src="{{$product->photo_url}}"
alt="{{$product->name}}"
class="w-full h-80 object-cover rounded-x1">
</div>

<!--this is for the product image (underneath)-->
<div class="flex gap-3 mt-4">
    <img src="{{$product->photo_url}}" class="w-20 h-16 object-cover rounded-lg shadow">
    <img src="{{$product->photo_url}}" class="w-20 h-16 object-cover rounded-lg shadow">
    <img src="{{$product->photo_url}}" class="w-20 h-16 object-cover rounded-lg shadow">
</div>
</div>

<!--this is for thr right section(info)-->
<div class="space-y-6">

<!--this is for the names for the product-->
<h2 class="text-2x1 font-bold">{{$product->name}}</h2>

<!--this is for if the product has a tagline-->
@if(isset($product->taglie))
<p class="text-sm text-neutral">{{$product->tagline}}
</p>
@endif

<!--this is for the price-->
<p class="text-lg font-bold">
    price: £{{number_format($product->price,2)}}
</p>

<!--this is for how much stock is left for each product-->
<p class="text-sm">
    @if ($product->stock_level>10)
    <span class="text-green-600 font-medium">In Stock:{{$product->stock_level}}</span>
    @else
    <span class="text-red-600 font-medium">Out of Stock</span>
    @endif
</p>

<!--this is for the specs of each product-->
<ul class="text-sm list-none space-y-1">
    <li>[icon] Feature 1</li>
    <li>[icon] Feature 2</li>
    <li>[icon] Feature 3</li>
</ul>


<!--this is is for the basket (button)-->
<form method="post" action="{{URL::to('/basket/add')}}">
    <input type="hidden" value="{{$product->id}}" name="product_id">
    <!--this is for letting the customer know how much product they have selected-->
    <span class="font-semibold">Quantity:</span>
    <select class="select select-bordered select-sm w-20 rounded" name="amount">
        @for ($i=1; $i <=10; $i++)
            <option>{{$i}}</option>
        @endfor
    </select>
    <input class="btn btn-neutral w-full md:w-64 rounded-full text-white mt-42" type="submit" value="Add to basket">
    @csrf

</form>
    @if (session('error'))
        <p>{{session('error')}}</p>
    @endif
</div>
</div>

<!--this is for the information on each product-->
@if($product->desription)
<div class="border-t border-neutral/50 mt-14 pt-10">
    <h2 class="text-center text-xl font-bold mb-4">
        Product Description
</h2>
<p class="text-sm md:text-base leading-relaxed">
    {{$product->description}}
</p>
</div>
@endif

<!--this is for product information-->
@if(isset($product->specification))
<div class="border-t border-neutral/50 mt-14 pt-10">
    <h2 class="text-center text-xl font-bold mb-4">
        Product specification
</h2>
<p class="text-center text-xl font-bold mb-4">
    Product specification
</h2>
<p class="text-sm md:text-base leading-relaxed">
    {{$product->specification}}
</p>
</div>
@endif
</section>
</x-layout>

