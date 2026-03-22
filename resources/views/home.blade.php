<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <!--Light and dark mode incorporated with device default settings-->
    @php
        $lightclass = "dark:hidden block";
        $darkclass = "hidden dark:block";
    @endphp

    <section class="max-w-7xl mx-auto px-4 py-8 md:py-12 space-y-10">

 <section class="bg-base-200 rounded-[2rem] overflow-hidden">
 <div class="grid md:grid-cols-2 items-center min-h-[500px]">
 <div class="px-8 py-12 md:px-14 md:py-16">
  <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
          Nova52
  </p>
<!--Information card at start of page-->
     <h1 class="text-4xl md:text-6xl font-semibold leading-tight text-base-content max-w-xl">
    Discover the future of technology.
    </h1>

    <p class="mt-6 text-base md:text-lg text-base-content/70 max-w-lg leading-relaxed">
        Explore our range of innovative products designed to enhance your lifestyle.
        From high-performance laptops to sleek smartphones, experience technology like never before.
         </p>

    <div class="mt-8 flex flex-wrap gap-4">
 <a href="{{ URL::to('/products') }}" class="btn btn-neutral rounded-full px-7">
     Shop Now
     </a>
     <a href="{{ URL::to('/about') }}" class="btn btn-outline rounded-full px-7">
         Learn More
         </a>
         </div>
      </div>

 <div class="flex items-center justify-center px-8 pb-10 md:pb-0">
             <img src="{{ URL::to('/') }}/pageicons/laptop.svg" alt="Featured technology product"
  class="w-52 h-52 md:w-72 md:h-72 {{ $lightclass }}">
    <img src="{{ URL::to('/') }}/pageicons/laptopwhite.svg" alt="Featured technology product"
         class="w-52 h-52 md:w-72 md:h-72 {{ $darkclass }}">
         </div>
            </div>
        </section>


        <section class="text-center pt-2">
            <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
                Explore
            </p>
            <h2 class="text-3xl md:text-4xl font-semibold text-base-content">
                Our Categories
            </h2>
        </section>

        <!--Catergories card-->
        <section class="grid gap-4 md:grid-cols-2 lg:grid-cols-5">
            <div class="bg-base-200 rounded-[1.75rem] border border-base-300 p-8 min-h-[220px] flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <figure class="justify-start">
                    <img src="{{URL::to('/')}}/pageicons/laptop.svg" alt="Picture of laptop" class="w-16 h-16 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/laptopwhite.svg" alt="Picture of laptop" class="w-16 h-16 {{ $darkclass }}">
                </figure>
                <div>
                    <h3 class="text-xl font-semibold text-base-content">Laptops</h3>
                    <p class="text-base-content/60 mt-1">Powerful, portable, everyday ready.</p>
                </div>
            </div>

            <div class="bg-base-200 rounded-[1.75rem] border border-base-300 p-8 min-h-[220px] flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <figure class="justify-start">
                    <img src="{{URL::to('/')}}/pageicons/cell-phone.svg" alt="Picture of smartphone" class="w-16 h-16 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/cell-phone-white.svg" alt="Picture of smartphone" class="w-16 h-16 {{ $darkclass }}">
                </figure>
                <div>
                    <h3 class="text-xl font-semibold text-base-content">Smartphones</h3>
                    <p class="text-base-content/60 mt-1">Smooth performance in your hand.</p>
                </div>
            </div>

            <div class="bg-base-200 rounded-[1.75rem] border border-base-300 p-8 min-h-[220px] flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <figure class="justify-start">
                    <img src="{{URL::to('/')}}/pageicons/tablet.svg" alt="Picture of tablet" class="w-16 h-16 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/tabletwhite.svg" alt="Picture of tablet" class="w-16 h-16 {{ $darkclass }}">
                </figure>
                <div>
                    <h3 class="text-xl font-semibold text-base-content">Tablets</h3>
                    <p class="text-base-content/60 mt-1">Flexible devices for work and play.</p>
                </div>
            </div>

            <div class="bg-base-200 rounded-[1.75rem] border border-base-300 p-8 min-h-[220px] flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <figure class="justify-start">
                    <img src="{{URL::to('/')}}/pageicons/computer.svg" alt="Picture of desktop computer" class="w-16 h-16 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/computer-white.svg" alt="Picture of desktop computer" class="w-16 h-16 {{ $darkclass }}">
                </figure>
                <div>
                    <h3 class="text-xl font-semibold text-base-content">Desktops</h3>
                    <p class="text-base-content/60 mt-1">Reliable setups for focused work.</p>
                </div>
            </div>

            <div class="bg-base-200 rounded-[1.75rem] border border-base-300 p-8 min-h-[220px] flex flex-col justify-between transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                <figure class="justify-start">
                    <img src="{{URL::to('/')}}/pageicons/headphone.svg" alt="Picture of headphones" class="w-16 h-16 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/headphonewhite.svg" alt="Picture of headphones" class="w-16 h-16 {{ $darkclass }}">
                </figure>
                <div>
                    <h3 class="text-xl font-semibold text-base-content">Audio</h3>
                    <p class="text-base-content/60 mt-1">Clear sound, minimal design.</p>
                </div>
            </div>
        </section>

        <!--Benefits card-->
        <section class="grid gap-4 md:grid-cols-4">
            <div class="bg-base-200 rounded-[1.5rem] border border-base-300 p-6 text-center">
                <figure class="justify-center mb-4">
                    <img src="{{URL::to('/')}}/pageicons/free-shipping.svg" alt="Free delivery icon" class="w-14 h-14 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/free-shipping-white.svg" alt="Free delivery icon" class="w-14 h-14 {{ $darkclass }}">
                </figure>
                <h3 class="text-lg font-semibold text-base-content">Free Delivery</h3>
                <p class="text-base-content/60 mt-2">Over £50 on qualifying orders.</p>
            </div>

            <div class="bg-base-200 rounded-[1.5rem] border border-base-300 p-6 text-center">
                <figure class="justify-center mb-4">
                    <img src="{{URL::to('/')}}/pageicons/cyber-security.svg" alt="Secure checkout icon" class="w-14 h-14 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/cyber-security-white.svg" alt="Secure checkout icon" class="w-14 h-14 {{ $darkclass }}">
                </figure>
                <h3 class="text-lg font-semibold text-base-content">Secure Checkout</h3>
                <p class="text-base-content/60 mt-2">Protected payments and trusted security.</p>
            </div>

            <div class="bg-base-200 rounded-[1.5rem] border border-base-300 p-6 text-center">
                <figure class="justify-center mb-4">
                    <img src="{{URL::to('/')}}/pageicons/shield.svg" alt="Warranty icon" class="w-14 h-14 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/shieldwhite.svg" alt="Warranty icon" class="w-14 h-14 {{ $darkclass }}">
                </figure>
                <h3 class="text-lg font-semibold text-base-content">1-Year Warranty</h3>
                <p class="text-base-content/60 mt-2">Reliable support you can count on.</p>
            </div>

            <div class="bg-base-200 rounded-[1.5rem] border border-base-300 p-6 text-center">
                <figure class="justify-center mb-4">
                    <img src="{{URL::to('/')}}/pageicons/student.svg" alt="Student pricing icon" class="w-14 h-14 {{ $lightclass }}">
                    <img src="{{URL::to('/')}}/pageicons/studentwhite.svg" alt="Student pricing icon" class="w-14 h-14 {{ $darkclass }}">
                </figure>
                <h3 class="text-lg font-semibold text-base-content">Student Pricing</h3>
                <p class="text-base-content/60 mt-2">Affordable technology for modern study.</p>
            </div>
        </section>

        <!--Short About Us Info-->
        <section class="bg-base-200 rounded-[2rem] border border-base-300 px-8 py-14 md:px-12 text-center">
            <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
                About Nova52
            </p>

            <h2 class="text-3xl md:text-4xl font-semibold text-base-content">
                Technology made simple, reliable and accessible.
            </h2>

            <p class="mt-4 text-base-content/70 max-w-2xl mx-auto leading-relaxed">
                At Nova52, we are committed to making high-quality technology accessible to everyone.
                We offer a range of laptops, smartphones, tablets and smart devices designed for students,
                professionals and everyday users.
            </p>
            <!--Button to About Us Page-->
            <div class="mt-8">
                <a class="btn btn-neutral rounded-full px-8" href="{{ URL::to('/about') }}">
                    Learn More
                </a>
            </div>
        </section>

    </section>
</x-layout>