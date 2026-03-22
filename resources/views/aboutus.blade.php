<x-layout>
    <x-slot:title>
        About Us
    </x-slot:title>

    @php
        $lightclass = "dark:hidden block";
        $darkclass = "hidden dark:block";
    @endphp

    <section class="max-w-6xl mx-auto px-4 py-10 md:py-14 space-y-10">
<!--Information card-->
 <section class="bg-base-200 rounded-[2rem] px-8 py-14 md:px-14 md:py-20 text-center">
      <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
     About Nova52
       </p>
  <h1 class="text-4xl md:text-6xl font-semibold text-base-content leading-tight max-w-3xl mx-auto">
       Technology made simple,
      reliable and accessible.
  </h1>
  <p class="mt-6 text-base md:text-lg text-base-content/70 max-w-2xl mx-auto leading-relaxed">
   We’re building a modern technology retail experience designed for students,
     professionals and everyday users who value quality, trust and simplicity.
   </p>
     </section>
       <!--Information about Nova52's mission-->
     <section class="grid gap-6 md:grid-cols-2">
  <div class="bg-base-200 border border-base-300 rounded-[1.75rem] p-8 md:p-10">
   <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
      Our Mission
       </p>
      <h2 class="text-2xl md:text-3xl font-semibold text-base-content mb-4">
         Making great technology more accessible.
     </h2>
     <p class="text-base-content/70 leading-relaxed">
      At Nova52, our mission is to make high-quality technology accessible to everyone.
  We aim to provide a simple, reliable and smooth shopping experience through a carefully
   selected range of modern devices. Whether you are a student, a professional or a casual
  user, our goal is to deliver value, trust and convenience.
   </p>
    </div>

    <div class="bg-base-200 border border-base-300 rounded-[1.75rem] p-8 md:p-10">
            We Offer
          </p>
      <h2 class="text-2xl md:text-3xl font-semibold text-base-content mb-4">
          Curated technology for everyday life.
     </h2>
    <p class="text-base-content/70 leading-relaxed">
       At Nova52, we offer a wide range of products designed to support work, study,
       creativity and everyday life. Our catalogue includes laptops, smartphones,
       tablets, earphones, headphones and desktop computers — all chosen for their
    reliability, performance and value.
      </p>
    </div>
  </section>

        
 <section class="space-y-5">
 <div class="text-center">
       <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
      Our Selection
       </p>
       <h2 class="text-3xl md:text-4xl font-semibold text-base-content">
     Designed for modern needs.
    </h2>
  </div>
         <!--Hover cards for products we sell-->
          <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-[1.75rem] overflow-hidden bg-base-200 border border-base-300">
   <img src="{{URL::to('/')}}/images/laptop-img.png" alt="Laptop"
          class="w-full h-72 object-cover">
    <div>
    <div class="rounded-[1.75rem] overflow-hidden bg-base-200 border border-base-300">
    <img src="{{URL::to('/')}}/images/heaphones-img.png" alt="Headphones"
       class="w-full h-72 object-cover">
     </div>
    <div class="rounded-[1.75rem] overflow-hidden bg-base-200 border border-base-300">
      <img src="{{URL::to('/')}}/images/phone-img.png" alt="Phone"
      class="w-full h-72 object-cover">
      </div>
     </div>
    </section>

        <!--Values-->
 <section class="bg-base-200 border border-base-300 rounded-[2rem] px-8 py-12 md:px-10 md:py-14">
   <div class="text-center mb-10">
  <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
   Our Values
 </p>
     <h2 class="text-3xl md:text-4xl font-semibold text-base-content">
       Built around what matters most.
    </h2>
     </div>

 <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 text-center">

     <div class="bg-base-100 rounded-[1.5rem] border border-base-300 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">
     <div class="flex justify-center mb-4">
        <img src="{{ URL::to('/') }}/pageicons/star.svg" alt="Quality icon" class="w-14 h-14 {{ $lightclass }}">
          <img src="{{ URL::to('/') }}/pageicons/starwhite.svg" alt="Quality icon" class="w-14 h-14 {{ $darkclass }}">
        </div>
         <h3 class="text-lg font-semibold text-base-content mb-2">Quality</h3>
       <p class="text-sm text-base-content/70">Reliable, trusted technology chosen for performance and durability.</p>
    </div>
     <div class="bg-base-100 rounded-[1.5rem] border border-base-300 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">
        <div class="flex justify-center mb-4">
            <img src="{{ URL::to('/') }}/pageicons/globe.svg" alt="Accessibility icon" class="w-14 h-14 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/pageicons/globewhite.svg" alt="Accessibility icon" class="w-14 h-14 {{ $darkclass }}">
       </div>
           <h3 class="text-lg font-semibold text-base-content mb-2">Accessibility</h3>
       <p class="text-sm text-base-content/70">Fair pricing and products designed for a wide range of users.</p>
     </div>

     <div class="bg-base-100 rounded-[1.5rem] border border-base-300 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">
       <div class="flex justify-center mb-4">
     <img src="{{ URL::to('/') }}/pageicons/lock.svg" alt="Security icon" class="w-14 h-14 {{ $lightclass }}">
         <img src="{{ URL::to('/') }}/pageicons/lockwhite.svg" alt="Security icon" class="w-14 h-14 {{ $darkclass }}">
     </div>
     <h3 class="text-lg font-semibold text-base-content mb-2">Security</h3>
     <p class="text-sm text-base-content/70">Safe systems and secure data protection at every stage.</p>
     </div>

      <div class="bg-base-100 rounded-[1.5rem] border border-base-300 p-6 transition duration-300 hover:-translate-y-1 hover:shadow-lg">
        <div class="flex justify-center mb-4">
          <img src="{{ URL::to('/') }}/pageicons/puzzle.svg" alt="Simplicity icon" class="w-14 h-14 {{ $lightclass }}">
        <img src="{{ URL::to('/') }}/pageicons/puzzlewhite.svg" alt="Simplicity icon" class="w-14 h-14 {{ $darkclass }}">
    </div>
        <h3 class="text-lg font-semibold text-base-content mb-2">Simplicity</h3>
    <p class="text-sm text-base-content/70">A smooth, intuitive experience that feels easy from start to finish.</p>
       </div>

</div>
 </section>

 <section class="text-center bg-base-200 border border-base-300 rounded-[2rem] px-8 py-14">
 <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
                Ready to Explore?
</p>
    <h2 class="text-3xl md:text-4xl font-semibold text-base-content">
                Discover the latest tech with Nova52.
   </h2>
       <p class="mt-4 text-base-content/70 max-w-2xl mx-auto">
                   Browse our collection of student-friendly, high-quality technology designed for modern everyday use.
    </p>
      <div class="mt-8">
         <a class="btn btn-neutral rounded-full px-8" href="{{URL::to('/products')}}">
        View Products
         </a>
    </div>
    </section>

    </section>
</x-layout>