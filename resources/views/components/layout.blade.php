<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52' : 'Nova52'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="invisible hidden">
        <!-- Set up number of items in the basket -->
        {{$basketId = session('basket_id')}}
        {{$basket = App\Models\Basket::with('items.product')->find($basketId)}}
        @if($basket != null)
            {{$items = $basket->totalItems()}}
        @else
            {{$items = 0}}
        @endif
    </div>
</head>
<body>
    <nav class="navbar bg-black text-white">
        <div class="dropdown lg:hidden">
            <div tabindex="0" role="button" class="btn bg-black text-white btn-ghost">|||</div>
            <ul class="dropdown-content bg-black text-white rounded w-30" tabindex="-1">
                <a class="btn btn-ghost" href="{{URL::to('/')}}">Home</a>
                <a class="btn btn-ghost" href="{{URL::to('/products')}}">Products</a>
                <a class="btn btn-ghost" href="{{URL::to('/about')}}">About Us</a>
                <a class="btn btn-ghost" href="{{URL::to('/contact')}}">Contact</a>
                <a class="btn btn-ghost">Wish List</a>
            </ul>
        </div>
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl" href="/">Nova52</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <a class="btn btn-ghost" href="{{URL::to('/')}}">Home</a>
            <a class="btn btn-ghost" href="{{URL::to('/products')}}">Products</a>
            <a class="btn btn-ghost" href="{{URL::to('/about')}}">About Us</a>
            <a class="btn btn-ghost" href="{{URL::to('/contact')}}">Contact</a>
            <a class="btn btn-ghost">Wish List</a>
        </div>
        <div class="navbar-end">
            <a class="btn btn-ghost" href="{{URL::to('/basket')}}"><img src="{{ URL::to('/') }}/pageicons/cart.svg" alt="Picture of a shopping cart" class="size-10"></a>
            @if($items == 1)
                <p class="text-sm p-3">{{$items}} item</p>
            @elseif($items > 1)
                <p class="text-sm p-3">{{$items}} items</p>
            @endif
            <div class="dropdown dropdown-end">
                <div class="btn btn-ghost" role="button" tabindex="0">
                    <img src="{{ URL::to('/') }}/pageicons/profile-picture.svg" alt="Picture for account" class="size-10">
                </div>
                <ul class="dropdown-content menu menu-md rounded-box bg-base-200 p-2 mt-3 text-base-content shadow" tabindex="-1">
                    @guest<a class="btn btn-ghost" href="{{URL::to('/login')}}">Log in</a>@endguest
                    @guest<a class="btn btn-ghost" href="{{URL::to('/register')}}">Register</a>@endguest
                    @auth<a class="btn btn-ghost" href="{{URL::to('/logout')}}">Log out</a>@endauth
                </ul>
            </div>
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
            <a href="{{ route('faq') }}" class="link link-hover">FAQ
            <a href="{{ route('shipping.returns') }}" class="link link-hover">Shipping &amp; Returns</a>            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Terms & Conditions</a>
        </nav>
        <nav>
            <h4 class="font-bold">Follow us</h4>
            <div class="grid grid-flow-col gap-4">
                <a class="link link-hover"><img src="{{URL::to("/")}}/pageicons/facebookwhite.svg" alt="Facebook logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/pageicons/twitterwhite.svg" alt="Twitter/X logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/pageicons/instagramwhite.svg" alt="Instagram logo" class="w-10 h-10"></a>
                <a class="link link-hover"><img src="{{URL::to("/")}}/pageicons/linkedinwhite.svg" alt="LinkedIn logo" class="w-10 h-10"></a>
            </div>
        </nav>
    </footer>
</body>
