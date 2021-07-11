<nav class="navbar navbar-expand-md navbar-light shadow-sm size BackGroundColor border-bottom "  >
    <a class="navbar-brand" href="{{ url('/home') }}">
        <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>   
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto mr-5 mt-2">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-info  shadow text-white">新規登録</button></a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-info  shadow text-white">ログイン</button></a>
            </li>
            <hr>
            @else
            <li class="nav-item mr-5">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    ログアウト
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </div>
</nav>