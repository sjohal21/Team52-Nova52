<x-layout>
    <x-slot:title>
        Manage details
    </x-slot:title>
    <div class="bg-base-300 text-center m-10 p-10">
        <h1 class="text-lg font-bold">User management</h1>
        <div class="flex flex-row justify-center">
            <div class="bg-base-200 m-10 p-10">
                <h2 class="font-bold">Change account details</h2>
                <form action="{{URL::to('/user/modify/email')}}" method="post">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email">
                    <button type="submit">Change</button>
                    @csrf
                </form>
            </div>
            <div class="bg-base-200 m-10 p-10">
                <h2 class="font-bold">Change password</h2>
            </div>
        </div>
    </div>
</x-layout>
