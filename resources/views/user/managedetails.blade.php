<x-layout>
    <x-slot:title>
        Manage details
    </x-slot:title>
    <div class="bg-base-300 text-center m-10 p-10">
        <h1 class="text-lg font-bold">User management</h1>
        <div class="flex flex-row justify-center">
            <div class="bg-base-200 m-10 p-10">
                <h2 class="font-bold p-5">Change account details</h2>
                <div class="card bg-base-300 m-5">
                    <div class="card-body">
                        <form action="{{URL::to('/user/modify/email')}}" method="post" class="block">
                            <p class="font-bold">Email address</p>
                            <input type="email" id="email" name="email" value="{{$email}}" class="bg-base-200 m-5 p-2">
                            <button type="submit" class="btn bg-black text-white">Change</button>
                            @csrf
                        </form>
                        @if(session('successEmail'))
                            <p>{{session('successEmail')}}</p>
                        @endif
                    </div>
                </div>

                <div class="card bg-base-300 m-5">
                    <div class="card-body">
                        <form action="{{URL::to('/user/modify/phone')}}" method="post" class="block">
                            <p class="font-bold">Phone number</p>
                            <input type="tel" id="phone" name="phone" value="{{$phone}}" class="bg-base-200 m-5 p-2">
                            <button type="submit" class="btn bg-black text-white">Change</button>
                            @csrf
                        </form>
                        @if(session('successPhone'))
                            <p>{{session('successPhone')}}</p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="bg-base-200 m-10 p-10">
                <h2 class="font-bold p-5">Change password</h2>
                <div class="card bg-base-300">
                    <div class="card-body">
                        @if($user->must_change_password)
                            <p>First login requires password change</p>
                        @endif
                        <form action="{{URL::to('/user/modify/password')}}" method="post" class="block">
                            <p class="font-bold">New password</p>
                            <input type="password" id="password" name="password" class="bg-base-200 m-5 p-2">
                            <p class="font-bold">Confirm password</p>
                            <input type="password" id="passwordConfirm" name="passwordConfirm" class="bg-base-200 m-5 p-2">
                            <div class="card-actions">
                                <button type="submit" class="btn bg-black text-white justify-end m-5">Change</button>
                            </div>
                            @csrf
                        </form>
                        @if(session('successPassword'))
                            <p>{{session('successPassword')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
