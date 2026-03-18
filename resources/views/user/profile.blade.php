<x-layout>
    <x-slot:title>
        Profile
    </x-slot:title>
    <div class="p-5">
        <h1 class="text-2xl font-bold">User profile</h1>
        <h2 class="text-xl font-bold mt-5">{{$user->name}}</h2>
        <div class="p-5 flex flex-row justify-center">
            <div class="card bg-base-200 m-5 p-5 min-w-80">
                <div class="card-title">
                    <h3 class="card-title">Reviews</h3>
                </div>
                <div class="card-body">
                    <p></p>
                </div>
                <div class="card-actions">
                    <a class="btn" href="{{URL::to('/user/reviews')}}">Manage reviews</a>
                </div>
            </div>
            <div class="card bg-base-200 m-5 p-5 min-w-80">
                <div class="card-title">
                    <h3 class="card-title">Previous orders</h3>
                </div>
                <div class="card-body">
                    <p class="font-bold">Most recent order</p>
                    @if(count($user->orders))
                        <p>Order #{{$user->orders->last()->id}}</p>
                        <p>£{{$user->orders->last()->total_price}}</p>
                    @else
                        <p>No recent order</p>
                    @endif
                </div>
                <div class="card-actions">
                    <a class="btn" href="{{URL::to('/user/orders')}}">View all orders</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
