<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    @php
        $lightclass = "dark:hidden block";
        $darkclass = "hidden dark:block";
    @endphp
<<<<<<< HEAD
    <section class="bg-base-200 rounded-2x1 py-16 px-6 text-center mb-12">
    <h1 class="text-4x1 md:text-5x1x font-bold mb-4">
            Discover the Future of technology
    </h1>
    <p class="text-base md:text-lg mb-8 max-w-2x1 mx-auto">
        Explore our range of innovative products designed to enhance your lifestyle. From high-performance laptops to sleek smartphones, experience technology like never before.
    </p>
    <button class="btn btn-neutral rounded-full btn-wide">
        Shop Now
    </button>
    </section>

        <!-- Categories grid  -->

<section class="mb-16">
    <h2 class="text-2x1 md:text-3x1 font-bold text-center mb-10">
        Explore Our Categories
</h2>
  <div class="grid gap-6 md:grid-cols-3 mb-6">

            <div class="card bg-base-200 rounded-3xl shadow-sm items-center py-10">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/laptop.svg" alt="Picture of laptop" class="h-32 w-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/laptopwhite.svg" alt="Picture of laptop" class="h-32 w-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Laptops</h2>
                </div>
            </div>

    <div class="card bg-base-200 rounded-3x1 shadow-sm items-center py-10">
        <figure class="p-2">
            <img src="{{URL::to("/")}}/icons/cell-phone.svg" alt="Picture of smartphone" class="h-32 w-32 {{$lightclass}}">
            <img src="{{URL::to("/")}}/icons/cell-phone-white.svg" alt="Picture of smartphone" class="h-32 w-32 {{$darkclass}}">
        </figure>
        <div class="card-body">
            <h2 class="card-title text-center">Smartphones</h2>
        </div>
  </div>

  <div class="card bg-base-200 rounded-3x1 shadow-sm items-center py-10">
      <figure class="p-2">
          <img src="{{URL::to("/")}}/icons/tablet.svg" alt="Picture of tablet" class="w-32 h-32 {{$lightclass}}">
          <img src="{{URL::to("/")}}/icons/tabletwhite.svg" alt="Picture of tablet" class="w-32 h-32 {{$darkclass}}">
      </figure>
      <div class="card-body">
          <h2 class="card-title text-center">Tablets</h2>
      </div>
  </div>
</div>

<div class="grid gap-6 md:grid-cols-2">
            <div class="card bg-base-200 rounded-3xl shadow-sm items-center py-10">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/computer.svg" alt="Picture of desktop computer" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/computer-white.svg" alt="Picture of desktop computer" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Desktops</h2>
                </div>
            </div>

            <div class="card bg-base-200 rounded-3xl shadow-sm items-center py-10">
                <figure class="p-2">
                    <img src="{{URL::to("/")}}/icons/headphone.svg" alt="Picture of over ear headphones" class="w-32 h-32 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/headphonewhite.svg" alt="Picture of over ear headphones" class="w-32 h-32 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Audio</h2>
                </div>
            </div>
        </div>
</section>

<!-- Benefit grid  -->

