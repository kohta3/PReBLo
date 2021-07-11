<div class="footer-posi">
    <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm text-center border-top">
        @auth
        <a class="navbar-brand mx-auto"   href="{{ url('/') }}">
            <img src="{{asset('img/logo.png')}}" class="img-fuild"  style=width:15%;hight:auto;>
        </a>    
        @endauth
        @guest
        <a class="navbar-brand mx-auto"   href="{{ url('/') }}">
            <img src="{{asset('img/logo.png')}}" class="img-fuild"  style=width:15%;hight:auto;>
        </a>
        @endguest
    </nav>
</div>