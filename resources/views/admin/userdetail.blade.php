<!-- TODO: add page to show users' specific details and allow promotion and demotion -->
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
                    @isset($success)
                        @if($success="User has been successfully promoted!")
                            <p>{{$success}}</p>
                        @elseif($success="User has been successfully demoted")
                            <p>{{$success}}</p>
                        @endif
                    @endisset
                    @if($errors->any())
                        <p>{{$errors->first('error')}}</p>
                    @endif


                </div>
                <div class="card-actions">
                    @if($user->role = "Admin")
                        <form method="post" action="{{URL::to('/admin/users/demote')}}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="submit" class="btn bg-red-400 text-white rounded-md" value="Demote">
                        </form>
                    @elseif($user->role="Customer")
                        <form method="post" action="{{URL::to('/admin/users/promote')}}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="submit" class="btn bg-red-400 text-white rounded-md" value="Promote">
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
