<x-layout>
    <x-slot:title>
        Log In
    </x-slot:title>
    <div>
        <div class="flex justify-center bg-base-200 p-5">
                <form method="post">
                    <input type="email" placeholder="Email address" class="input block m-2" name="email" required>
                    <input type="password" placeholder="Password" class="input block m-2" name="password" required>
                    <input type="submit" class="btn" value="Log in">
                    @csrf
                </form>
        </div>
    </div>
</x-layout>
