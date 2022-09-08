<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <div class="logo">
        <a href="#" class="navbar-header">
            <img class="nav-item float-left logo1" src="{{asset('resources').'/'}}Image/icon/logo/logoWhite.png" alt="" style="height: 50px;">
            <img class="nav-item d-block float-left" src="{{asset('resources').'/'}}Image/icon/logo/LogoClassicWhite.png" alt="" style="height: 50px;">
        </a>
    </div>
    <nav id="nav-bar">
        <a href="{{asset('')}}Classic-Hotel#home">Home</a>
        <a href="{{asset('')}}Classic-Hotel#book">Book</a>
        <a href="{{asset('')}}Classic-Hotel#rooms">Rooms</a>
        <a href="{{asset('')}}Classic-Hotel#services">Services</a>
        <a href="{{asset('')}}Classic-Hotel#review">Review</a>
        <a href="{{asset('')}}Classic-Hotel#contact">Contact</a>
        <a href="{{asset('')}}Classic-Hotel#aboutus">About us</a>
    </nav>
    <div class="icons">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('Classic-Hotel/dashboard') }}" ><i class="fas fa-tools"></i></a>
            @else
            <a href="{{ route('login') }}">
                <i class="fas fa-user" id="login-btn"></i></a>
            @endauth
        </div>
    @endif
    </div>
</header>