<section class="bg-base-200 rounded-x1 py-10 px-6 mb-16">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-sm">
        <div class="card">
            `<figure>
                <img src="{{URL::to("/")}}/icons/free-shipping.svg" alt="Picture of a delivery lorry with the word free on it" class="w-32 h-32 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/free-shipping-white.svg" alt="Picture of a delivery lorry with the word free on it" class="w-32 h-32 {{$darkclass}}">
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">Free delivery over £50</h2>
            </div>`
        </div>

        <div class="card">
            <figure>
                <img src="{{URL::to("/")}}/icons/cyber-security.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-32 h-32 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/cyber-security-white.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-32 h-32 {{$darkclass}}">
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">Secure Checkout</h2>
=======
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
                <img src="{{URL::to("/")}}/icons/laptop.svg" alt="Picture of laptop" class="h-16 w-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/laptopwhite.svg" alt="Picture of laptop" class="h-16 w-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Laptops</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/icons/cell-phone.svg" alt="Picture of smartphone" class="h-16 w-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/cell-phone-white.svg" alt="Picture of smartphone" class="h-16 w-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Smartphones</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/icons/tablet.svg" alt="Picture of tablet" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/tabletwhite.svg" alt="Picture of tablet" class="w-16 h-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Tablets</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/icons/computer.svg" alt="Picture of desktop computer" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/computer-white.svg" alt="Picture of desktop computer" class="w-16 h-16 {{$darkclass}}">
            </figure>
            <div class="card-body text-center">
                <h2 class="card-title">Desktops</h2>
            </div>
        </div>

        <div class="card w-auto bg-base-200">
            <figure class="p-2 text-center">
                <img src="{{URL::to("/")}}/icons/headphone.svg" alt="Picture of over ear headphones" class="w-16 h-16 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/headphonewhite.svg" alt="Picture of over ear headphones" class="w-16 h-16 {{$darkclass}}">
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
                    <img src="{{URL::to("/")}}/icons/free-shipping.svg" alt="Picture of a delivery lorry with the word free on it" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/free-shipping-white.svg" alt="Picture of a delivery lorry with the word free on it" class="w-16 h-q6 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Free delivery over £50</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/cyber-security.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/cyber-security-white.svg" alt="Picture of a padlock in front of a shield and PCB traces" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Secure Checkout</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/shield.svg" alt="Picture of a shield with a tick in the middle" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/shieldwhite.svg" alt="Picture of a shield with a tick in the middle" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">1-Year Warranty</h2>
                </div>
            </div>
            <div class="card w-auto">
                <figure>
                    <img src="{{URL::to("/")}}/icons/student.svg" alt="Picture of a person with a graduation cap" class="w-16 h-16 {{$lightclass}}">
                    <img src="{{URL::to("/")}}/icons/studentwhite.svg" alt="Picture of a person with a graduation cap" class="w-16 h-16 {{$darkclass}}">
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-center">Student-Friendly Pricing</h2>
                </div>
>>>>>>> 6070bd9611aec0a87a7390f02cea06c1377309c8
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="{{URL::to("/")}}/icons/shield.svg" alt="Picture of a shield with a tick in the middle" class="w-32 h-32 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/shieldwhite.svg" alt="Picture of a shield with a tick in the middle" class="w-32 h-32 {{$darkclass}}">
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">1-Year Warranty</h2>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="{{URL::to("/")}}/icons/student.svg" alt="Picture of a person with a graduation cap" class="w-32 h-32 {{$lightclass}}">
                <img src="{{URL::to("/")}}/icons/studentwhite.svg" alt="Picture of a person with a graduation cap" class="w-32 h-32 {{$darkclass}}">
            </figure>
            <div class="card-body">
                <h2 class="card-title text-center">Student-Friendly Pricing</h2>
            </div>
        </div>
</div>
</section>


<!-- About Us Section  -->

<section class="text-center max-w-3x1 mx-auto mb-20">
    <div class="inline-block border border-base-content px-10 py-2 rounded-md mb-6">
    <h2 class="text-2x1 md:text-3x1 font-bold">About Us</h2>
    </div>
<<<<<<< HEAD
    <p class="mb-8">
    At Nova52, we are committed to making reliable, high-quality technology accessible to everyone.
    We offer a range of laptops, smartphones, tablets and other smart devices designed for students,
    professionals and everyday users.
</p>
<button class="btn btn-neutral rounded-full">
    Learn More
</button>
</section>
</section>


    <div class="max-w-xl bg-base-100 text-base-content">
        <div class="card">
            <div class="card-body">
            </div>
=======
    <div class="flex flex-col bg-base-100 p-5">
        <div class="p-5 text-center">
            <h2 class="text-2xl font-bold">About Us</h2>
            <p class="text-1xl p-2">At Nova52, we are committed to making reliable, high-quality technology accessible to anyone. We offer a range of laptops, smartphones, tablets, and other devices designed for students, professionals, and everyday users.</p>
            <a class="btn bg-black text-white" href="{{URL::to('/about')}}">Learn more</a>
>>>>>>> 6070bd9611aec0a87a7390f02cea06c1377309c8
        </div>
    </div>
</x-layout>
