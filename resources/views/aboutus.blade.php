 <x-layout>
    <x-slot:title>
        About Us
    </x-slot:title>
     @php
         $lightclass = "dark:hidden block";
         $darkclass = "hidden dark:block";
     @endphp
    <!--About Us-->
    <section class="bg-base-200 rounded-2x1 py-12 px-6 text-center mb-12">
        <h1 class="text-3xl md:text-4x1 font-bold mb-2">
            About Nova52
        </h1>
        <p class="text-sm md:text-base">
            Your trusted source for modern technology
</p>
</section>

<!--Mission at Nova 52-->

<section class="mb-12 text-center max-w-3x1 mx-auto">
    <h2 class="text-2x1 md:text-3x1 font-bold mb-4">
        Our Mission
    </h2>
    <p class="text-sm md:text-base text-center">
        At Nova52, our mission is to make high quality technology accessible to everyone.
        We want to provide a simple, reliable and smooth shopping experience with our wide
        range of devices. </p>

        <p> Our goal is the same no matter if you are a student, a professional
        or a casual user, we want to deliver value, trust and convenience.

    </p>
</section>

<!-- what we offer-->
 <section class="mb-16 max-w-4x1 mx-auto">
    <div class="text-center mb-6">
        <h2 class="text-2x1 md:text-3x1 font-bold mb-6">
            What we offer
        </h2>
        <p class="text-sm md:text-base leading-relaxed">
            At Nova52, we offer a wide range of products designed to support work, study,
            creativity and everyday life. our catalogue includes laptops, smartphones, tablets,
            earphones, headphones and desktop computers. They are all chosen for reliability,
            performance and value. Our goal is to provide products that suit students, professionals
            and everyday users alike.
        </p>
</div>

<!-- images grid-->
 <div class="grid gap-6 md:grid-cols-3">
    <div class="rounded-3x1 overflow-hidden">
        <img src="{{URL::to("/")}}/images/laptop-img.png" alt="Laptop">
</div>

    <div class="rounded-3x1 overflow-hidden">
        <img src="{{URL::to("/")}}/images/heaphones-img.png" alt="Headphones">
</div>
    <div class="rounded-3x1 overflow-hidden">
        <img src="{{URL::to("/")}}/images/phone-img.png" alt="Phone">
</div>
</div>
</section>

<!--Our values-->
<section class="bg-base-200 rounded-2x1 py-12 px-6 mb-16">
    <div class="text-center mb-8">
        <h2 class="text-2x1 md:text-3x1 font-bold">
            Our values
        </h2>
</div>

    <div class="grid gap-8 md:grid-cols-4 text-center text-sm">

    <!-- Quality -->
    <div>
        <img src="{{ URL::to('/') }}/icons/star.svg"  alt="Quality icon" class="w-16 h-16 mx-auto mb-2 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/icons/starwhite.svg" alt="Quality icon" class="w-16 h-16 mx-auto mb-2 {{ $darkclass }}">
        <p class="font-semibold">Quality</p>
        <p>Reliable, trusted tech</p>
    </div>

    <div>
        <img src="{{ URL::to('/') }}/icons/globe.svg" alt="Accessibility icon" class="w-16 h-16 mx-auto mb-2 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/icons/globewhite.svg" alt="Accessibility icon"  class="w-16 h-16 mx-auto mb-2 {{ $darkclass }}">
        <p class="font-semibold">Accessibility</p>
        <p>Fair pricing for all users</p>
    </div>


    <div>
        <img src="{{ URL::to('/') }}/icons/lock.svg"   alt="Security icon"    class="w-16 h-16 mx-auto mb-2 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/icons/lockwhite.svg"  alt="Security icon" class="w-16 h-16 mx-auto mb-2 {{ $darkclass }}">
        <p class="font-semibold">Security</p>
        <p>Secure data protection</p>
    </div>


    <div>
        <img src="{{ URL::to('/') }}/icons/puzzle.svg" alt="Simplicity icon"  class="w-16 h-16 mx-auto mb-2 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/icons/puzzlewhite.svg"  alt="Simplicity icon"  class="w-16 h-16 mx-auto mb-2 {{ $darkclass }}">
        <p class="font-semibold">Simplicity</p>
        <p>Easy to use interface</p>
    </div>

</div>
</section>


<section class="text-center mb-10">
    <h2 class="text-2x1 md:text-3x1 font-bold mb-3">
        Ready to Explore?
    </h2>
    <p class="mb-6 text-sm md:text-base">
        Discover the latest tech at Nova52 today
</p>
<button class="btn btn-neutral rounded full">
    View Products
</button>
</section>
 <div class="max-w-xl bg-base-100 text-base-content">
        <div class="card">
            <div class="card-body">
            </div>
        </div>
    </div>
</x-layout>
