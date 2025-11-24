<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52' : 'Nova52'}}</title>
    <!-- Set up daisyUI for CSS components building on Laravel's Tailwind support -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex flex-col ">
    <nav class="navbar bg-black text-white">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl" href="/">Nova-52</a>
        </div>
        <div class="navbar-center">
            <button class="btn btn-ghost">Home</button>
            <button class="btn btn-ghost">Products</button>
            <button class="btn btn-ghost">About Us</button>
            <button class="btn btn-ghost">Contact</button>
            <button class="btn btn-ghost">Wish List</button>
        </div>
        <div class="navbar-end">
            <button class="btn btn-ghost">Cart</button>
            <button class="btn btn-ghost"><img src="{{ URL::to('/') }}/profile-picture.svg" alt="Picture for account" class="size-[1.2em]"></button>
        </div>
    </nav>
    <main class="flex-1 container mx-auto px-4 py-8">
        {{$slot}}
    </main>
</body>
