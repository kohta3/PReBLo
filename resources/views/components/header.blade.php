<nav class="navbar navbar-expand-md navbar-light shadow-sm size BackGroundColor border-bottom "  >
    <a class="navbar-brand" href="{{ url('/informations') }}">
        <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>   
    
    
    <div class="collapse navbar-collapse m-0 " style="height: 4.5vw" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav m-0 w-100 h-100  align-middle">
            <!-- Authentication Links -->
            @guest
            <ul class="navbar-nav m-0 w-100 h5">
                <li class="nav-item mr-5">
                    <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-info  shadow text-white">新規登録</button></a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-info  shadow text-white">ログイン</button></a>
                </li>
            </ul>
            <hr>
            @else

            <ul class="navbar-nav m-0 w-100 h5">
                <li class="nav-item mx-3 w-100 h-100 d-flex align-items-center ">
                    <a href="/informations" class="w-100 text-center">
                        トップページ
                    </a>
                </li>

                <li class="nav-item mx-3 w-100 h-100 d-flex align-items-center ">
                    <a href="/Search" class="w-100 text-center" >
                        検  索
                    </a>
                </li>

                <li class="nav-item mx-3 w-100 h-100 d-flex align-items-center ">
                    <a href="/account" class="w-100 text-center" >
                        お気に入り
                    </a>
                </li>

                <li class="nav-item mx-3 w-100 h-100 d-flex align-items-center ">
                    <a href="/account" class="w-100 text-center" >
                        アカウント
                    </a>
                </li>
            </ul>


            <div class="nav-item mr-3 header-navbar w-25 h-100">    
                <span class="bg-light bg-gradient h-100 rounded ">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </span>
            </div>
            @endguest
        </ul>
    </div>
</nav>