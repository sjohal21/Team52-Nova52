<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="flex flex-col bg-base-200">
        <div class="text-center p-5">
            <h1 class="text-4xl font-bold">Discover the Future of Technology</h1>
            <h3 class="p-2">Explore our range of innovative products designed to enhance your lifestyle. From high-performance laptops to sleek smartphones, experience technology like never before.</h3>
        </div>
    </div>
    <div class="flex flex-col bg-base-100 p-5">
        <h2 class="text-3xl text-center font-bold p-3">Explore Our Categories</h2>
        <div class="grid p-3 grid-flow-col gap-2">
            <div class="card w-auto bg-base-200">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Laptops</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Smartphones</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Tablets</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Desktops</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Audio</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-base-200 p-5">
        <div class="grid grid-flow-col grid-rows-1 gap-3">
            <div class="card w-auto">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Free delivery over £50</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Secure Checkout</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">1-Year Warranty</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>

                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Student-Friendly Pricing</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-base-100 p-5">
        <div class="p-5 text-center">
            <h2 class="text-3xl font-bold">About Us</h2>
            <p class="text-xl p-2">At Nova52, we are committed to making reliable, high-quality technology accessible to anyone. We offer a range of laptops, smartphones, tablets, and other devices designed for students, professionals, and everyday users.</p>
            <a class="btn bg-black text-white" href="{{URL::to('/about')}}">Learn more</a>
        </div>
    </div>
</x-layout>
