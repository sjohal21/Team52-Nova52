<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div>
        <div class="flex justify-center bg-base-200 p-5">
            <a class="text-2xl font-bold underline" href="{{URL::to("/login")}}">Want to login instead?</a>
            <div class="">
                <form action="{{route('register.submit')}}" method="post">
                    <!-- Name, email, password, phone number, address (optional) -->
                    <input type="text" placeholder="Name" name="name" class="input block m-2" required>
                    <input type="email" placeholder="Email" name="email" class="input block m-2" required>
                    <input type="password" placeholder="Password" name="password" class="input block m-2" required>
                    <input type="password" placeholder="Password confirmation" name="password_confirmation" class="input block m-2" required>
                    <input type="tel" placeholder="Phone Number" name="phone_number" class="input block m-2" required>
                    <input type="text" placeholder="Address" name="address" class="input block m-2">
                    <input type="submit" class="btn block m-2" value="Sign Up">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</x-layout>
