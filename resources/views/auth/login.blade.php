<x-layout>
    <x-slot:title>
        Log In
    </x-slot:title>
    <div>
        <div class="flex flex-col bg-base-200">
            <div>
                <form method="post">
                    <input type="email" placeholder="Email address" class="input" name="email">
                    <input type="password" placeholder="Password" class="input" name="password">
                    <input type="submit" class="btn">
                </form>
            </div>
    </div>
</x-layout>
