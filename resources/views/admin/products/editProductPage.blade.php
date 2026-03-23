<x-adminlayout>
    <x-slot:title>Edit Products</x-slot:title>

     <div class="w-full px-4 py-6 lg:px-6">
            <div class="max-w-7xl mx-auto space-y-8">

            <!----------------- Title Card Content ----------------->
            <!-- <div class="flex lg:flex-row flex-col p-8 rounded-xl mt-0 w-11/12 mx-auto gap-40"> -->
                <div class = "bg-base-300 rounded-3xl px-8 py-10 shadow-sm"> 
                    <!-- <div class="flex items-center justify-between w-full"> -->
                    <div class = "flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                    <!-- Centre Section Card -->
                        <div class="card-body text-center flex-1">    
                            <div id = "Title">
                                <h1 class="card-title font-bold justify-center text-3xl">Edit Product</h1>
                            </div>
                            <div id = "Description">
                                <h4 class="font-bold justify-center">Update product details shown in the catalogue</h4>
                            </div>
                             <div>
                                <button class="btn btn-sm rounded-full px-8 bg-red-500 text-white border-none hover:bg-red-600">Back to products</button>
                            </div>
                        </div>

                    <!-- Bottomn Left Section Card -->
                        <!-- <div>
                            <a class="text-red-500 font-semibold hover:underline">Back To Products</a>
                        </div> -->

                    <!-- Bottom Right Section Card -->
                        <div class = "flex items-center gap-3 justify-end" > 
                            <!-- <button class="btn btn-success btn-sm">Active</button>
                            <button class="btn btn-ghost btn-sm">Hidden</button> -->
                            <!--<button class="btn btn-success btn-sm rounded-full px-8 text-white">Active</button>
                            <button class="btn btn-ghost btn-sm rounded-full px-8 bg-gray-400 text-black hover:bg-gray-500"> Hidden </button> -->
                        </div>
                    </div>
                </div>
             

            <!----------------- Main Edit Card ----------------->
            <div class="bg-base-300 rounded-3xl p-6 lg:p-8 shadow-sm">
                 <form method="POST" action="{{ URL::to('/admin/products/editProduct') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="productID" value="{{ $product->id }}">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                        <!------- Left Side section ------->
                        <div class="pr-0 lg:pr-8 lg:border-r lg:border-black">
                            <div class="space-y-5">

                                <!-- Name secction -->
                                <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                    <label class="font-bold text-xl">Name:</label>
                                    <input type="text" name="productName" value="{{ old('productName', $product->name) }}" placeholder="Enter the name" class="input input-bordered w-full bg-white" />
                                </div>

                                <!-- Category section -->
                                <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                    <label class="font-bold text-xl">Category:</label>
                                    <select class="select select-bordered w-full bg-white">
                                        <option value="Laptop" {{ old('category') == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                                        <option value="Phone" {{ old('category') == 'Phone' ? 'selected' : '' }}>Phone</option>
                                        <option value="Tablet" {{ old('category') == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                                    </select>
                                </div>

                                <!-- Price section -->
                                <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                    <label class="font-bold text-xl">Price:</label>
                                    <input type="number" name="productPrice" value="{{ old('productPrice', $product->price) }}" placeholder="Enter the price " class="input input-bordered w-full bg-white" />
                                </div>

                                <!-- Stock level section section -->
                                <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                    <label class="font-bold text-xl">Tagline:</label>
                                    <input type="number" name="stockQuantity" value="{{ old('stockQuantity', $product->stock_level) }}" placeholder="Enter the stock level" class="input input-bordered w-full bg-white" />
                                </div>

                                <!-- Key Features section -->
                                <div class="grid grid-cols-[140px_1fr] gap-4 items-start">
                                    <label class="font-bold text-xl pt-2">Key feature:</label>
                                    <div class="space-y-3">
                                        <input type="text" name="feature_1" value="{{ old('feature_1', $product->feature_1 ?? '') }}" placeholder="Enter feature 1" class="input input-bordered w-full bg-white" />
                                        <input type="text" name="feature_2" value="{{ old('feature_2', $product->feature_2 ?? '') }}" placeholder="Enter feature 2" class="input input-bordered w-full bg-white" />
                                        <input type="text" name="feature_3" value="{{ old('feature_3', $product->feature_3 ?? '') }}" placeholder="Enter feature 3" class="input input-bordered w-full bg-white" />
                                    </div>

                                <!-- Images section -->
                                 <div class="pt-6">
                                    <div class="flex justify-end">
                                        <input
                                            type="file"
                                            name="uploadedImage"
                                            id="uploadedImage"
                                            class="file-input file-input-bordered bg-white max-w-xs"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------- Right Side section ------->
                        <div class="pl-0 lg:pl-2 flex flex-col justify-between">
                            <div class="space-y-6">

                                <!-- Description Section-->
                                <div>
                                    <label class="block font-bold text-2xl mb-3">Product Description:</label>
                                    <textarea class="textarea textarea-bordered w-full h-40 bg-white resize-none" name="productDescription" placeholder="Enter product description">{{ old('productDescription', $product->description) }}</textarea>
                                </div>

                                <!-- Specification section -->
                                <div>
                                    <label class="block font-bold text-2xl mb-3" placeholder="Enter product specification"></label>
                                    <textarea class="textarea textarea-bordered w-full h-40 bg-white resize-none" name="productSpecification" placcholder="Enter Specification" >{{ old('productSpecification', $product->specification ?? '') }}</textarea>
                                </div>
                            </div>

                            <!-- Bottom Buttons -->
                            <div class="flex justify-between items-center pt-6">

                                <button class="btn rounded-full bg-black text-white border-none hover:bg-gray-800 px-10">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-adminlayout>