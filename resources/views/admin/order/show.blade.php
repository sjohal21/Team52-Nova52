<x-adminlayout>
    <x-slot:title>
        Order details
    </x-slot:title>
    <h1 class="mb-5 mt-5 font-bold text-2xl text-center"> Order details for #{{$order->id}}</h1>
    <div class="card mt-5 p-5 bg-base-200">
        <h2 class="text-center text-2xl font-bold">
            Customer details
        </h2>
        <div class="card-body">
            <div class="flex flex-row justify-center">
                <div class="card bg-base-300 m-5 p-2 min-w-64 text-center">
                    <div class="card-body">
                        <p class="font-bold">Address:</p>
                        <p>{{$order->Address_Line_1}}</p>
                        <p>{{$order->Address_Line_2}}</p>
                        <p>{{$order->City}}</p>
                        <p>{{$order->Select_Country}}</p>
                        <p>{{$order->Postcode}}</p>
                    </div>
                </div>
                <div class="card bg-base-300 m-5 p-2 min-w-64 text-center">
                    <div class="card-body">
                        <p class="font-bold">Customer name:</p>
                        <p>{{$order->First_Name}} {{$order->Surname}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-5 p-5 bg-base-200">
        <h2 class="text-center text-2xl font-bold">
            Order details
        </h2>
        <div class="card-body flex flex-col">
            @foreach($order->Orderitems as $orderItem)
                <div class="card m-5 p-5 bg-base-300">
                    <h3 class="card-title">{{$orderItem->product->name}}</h3>
                    <div class="card-body">
                        <p class="font-bold">Quantity: {{$orderItem->amount}}</p>
                        <p>£{{$orderItem->price}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card mt-5 p-5 bg-base-200">
        <h2 class="text-center text-2xl font-bold">
            Process order
        </h2>
        <div class="card-body flex flex-col">
            <div class="card m-5 p-5 bg-base-300">
                <h3 class="card-title">Order status</h3>
                <div class="card-body">
                    <form method="post" action="{{URL::to("/admin/orders/updateStatus/{$order->id}")}}">
                        <label for="status">Order status</label>
                        <select name="status" id="status" class="select">
                            @foreach($possibleStatus as $status)
                                @if($status == $order->status)
                                    <option value="{{$status}}" selected>{{$status}}</option>
                                @else
                                    <option value="{{$status}}">{{$status}}</option>
                                @endif
                            @endforeach
                        </select>
                        @csrf
                        <input type="submit" class="btn bg-black text-white rounded-md" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
