<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52' : 'Nova52'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex flex-col ">
    <nav class="navbar bg-black text-white">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl" href="/">Nova-52</a>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost">Home</a>
            <a class="btn btn-ghost">Products</a>
            <a class="btn btn-ghost">About Us</a>
            <a class="btn btn-ghost" href="{{URL::to('/contact')}}">Contact</a>
            <a class="btn btn-ghost">Wish List</a>
        </div>
        <div class="navbar-end">
            <a class="btn btn-ghost"><img src="{{ URL::to('/') }}/cart.svg" alt="Picture of a shopping cart" class="size-10"></a>
            <a class="btn btn-ghost"><img src="{{ URL::to('/') }}/profile-picture.svg" alt="Picture for account" class="size-10"></a>
        </div>
    </nav>
    <main class="flex-1 container mx-auto px-4 py-8">
        {{$slot}}
    </main>
    <footer class="footer sm:footer-horizontal bg-black text-white p-10">
        <aside>
            <h1 class="text-3xl font-bold">Nova52</h1>
            <p class="text-2xl font-light">(tagline)</p>
        </aside>
        <nav>
            <h4 class="font-bold">Quick links</h4>
            <a class="link link-hover">Home</a>
            <a class="link link-hover">Products</a>
            <a class="link link-hover">About us</a>
            <a class="link link-hover" href="{{URL::to('/contact')}}">Contact</a>
            <a class="link link-hover">Wish list</a>
            <a class="link link-hover">Admin log in</a>
        </nav>
        <nav>
            <h4 class="font-bold">Support</h4>
            <a class="link link-hover">FAQ</a>
            <a class="link link-hover">Shipping & returns</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Terms & Conditions</a>
        </nav>
        <nav>
            <h4 class="font-bold">Follow us</h4>
            <div class="grid grid-flow-col gap-4">
                <a class="link link-hover">Social1</a>
                <a class="link link-hover">Social2</a>
            </div>
        </nav>
    </footer>
</body>
