<!-- TODO: add page to manage all products -->
<x-adminlayout>
    <x-slot:title>
        Manage products
    </x-slot:title>
    <div class="bg-base-200 p-5 m-5">
        <a class=" btn bg-black text-white rounded-md" href="{{URL::to('/admin/products/create')}}">Add product</a>
        @if(count($products))
            @foreach($products as $product)
            <div class="card m-5 p-5 bg-base-300">
                <div class="card-title">
                    <h1>{{$product->name}}</h1>
                </div>
                <div class="card-body">
                    <p>Stock: {{$product->stock_level}}</p>
                </div>
                <div class="card-actions">
                    <a class="btn" href="{{URL::to("/admin/products/editProduct/{$product->id}")}}">Edit product</a>
                </div>
            </div>
            @endforeach
        @else
            <p>No products found!</p>
        @endif
    </div>
</x-adminlayout>
