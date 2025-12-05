<x-layout>
    <x-slot:title>
        Log In
    </x-slot:title>
    <div>
        <div class="flex justify-center bg-base-200 p-5">
                <form action="{{route('login.submit')}}"  method="post">
                    @csrf
                  
                   <!-- Sucess Messages if form entered correctly-->
                    @if (session('success')) {
                    <div class="text-green-200 mb-3 text-center">
                     {{ session('succcess') }}
                    </div>
                    }
                    @endif
                    
                   <!--Email input with error messages if incorrectly entered -->
                    <input type="email" placeholder="Email address" class="input block m-2" name="email" value="{{ old('email') }}" required>
                    @error('email')
                     <span class="text-red-200 block mb-3 ">{{ $message }}</span>
                    @enderror
                    
                   <!--Password input with error messages if details dont match -->
                    <input type="password" placeholder="Password" class="input block m-2" name="password" required>
                    @error('password')
                     <span class="text-red-200 block mb-3 ">{{ $message }}</span>
                    @enderror

                    <!--Submit Button-->
                    <input type="submit" class="btn" value="Log in">
                </form>
        </div>
    </div>
</x-layout>
