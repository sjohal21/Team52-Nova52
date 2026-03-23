<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <section class="max-w-6xl mx-auto px-4 py-10 md:py-14">
        <div class="grid lg:grid-cols-2 gap-8 items-center">


   <div class="bg-base-200 rounded-[2rem] px-8 py-12 md:px-12 md:py-16">
    <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
        Join Nova52
        </p>
        <!--Account information setup-->
        <h1 class="text-4xl md:text-5xl font-semibold text-base-content leading-tight max-w-lg">
         Create your account and start exploring.
        </h1>

     <p class="mt-6 text-base md:text-lg text-base-content/70 max-w-xl leading-relaxed">
        Sign up to browse the latest technology, manage your account,
          and enjoy a smoother shopping experience with Nova52.
         </p>

  <div class="mt-8">
           <a class="btn btn-outline rounded-full px-7" href="{{ URL::to('/login') }}">
                       Already have an account?
      </a>
      </div>
     </div>

          <!--Form-->
  <div class="bg-base-200 border border-base-300 rounded-[2rem] p-8 md:p-10 shadow-sm">
     <div class="mb-8">
           <h2 class="text-2xl md:text-3xl font-semibold text-base-content">
           Register
        </h2>
       <p class="mt-2 text-sm md:text-base text-base-content/70">
            Fill in your details below to create your account.
        </p>
     </div>

          <form action="{{ route('register.submit') }}" method="post" class="space-y-5">
         @csrf

        <div>
            <label class="block text-sm font-medium text-base-content mb-2">
         Full Name
         </label>
         <input type="text"
          placeholder="Enter your full name"
        name="name"
       class="input input-bordered w-full rounded-2xl bg-base-100"
       required>
     </div>

     <div>
    <label class="block text-sm font-medium text-base-content mb-2">
         Email Address
     </label>
   <input type="email"
          placeholder="Enter your email"
       name="email"
       class="input input-bordered w-full rounded-2xl bg-base-100"
      required>
        </div>

       <div>
     <label class="block text-sm font-medium text-base-content mb-2">
      Password
      </label>
       <input type="password"
        placeholder="Enter your password"
         name="password"
         class="input input-bordered w-full rounded-2xl bg-base-100"
       required>
         </div>

     <div>
      <label class="block text-sm font-medium text-base-content mb-2">
      Confirm Password
        </label>
       <input type="password"
        placeholder="Re-enter your password"
        name="password_confirmation"
        class="input input-bordered w-full rounded-2xl bg-base-100"
       required>
         </div>

          <div>
            <label class="block text-sm font-medium text-base-content mb-2">
          Phone Number
    </label>
        <input type="tel"
         placeholder="Enter your phone number"
     name="phone_number"
  class="input input-bordered w-full rounded-2xl bg-base-100"
     required>
        </div>

     <div>
        <label class="block text-sm font-medium text-base-content mb-2">
          Address <span class="text-base-content/50">(optional)</span>
        </label>
         <input type="text"
         placeholder="Enter your address"
          name="address"
          class="input input-bordered w-full rounded-2xl bg-base-100">
         </div>

        <div class="pt-3">
        <input type="submit"
      class="btn btn-neutral rounded-full px-8 w-full md:w-auto"
    value="Sign Up">
   </div>
   </form>
   </div>

 </div>
     </section>
</x-layout>