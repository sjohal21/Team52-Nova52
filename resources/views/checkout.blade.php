<x-layout>

    <x-slot:title>
        checkout
    </x-slot:title>

    <div class = "flex flex-row gap-40">
        <div id = DeliveryInfo class="flex-1 bg-base-300 p-6 rounded-xl shadow">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold text-center">Delivery Information</h1>
                    <form>
                        <div class = "flex flex-row gap-4">
                            <input type="text" placeholder="Full Name" class="input input-bordered w-full max-w-xs mb-4"/>
                            <input type="text" placeholder="Surname" class="input input-bordered w-full max-w-xs mb-4"/>
                        </div>
                        <input type="email" placeholder="Email Address" class="input input-bordered w-full mb-4"/>
                        <input type="tel" placeholder="Phone Number" class="input input-bordered w-full mb-4"/>
                        <input type="text" placeholder="Address Line 1" class="input input-bordered w-full mb-4"/>
                        <input type="text" placeholder="Address Line 2" class="input input-bordered w-full mb-4"/>
                        <div class = "flex flex-row gap-4">
                            <input type="text" placeholder="City" class="input input-bordered w-full max-w-xs mb-4"/>
                            <input type="text" placeholder="postcode" class="input input-bordered w-full max-w-xs mb-4"/>
                        </div>
                        <select class="select select-bordered w-full mb-4">
                            <option disabled selected>Country</option>
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div id = OrderSummary class="flex-1 bg-base-300 p-6 rounded-xl shadow">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold text-center">Order Summary</h1>
                    <div class="divider"></div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>Subtotal:</span>
                        <span>£200</span>
                    </div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>Delivery Fee</span>
                        <span>Placeholder</span>
                    </div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>VAT(20%)</span>
                        <span>Placeholder</span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span>Placeholder</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id = PayemntMethod class ="bg-base-300 p-6 rounded-xl shadow mt-15">
         <div class="card">
                <div class="card-body">
                    <h1 class = "text-2xl font-bold text-center">Payment Method</h1>
                    <form>
                        <div class ="flex gap-4">
                            <input type="text" placeholder="Name as seen on the card" class=" flex-3 input input-bordered mb-4"/>
                            <input type="number" placeholder="CVV" class="  input input-bordered mb-4"/>
                    </form>
                </div>
            </div>
    </div>
</x-layout>