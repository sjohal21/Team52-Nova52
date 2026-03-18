<x-adminlayout>
    <x-slot:title>Dashboard</x-slot:title>
    <div class="flex justify-center w-full">
        <div class="flex flex-row w-full justify-center">
            <div class="flex-col w-6/12">
                <div class="card bg-base-200 m-5">
                    <div class="card-body">
                        <h2 class="card-title font-bold justify-center">Pending Orders</h2>
                        <p>{{$pendingOrdersCount}} Pending Orders:</p>
                        <a class="btn btn-ghost bg-black text-white rounded-md" href="{{URL::to('/admin/orders')}}">Manage orders</a>
                    </div>
                </div>
                <div class="card bg-base-200 m-5">
                    <div class="card-body">
                        <h2 class="card-title font-bold justify-center">Low stock items</h2>
                        <p>{{$lowStockCount}} low stock items</p>
                        <a class="btn btn-ghost bg-black text-white rounded-md" href="{{URL::to('/admin/products')}}">View products</a>
                    </div>
                </div>
                <div class="card bg-base-200 m-5">
                    <div class="card-body">
                        <h2 class="card-title font-bold justify-center">Orders in progress</h2>
                        <p>{{$orderInProgressCount}} orders in progress</p>
                        <a class="btn btn-ghost bg-black text-white rounded-md" href="{{URL::to('/admin/orders')}}">Manage orders</a>
                    </div>
                </div>
                <div class="card bg-base-200 m-5">
                    <div class="card-body">
                        <h2 class="card-title font-bold justify-center">Out of stock items</h2>
                        <p>{{$outOfStockCount}} items out of stock</p>
                        <a class="btn btn-ghost bg-black text-white rounded-md" href="{{URL::to('/admin/products')}}">View products</a>
                    </div>
                </div>
            </div>
            <div class="card bg-base-200 m-5 w-6/12">
                <div class="card-body">
                    <h2 class="card-title font-bold justify-center">Recent activity</h2>
                </div>
            </div>
        </div>
    </div>

</x-adminlayout>
