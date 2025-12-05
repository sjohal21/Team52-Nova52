<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    
<!-- Thank You For Your Order -->
    <div class="w-full bg-base-300 py-20 text-center">
        <h1 class="text-4xl font-bold">Thank you for your Order!</h1>
        <p class="text-lg mt-2">Your order has been placed</p>
    </div>

    <!-- Main Card Container -->
    <div class="flex justify-center py-10">
        <div class="w-full max-w-3xl bg-base-300 p-10 rounded-2xl shadow">

            <h2 class="text-3xl font-bold text-center mb-6">Order Confirmation</h2>

            <!-- Order ID -->
            <p class="text-center text-lg font-semibold">Your Order Number:</p>
            <p class="text-center text-2xl font-bold mt-2">
                {{$order->id}} <!-- Placeholder -->
            </p>

            <p class="text-center text-sm  mt-4 font-bold">
                (An email confirmation has been sent to you)
            </p>

            <!-- Button -->
            <div class="flex justify-center mt-8">
                <a href="/" class="bg-black text-white py-3 px-6 rounded-xl text-lg hover:bg-gray-800 transition">
                    Continue Shopping
                </a>
            </div>

        </div>
    </div>

</x-layout>