<x-adminlayout>
    <x-slot:title>Edit Products</x-slot:title>

    <!-- Title Card Content -->
    <div class="flex lg:flex-row flex-col p-8 rounded-xl mt-0 w-11/12 mx-auto gap-40">
        <div class = "flex-1 bg-base-300 p-20 rounded-xl shadow">
            <div class="flex items-center justify-between w-full">
            <!-- Centre Section Card -->
                <div class="card-body text-center">    
                    <div id = "Title">
                        <h1 class="card-title font-bold justify-center text-3xl">Edit Product</h1>
                    </div>
                    <div id = "Description">
                        <h4 class="font-bold justify-center">Update product details shown in the catalogue</h4>
                    </div>
                </div>

            <!-- Bottomn Left Section Card -->
             
                <a class="text-red-500 font-semibold">Back To Products</a>

            <!-- Bottom Right Section Card -->
                <div class = "flex gap-2" > 
                    <button class="btn btn-success btn-sm">Active</button>
                    <button class="btn btn-ghost btn-sm">Hidden</button>
                </div>
            </div>
        </div>
    </div>

    <p>In Progress</p>
</x-adminlayout>