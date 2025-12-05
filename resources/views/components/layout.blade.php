<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52' : 'Nova52'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <nav class="navbar bg-black text-white">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl" href="/">Nova-52</a>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost" href="{{URL::to('/')}}">Home</a>
            <a class="btn btn-ghost" href="{{route(products.index)}}">Products</a>
            <a class="btn btn-ghost" href="{{URL::to('/about')}}">About Us</a>
            <a class="btn btn-ghost" href="{{URL::to('/contact')}}">Contact</a>
            <a class="btn btn-ghost">Wish List</a>
        </div>
        <div class="navbar-end">
            <a class="btn btn-ghost" href="{{URL::to('/basket')}}"><img src="{{ URL::to('/') }}/icons/cart.svg" alt="Picture of a shopping cart" class="size-10"></a>
            <a class="btn btn-ghost" href="{{URL::to('/register')}}"><img src="{{ URL::to('/') }}/icons/profile-picture.svg" alt="Picture for account" class="size-10"></a>
            <a class="btn btn-ghost" href="{{URL::to('/logout')}}">Log out</a>
        </div>
    </nav>
    <main class="">
        {{$slot}}
    </main>
    <footer class="footer sm:footer-horizontal bg-black text-white p-10">
        <aside>
            <h1 class="text-3xl font-bold">Nova52</h1>
            <p class="text-2xl font-light">Your trusted source for modern technology</p>
            <p class="font-light">©2025 Nova52, all rights reserved.</p>
        </aside>
        <nav>
            <h4 class="font-bold">Quick links</h4>
            <a class="link link-hover" href="{{URL::to('/')}}">Home</a>
            <a class="link link-hover" href="{{URL::to('/products')}}">Products</a>
            <a class="link link-hover" href="{{URL::to('/about')}}">About us</a>
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
                <a class="link link-hover"><img src="{{URL::to("/")}}/icons/facebookwhite.svg" alt="Facebook logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/icons/twitterwhite.svg" alt="Twitter/X logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/icons/instagramwhite.svg" alt="Instagram logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/icons/linkedinwhite.svg" alt="LinkedIn logo" class="w-10 h-10"></a>
            </div>
        </nav>
    </footer>
</body>
