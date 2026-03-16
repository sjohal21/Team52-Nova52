<x-adminlayout>
    <x-slot:title>Edit Product</x-slot:title>

    <div class="card bg-base-200 p-5 m-5">
        <div class="card-title">
            <h1>{{$product->name}}</h1>
        </div>
        <form method="post" action="{{URL::to('/admin/products/editProduct')}}">
            <div class="card-body">
                <p>Name:</p>
                <input type="text" value="{{$product->name}}" name="productName" class="rounded-md w-min bg-base-300">
                <p>Stock:</p>
                <input type="number" value="{{$product->stock_level}}" name="stockQuantity" class="w-min bg-base-300">
                <p>Price:</p>
                <input type="number" value="{{$product->price}}" name="productPrice" class="w-min bg-base-300">
                <p>Description:</p>
                <textarea class="textarea textarea-lg w-auto" name="productDescription">{{$product->description}}</textarea>
                <input type="hidden" name="productID" value="{{$product->id}}">
                @csrf
            </div>
            <div class="card-actions">
                <input type="submit" value="Edit" class="btn bg-black text-white rounded-md">
            </div>
        </form>
    </div>
</x-adminlayout>
