<x-layout>
    <x-slot:title>
        Log In
    </x-slot:title>

    <section class="max-w-6xl mx-auto px-4 py-10 md:py-14">
      <div class="grid lg:grid-cols-2 gap-8 items-center">

  <div class="bg-base-200 rounded-[2rem] px-8 py-12 md:px-12 md:py-16">
   <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
         Welcome Back
     </p>

      <h1 class="text-4xl md:text-5xl font-semibold text-base-content leading-tight max-w-lg">
      Log in and continue your Nova52 experience.
      </h1>

     <p class="mt-6 text-base md:text-lg text-base-content/70 max-w-xl leading-relaxed">
     Access your account, explore saved products and continue browsing the latest technology with ease.
     </p>

     <div class="mt-8">
     <a class="btn btn-outline rounded-full px-7" href="{{ URL::to('/register') }}">
      Need an account?
      </a>
      </div>
     </div>

     <!--Login Information-->
      <div class="bg-base-200 border border-base-300 rounded-[2rem] p-8 md:p-10 shadow-sm">
     <div class="mb-8">
    <h2 class="text-2xl md:text-3xl font-semibold text-base-content">
       Log In
     </h2>
    <p class="mt-2 text-sm md:text-base text-base-content/70">
        Enter your details below to access your account.
     </p>
    </div>

      <form action="{{ route('login.submit') }}" method="post" class="space-y-5">
                    @csrf

                    <!--Successful Login to the account-->
                    @if (session('success'))
                        <div class="rounded-2xl bg-success/15 border border-success/30 px-4 py-3 text-sm text-success-content">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-base-content mb-2">
                            Email Address
                        </label>
                        <input type="email"
                placeholder="Enter your email"
                name="email"
                 value="{{ old('email') }}"
              class="input input-bordered w-full rounded-2xl bg-base-100"
           required>
            @error('email')
         <span clas="text-error text-sm block mt-2">{{ $message }}</span>
      @enderror
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

           <div class="flex justify-end">
    <a href="{{ route('password.request') }}"
       class="text-sm text-base-content/70 hover:text-base-content underline underline-offset-4">
        Forgot password?
    </a>
</div>
          @error('password')
      <span class="text-error text-sm block mt-2">{{ $message }}</span>
     @enderror
       </div>

         <div class="pt-3">
         <input type="submit"
              class="btn btn-neutral rounded-full px-8 w-full md:w-auto"
          value="Log In">
          </div>
          </form>
     </div>

        </div>
    </section>
</x-layout>