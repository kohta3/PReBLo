<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PReBLo</title>
    
</head>

<body>
    @extends('layouts.app')

    @section('content')
    @guest
        <div class="carousel slide carousel-fade" data-pause=false data-interval=3000  data-ride="carousel" style="width:100%">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-85 img-fluid" src="{{asset('img/carucell01.jpg')}}" alt="d-block img-fluid">
                    <div class="card-img-overlay">
                        <p class="text-white  h1">PReBLo<br>Place<br>Recomend<br>By<br>Local</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-85 img-fluid" src="{{asset('img/carucell02.jpg')}}" alt="d-block img-fluid">
                    <div class="card-img-overlay ">
                        <p class="text-white  h1">Could you tell me way to the toilet?<br class="m-5">&nbsp;&nbsp;&nbsp;&nbsp; No I can't...<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; because....<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I'm toilet</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-85 img-fluid" src="{{asset('img/carucell03.jpg')}}" alt="d-block img-fluid">
                    <div class="card-img-overlay">
                        <p class="text-white h1">ここにテキストが入ります。</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="mr-5 text-center"> --}}
            <a href="{{ route('register') }}"><button class="btn btn-success btn-lg btn-block shadow text-white">新規登録</button></a>
            <a href="{{ route('login') }}"><button class="btn btn-secondary btn-lg btn-block shadow text-white">ログイン</button></a>
        {{-- </div> --}}
        
        <div class="d-block d-sm-none text-center">
            <a href="https://hb.afl.rakuten.co.jp/hsc/20bca630.fcc5488e.20bca631.12bbb9d1/_RTLink24408?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxMjAiLCJiYW4iOiIxNDIxNzk5IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
                <img src="https://hbb.afl.rakuten.co.jp/hsb/20bca630.fcc5488e.20bca631.12bbb9d1/?me_id=2100001&me_adv_id=1421799&t=pict" border="0" style="margin:2px" alt="" title="">
            </a>
            <p></p>
            <a href="https://hb.afl.rakuten.co.jp/hsc/20f0b300.3c0da10e.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxIiwiYmFuIjoiMTY3NDAxIiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
                <img src="https://hbb.afl.rakuten.co.jp/hsb/20f0b300.3c0da10e.20bca631.12bbb9d1/?me_id=2101008&me_adv_id=167401&t=pict" border="0" style="margin:2px" alt="" title="">
            </a>
            <a href="https://hb.afl.rakuten.co.jp/hgc/20f0b5b6.8a425ccc.20bca631.12bbb9d1/?pc=http%3A%2F%2Fwww.rakuten.co.jp%2Fbiccamera%2F&link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxIiwiYmFuIjoiMTY3MDg4NSIsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
                <img src="https://hbb.afl.rakuten.co.jp/hlb/20f0b5b6.8a425ccc.20bca631.12bbb9d1/?sid=1&shop=biccamera&size=1&kind=2&me_id=1269553&me_adv_id=1670885&t=logo" border="0" style="margin:2px" alt="" title="">
            </a>
        </div>
        @endguest
    @endsection
</body>
</html>