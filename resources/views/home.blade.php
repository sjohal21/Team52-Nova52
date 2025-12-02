<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    @php
        $lightclass = "dark:hidden block";
        $darkclass = "hidden dark:block";
    @endphp
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
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/laptop.svg" alt="Picture of laptop" class="h-32 w-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/laptopwhite.svg" alt="Picture of laptop" class="h-32 w-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Laptops</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/cell-phone.svg" alt="Picture of smartphone" class="h-32 w-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/cell-phone-white.svg" alt="Picture of smartphone" class="h-32 w-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Smartphones</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/tablet.svg" alt="Picture of tablet" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/tablet.svg" alt="Picture of tablet" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Tablets</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/computer.svg" alt="Picture of desktop computer" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/computer-white.svg" alt="Picture of desktop computer" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Desktops</h2>
                </div>
            </div>
            <div class="card w-auto bg-base-200">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/headphone.svg" alt="Picture of over ear headphones" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/headphonewhite.svg" alt="Picture of over ear headphones" class="w-32 h-32 {{$darkclass}}">
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
                    <img src="{{URL::to("/")}}/icons/free-shipping.svg" alt="Picture of a delivery lorry with the word free on it" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/free-shipping-white.svg" alt="Picture of a delivery lorry with the word free on it" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Free delivery over £50</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/cyber-security.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/cyber-security-white.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Secure Checkout</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/shield.svg" alt="Picture of a shield with a tick in the middle" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/shieldwhite.svg" alt="Picture of a shield with a tick in the middle" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">1-Year Warranty</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/student.svg" alt="Picture of a person with a graduation cap" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/studentwhite.svg" alt="Picture of a person with a graduation cap" class="w-32 h-32 {{$darkclass}}">
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
