<x-adminlayout>
    <x-slot:title>Edit Product</x-slot:title>

    <div class="card bg-base-200 p-5 m-5">
        <div class="card-title">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="card-body">
            <p>Stock: {{$product->stock_level}}</p>
            <p>Description:</p>
            <textarea class="textarea textarea-lg w-auto">{{$product->description}}</textarea>
        </div>
    </div>
</x-adminlayout>
