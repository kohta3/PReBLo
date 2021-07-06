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
                <div class="card-img-overlay">
                    <p class="text-white  h1">ここにテキストが入ります。</p>
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

    @endsection
</body>
</html>