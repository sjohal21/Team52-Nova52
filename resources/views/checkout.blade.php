<x-layout>

    <x-slot:title>
        checkout
    </x-slot:title>

    <div class = "flex flex-row p-8 rounded-xl mt-10 w-11/12 mx-auto gap-40">
        <!--Display products-->
        <div id = "product display" class = "flex-1 bg-base-300 p-6 rounded-xl shadow">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold text-center">Your Order</h1>
                    <div class="divider"></div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        @foreach($basketItems as $item)
                            <span>{{$item->product->name}}</span>
                            <span>Quantity: {{$item->amount}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div id = "OrderSummary" class="flex-1 bg-base-300 p-6 rounded-xl shadow">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold text-center">Order Summary</h1>
                    <div class="divider"></div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>Subtotal:</span>
                        <span>{{$subtotal}}</span>
                    </div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>Delivery Fee</span>
                        <span>{{$deliveryFee}}</span>
                    </div>
                    <div class="flex justify-between mb-10 font-bold text-lg">
                        <span>VAT(20%)</span>
                        <span>{{$vat}}</span>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span>{{$total}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id = "Bottom half" class = "p-8 rounded-xl mt-10 w-11/12 mx-auto">
        <div id = DeliveryInfo class="flex-auto bg-base-300 p-2 rounded-xl w-full">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold text-center">Delivery Information</h1>
                    <form id="DeliveryForm">
                        <div class = "flex flex-row gap-4">
                            <input type="text" name="First_Name" placeholder="First Name" class="input input-bordered w-full max-w-xs mb-4" required/>
                            @error('First_Name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <input type="text" name="Surname" placeholder="Surname" class="input input-bordered w-full max-w-xs mb-4" required/>
                            @error('Surname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <input type="email" name="Email_Address" placeholder="Email Address" class="input input-bordered w-full mb-4" required/>
                        @error('Email_Address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="tel" name="Phone_Number" placeholder="Phone Number" class="input input-bordered w-full mb-4" required/>
                        @error('Phone_Number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" name="Address_Line_1" placeholder="Address Line 1" class="input input-bordered w-full mb-4" required/>
                        @error('Address_Line_1')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" name="Address_Line_2" placeholder="Address Line 2" class="input input-bordered w-full mb-4"/>
                        @error('Address_Line_2')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <div class = "flex flex-row gap-4">
                            <input type="text" name="City" placeholder="City" class="input input-bordered w-full max-w-xs mb-4" required/>
                              @error('City')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                              @enderror

                            <input type="text" name="Postcode" placeholder="Postcode" class="input input-bordered w-full max-w-xs mb-4" required/>
                                @error('Postcode')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                        <select name="Select_Country" class="select select-bordered w-full mb-4" required>
                            <option disabled selected>Country</option>
                            <option value = "UK">United Kingdom</option>
                            <option value = "US">United States</option>
                            <option value = "Canada">Canada</option>
                            <option value = "AUS">Australia</option>
                        </select>
                        @error('Select_Country')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>

        <div id = PaymentMethod class ="flex-auto bg-base-300 p-2 rounded-xl w-full mt-10">
            <div class="card">
                    <div class="card-body">
                        <h1 class = "text-2xl font-bold text-center mb-4">Payment Method</h1>

                        <form id="PaymentForm" action="{{ route('placeorder') }}" method="POST">
                            @CSRF
                            <div class ="flex gap-4">
                                <input type="text" name="Card_Name" placeholder="Name as seen on the card" class=" flex-3 input input-bordered mb-4" required/>
                                @error('Card_Name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror

                                <input type="number" name="CVV" placeholder="CVV" class="  input input-bordered mb-4" required/>
                                @error('CVV')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror

                            </div>
                            <input type="number" name="Card_Number" placeholder="Card Number" class="w-full input input-bordered mb-4" required/>
                            @error('Card_Number')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <input type="text" name="Expiry_Date" placeholder="Expiry Date (MM/YY)" class="input input-bordered mb-4 w-115" required/>
                            @error('Expiry_Date')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <div class="flex justify-center mt-8">
                                <button type="button" onclick="submitPayment()" class=" bg-black text-white px-8 py-2.5 rounded-xl shadow-md hover:bg-gray-900" on>Place Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
