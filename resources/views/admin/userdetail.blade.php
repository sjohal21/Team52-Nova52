<!-- TODO: add page to show users' specific details -->
<x-adminlayout>
    <x-slot:title>
        Manage account for {{$user->name}}
    </x-slot:title>
    <div class="p-5">
        <div class="card bg-base-200 p-5 w-auto text-center">
            <h2 class="text-xl font-bold">{{$user->name}}</h2>
            <div class="card-body">
                <p>ID: #{{$user->id}}</p>
            </div>
        </div>
        <div class="flex flex-row p-5 justify-center">
            <div class="card bg-base-200 p-5 m-5 min-w-md">
                <h2 class="card-title">Customer details</h2>
                <div class="card-body">
                    <p>Name: {{$user->name}}</p>
                </div>
            </div>
            <div class="card bg-base-200 p-5 m-5 min-w-md">
                <h2 class="card-title">User information</h2>
                <div class="card-body">
                    <p>Role: {{$user->role}}</p>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
