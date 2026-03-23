<x-layout>
    <x-slot:title>
        Forgot Password
    </x-slot:title>

 <section class="max-w-3xl mx-auto px-4 py-12">
   <div class="bg-base-200 border border-base-300 rounded-[2rem] p-8 md:p-10 text-center">
     <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
     Account Recovery
      </p>

  <h1 class="text-3xl md:text-4xl font-semibold text-base-content">
        Forgot your password?
      </h1>

  <p class="mt-4 text-base-content/70 max-w-xl mx-auto">
   Enter your email address and we’ll help you reset your password.
     </p>

<form action="{{ route('password.email') }}" method="POST" class="mt-8 space-y-5 max-w-xl mx-auto">
   @csrf

       <div>
     <input
       type="email"
       name="email"
   placeholder="Enter your email address"
    class="input input-bordered w-full rounded-2xl bg-base-100"
   required
      >
    </div>

 <div>
     <button type="submit" class="btn btn-neutral rounded-full px-8">
 Send Reset Link
    </button>
    </div>
    </form>
    </div>
    </section>
</x-layout>