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
            <h1 class="text-2xl font-bold">Discover the Future of Technology</h1>
            <h3 class="text-1x1">Explore our range of innovative products designed to enhance your lifestyle. From high-performance laptops to sleek smartphones, experience technology like never before.</h3>
        </div>
    </div>
   <div class="flex flex-col bg-base-100 p-5">
    <h2 class="text-1xl text-center font-bold p-3">Explore Our Categories</h2>

    <div class="grid p-1 grid-flow-col gap-2">

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/pageicons/laptop.svg" alt="Picture of laptop" class="h-16 w-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/pageicons/laptopwhite.svg" alt="Picture of laptop" class="h-16 w-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Laptops</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/pageicons/cell-phone.svg" alt="Picture of smartphone" class="h-16 w-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/pageicons/cell-phone-white.svg" alt="Picture of smartphone" class="h-16 w-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Smartphones</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/pageicons/tablet.svg" alt="Picture of tablet" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/pageicons/tabletwhite.svg" alt="Picture of tablet" class="w-16 h-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Tablets</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/pageicons/computer.svg" alt="Picture of desktop computer" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/pageicons/computer-white.svg" alt="Picture of desktop computer" class="w-16 h-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Desktops</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/pageicons/headphone.svg" alt="Picture of over ear headphones" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/pageicons/headphonewhite.svg" alt="Picture of over ear headphones" class="w-16 h-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Audio</h2>
            </div>
        </div>

    </div>
</div>
    <div class="flex flex-col bg-base-200 p-5">
        <div class="grid grid-flow-col grid-rows-1 gap-3">
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/pageicons/free-shipping.svg" alt="Picture of a delivery lorry with the word free on it" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/pageicons/free-shipping-white.svg" alt="Picture of a delivery lorry with the word free on it" class="w-16 h-q6 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Free delivery over £50</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/pageicons/cyber-security.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/pageicons/cyber-security-white.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Secure Checkout</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/pageicons/shield.svg" alt="Picture of a shield with a tick in the middle" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/pageicons/shieldwhite.svg" alt="Picture of a shield with a tick in the middle" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">1-Year Warranty</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/pageicons/student.svg" alt="Picture of a person with a graduation cap" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/pageicons/studentwhite.svg" alt="Picture of a person with a graduation cap" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Student-Friendly Pricing</h2>
                </div>

            </div>
        </div>


<!-- About Us Section  -->

<section class="text-center max-w-3x1 mx-auto mb-20">
    <div class="inline-block border border-base-content px-10 py-2 rounded-md mb-6">
        <h2 class="text-2x1 md:text-3x1 font-bold">About Us</h2>
    </div>
    <p class="mb-8">
    At Nova52, we are committed to making reliable, high-quality technology accessible to everyone.
    We offer a range of laptops, smartphones, tablets and other smart devices designed for students,
    professionals and everyday users.
    </p>
    <a class="btn btn-neutral rounded-full" href="{{URL::to('/about')}}">
        Learn More
    </a>
</section>
    </div>
</x-layout>
