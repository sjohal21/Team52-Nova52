<x-layout>
    <x-slot:title>
        Log In
    </x-slot:title>
    <div>
<<<<<<< HEAD
        <div class="flex flex-col bg-base-200">
            <div>
                <form method="post">
                    <input type="email" placeholder="Email address" class="input" name="email">
                    <input type="password" placeholder="Password" class="input" name="password">
                    <input type="submit" class="btn">
                </form>
            </div>
=======
        <div class="flex justify-center bg-base-200 p-5">
                <form method="post">
                    <input type="email" placeholder="Email address" class="input block m-2" name="email" required>
                    <input type="password" placeholder="Password" class="input block m-2" name="password" required>
                    <input type="submit" class="btn" value="Log in">
                    @csrf
                </form>
        </div>
>>>>>>> 6070bd9611aec0a87a7390f02cea06c1377309c8
    </div>
</x-layout>
