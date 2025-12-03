<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div>
        <div class="flex flex-col bg-base-200">
            <a class="text-2xl font-bold" href="{{URL::to("/login")}}">Want to login instead?</a>
            <form method="post">
                <!-- Name, email, password, phone number, address (optional) -->
                <input type="text" placeholder="Name" name="name" class="input" required>
                <input type="email" placeholder="Email" name="email" class="input" required>
                <input type="password" placeholder="Password" name="password" class="input" required>
                <input type="tel" placeholder="Phone Number" name="phone_number" class="input" required>
                <input type="text" placeholder="Address" name="address" class="input">
                <input type="submit" class="btn">
            </form>
        </div>
    </div>
</x-layout>
