<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52 Admin' : 'Nova52 Admin'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar bg-black text-white">
    <div class="dropdown lg:hidden">
        <div tabindex="0" role="button" class="btn bg-black text-white btn-ghost">|||</div>
        <ul class="dropdown-content bg-black text-white rounded w-30" tabindex="-1">
            <a class="btn btn-ghost" href="{{URL::to('/admin/dashboard')}}">Dashboard</a>
        </ul>
    </div>
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl" href="{{URL::to('/admin/dashboard')}}">Nova52 Admin</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <a class="btn btn-ghost" href="{{URL::to('/admin/dashboard')}}">Dashboard</a>
        <a class="btn btn-ghost">Orders</a>
        <a class="btn btn-ghost" href="{{URL::to('/admin/users')}}">Users</a>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <div class="btn btn-ghost" role="button" tabindex="0">
                <img src="{{ URL::to('/') }}/pageicons/profile-picture.svg" alt="Picture for account" class="size-10">
            </div>
            <ul class="dropdown-content menu menu-md rounded-box bg-base-200 p-2 mt-3 text-base-content shadow" tabindex="-1">
                <a class="btn btn-ghost" href="{{URL::to('/logout')}}">Log out</a>
            </ul>
        </div>
    </div>
</nav>
<main class="">
    {{$slot}}
</main>
</body>
