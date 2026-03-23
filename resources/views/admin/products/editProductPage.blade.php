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
                        </div>

                    <!-- Bottomn Left Section Card -->
                        <div>
                            <a class="text-red-500 font-semibold hover:underline">Back To Products</a>
                        </div>

                    <!-- Bottom Right Section Card -->
                        <div class = "flex items-center gap-3 justify-end" > 
                            <!-- <button class="btn btn-success btn-sm">Active</button>
                            <button class="btn btn-ghost btn-sm">Hidden</button> -->
                            <button class="btn btn-success btn-sm rounded-full px-8 text-white">Active</button>
                            <button class="btn btn-ghost btn-sm rounded-full px-8 bg-gray-400 text-black hover:bg-gray-500"> Hidden </button>
                        </div>
                    </div>
                </div>
             

            <!----------------- Main Edit Card ----------------->
            <div class="bg-base-300 rounded-3xl p-6 lg:p-8 shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!------- Left Side section ------->
                    <div class="pr-0 lg:pr-8 lg:border-r lg:border-black">
                        <div class="space-y-5">

                            <!-- Name secction -->
                            <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                <label class="font-bold text-xl">Name:</label>
                                <input type="text" value="LAPTOP 1" class="input input-bordered w-full bg-white" />
                            </div>

                            <!-- Category section -->
                            <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                <label class="font-bold text-xl">Category:</label>
                                <select class="select select-bordered w-full bg-white">
                                    <option>Laptop</option>
                                    <option>Phone</option>
                                    <option>Tablet</option>
                                </select>
                            </div>

                            <!-- Price section -->
                            <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                <label class="font-bold text-xl">Price:</label>
                                <input type="text" value="£399" class="input input-bordered w-full bg-white" />
                            </div>

                            <!-- Tagline section -->
                            <div class="grid grid-cols-[140px_1fr] items-center gap-4">
                                <label class="font-bold text-xl">Tagline:</label>
                                <input type="text" value="Lorem Epsum" class="input input-bordered w-full bg-white" />
                            </div>

                            <!-- Key Features section -->
                            <div class="grid grid-cols-[140px_1fr] gap-4 items-start">
                                <label class="font-bold text-xl pt-2">Key feature:</label>
                                <div class="space-y-3">
                                    <input type="text" value="Feature 1" class="input input-bordered w-full bg-white" />
                                    <input type="text" value="Feature 2" class="input input-bordered w-full bg-white" />
                                    <input type="text" value="Feature 3" class="input input-bordered w-full bg-white" />
                                </div>
                            </div>

                            <!-- Images section -->
                            <div class="pt-4 flex flex-col sm:flex-row sm:items-center gap-6">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="relative w-24 h-20 rounded-lg overflow-hidden bg-white shadow">
                                        <img src="https://via.placeholder.com/100x80" class="w-full h-full object-cover" alt="product image">
                                        <button class="absolute inset-0 flex items-center justify-center text-red-500 font-bold text-sm bg-black/20">
                                            Remove
                                        </button>
                                    </div>

                                    <div class="relative w-24 h-20 rounded-lg overflow-hidden bg-white shadow">
                                        <img src="https://via.placeholder.com/100x80" class="w-full h-full object-cover" alt="product image">
                                        <button class="absolute inset-0 flex items-center justify-center text-red-500 font-bold text-sm bg-black/20">
                                            Remove
                                        </button>
                                    </div>

                                    <div class="relative w-24 h-20 rounded-lg overflow-hidden bg-white shadow">
                                        <img src="https://via.placeholder.com/100x80" class="w-full h-full object-cover" alt="product image">
                                        <button class="absolute inset-0 flex items-center justify-center text-red-500 font-bold text-sm bg-black/20">
                                            Remove
                                        </button>
                                    </div>

                                    <div class="relative w-24 h-20 rounded-lg overflow-hidden bg-white shadow">
                                        <img src="https://via.placeholder.com/100x80" class="w-full h-full object-cover" alt="product image">
                                        <button class="absolute inset-0 flex items-center justify-center text-red-500 font-bold text-sm bg-black/20">
                                            Remove
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn rounded-full bg-black text-white border-none hover:bg-gray-800 px-6">
                                        Upload New Image
                                    </button>
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
                                <textarea class="textarea textarea-bordered w-full h-40 bg-white resize-none">Lorem Epsum</textarea>
                            </div>

                            <!-- Specification section -->
                            <div>
                                <label class="block font-bold text-2xl mb-3">Product Specification:</label>
                                <textarea class="textarea textarea-bordered w-full h-40 bg-white resize-none">Lorem Epsum</textarea>
                            </div>
                        </div>

                        <!-- Bottom Buttons -->
                        <div class="flex justify-between items-center pt-6">
                            <button class="btn rounded-full bg-blue-500 text-white border-none hover:bg-blue-600 px-10">
                                Preview
                            </button>

                            <button class="btn rounded-full bg-black text-white border-none hover:bg-gray-800 px-10">
                                Save Changes
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-adminlayout>