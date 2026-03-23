<x-adminlayout>
    <x-slot:title>Dashboard</x-slot:title>

    <section class="max-w-7xl mx-auto px-6 py-10 space-y-10">

        <!-- Main admin dashboard header -->
        <div>
 <h1 class="text-3xl md:text-4xl font-semibold text-base-content">
      Admin Dashboard
 </h1>
<p class="text-base-content/70 mt-2">
   Overview of orders, stock levels and recent activity.
     </p>
    </div>

<!-- Information Cards -->
 <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">

 <!-- Pending Orders -->
    <div class="card bg-base-200 border border-base-300 rounded-2xl">
  <div class="card-body text-center">
    <p class="text-sm text-base-content/60">Pending Orders</p>

      <h2 class="text-3xl font-bold">
     {{$pendingOrdersCount}}
      </h2>

      <a class="btn btn-neutral btn-sm rounded-full mt-3"
       href="{{URL::to('/admin/orders')}}">
        Manage Orders
     </a>
     </div>
 </div>

 <!-- Low Stock -->
<div class="card bg-base-200 border border-base-300 rounded-2xl">
  <div class="card-body text-center">
   <p class="text-sm text-base-content/60">Low Stock Items</p>

  <h2 class="text-3xl font-bold">
     {{$lowStockCount}}
     </h2>

      <a class="btn btn-neutral btn-sm rounded-full mt-3"
           href="{{URL::to('/admin/products')}}">
          View Products
          </a>
         </div>
    </div>

 <!-- Orders in Progress -->
<div class="card bg-base-200 border border-base-300 rounded-2xl">
 <div class="card-body text-center">
  <p class="text-sm text-base-content/60">Orders in Progress</p>

      <h2 class="text-3xl font-bold">
         {{$orderInProgressCount}}
     </h2>

      <a class="btn btn-neutral btn-sm rounded-full mt-3"
      href="{{URL::to('/admin/orders')}}">
      Manage Orders
     </a>
</div>
  </div>

<!-- Out of Stock -->
 <div class="card bg-base-200 border border-base-300 rounded-2xl">
   <div class="card-body text-center">
   <p class="text-sm text-base-content/60">Out of Stock Items</p>

     <h2 class="text-3xl font-bold">
    {{$outOfStockCount}}
      </h2>

 <a class="btn btn-neutral btn-sm rounded-full mt-3"
   href="{{URL::to('/admin/products')}}">
   View Products
  </a>
</div>
</div>

</div>

 <!-- Recent Activity -->
<div class="card bg-base-200 border border-base-300 rounded-2xl">

<div class="card-body">

  <h2 class="text-2xl font-semibold mb-6">
      Recent Activity
     </h2>

 <div class="space-y-4">

 @foreach($recentActivities as $activity)

    <div class="bg-base-100 border border-base-300 rounded-xl p-4 flex justify-between items-center">

     <div>
  <p class="font-medium">
     {{$activity->user->name}}
   </p>

   <p class="text-sm text-base-content/70">
   {{$activity->action}}
 </p>
 </div>
</div>

 @endforeach

</div>

 </div>

</div>

    </section>

</x-adminlayout>