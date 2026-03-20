<!-- TODO: Add page to add a new product to the array of offered products -->
<x-adminlayout>
    <x-slot:title>
        Add product
    </x-slot:title>
    <div class="bg-base-300 p-5">
        <h1 class="text-xl font-bold text-center">Add product</h1>
        <div class="card bg-base-200 p-5 m-5">
            <div class="card-title">
                <h1>Product details</h1>
            </div>
            <form method="post" action="{{URL::to('/admin/products/create')}}" enctype="multipart/form-data">
                <div class="card-body">
                    <p>Name:</p>
                    <input type="text" name="productName" class="rounded-md w-min bg-base-300">
                    <p>Category: </p>
                    <select name="categoryID" id="categoryID" class="select">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <p>Stock:</p>
                    <input type="number" name="stockQuantity" class="w-min bg-base-300">
                    <p>Price:</p>
                    <input type="number" name="productPrice" class="w-min bg-base-300">
                    <p>Description:</p>
                    <textarea class="textarea textarea-lg w-auto" name="productDescription"></textarea>
                    <p>Product photo:</p>
                    <input type="file" name="uploadedImage" id="uploadedImage" class="file-input">
                    @csrf
                </div>
                <div class="card-actions">
                    <input type="submit" value="Add" class="btn bg-black text-white rounded-md">
                </div>
            </form>
        </div>
    </div>
</x-adminlayout>
