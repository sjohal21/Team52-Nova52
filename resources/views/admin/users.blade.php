<x-adminlayout>
    <div class="p-5 m-5 bg-base-200">
        @foreach($users as $user)
            <div class="card bg-base-300 m-5 p-5">
                <div class="card-title">
                    <h1>{{$user->name}}</h1>
                </div>
                <div class="card-body">

                </div>
                <div class="card-actions">
                    <a class="btn bg-black text-white rounded-md" href="{{URL::to("/admin/users/{$user->id}")}}">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</x-adminlayout>
