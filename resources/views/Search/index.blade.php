<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="name"  content="投稿型旅行サイト!!PReBLo!">    
    <meta property="og:url" content=" www.preblo.site" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="観光地・ホテル・ご飯の投稿サイトPReBLo" />
    <meta property="og:description" content=" 観光地、宿泊施設、飲食店をみんなに共有しよう！" />
    <meta property="og:site_name" content="観光地・ホテル・ご飯の投稿サイトPReBLo!" />
    <meta property="og:image" content={{asset('img/meta.png')}} />
</head>



<body>
    @extends('layouts.app')
    @section('content')

    <div class="content">
        <div class="row m-3" style="height: 25%">
            <div class="col-md-6 h-100">
                <img src="{{ asset('img/japanmap.png')}}" alt="JapanMap" class="show-img">
            </div>
            <div class="col-md-6 text-light h-100">
                <form class="w-50 info-form" method="POST" action="/Search" enctype="multipart/form-data">  
                        {{ csrf_field() }}
                    都道府県
                    <p class="overflow">
                        @foreach ($pref as $prefecture)
                        <input type="radio" name="pref" value="{{$prefecture->id}}">{{$prefecture->Pref}}<br>
                        @endforeach
                    </p>

                    <button class="btn bg-warning border border-dark rounded-pill" type="submit">検索</button>
                </form>

                <p class="w-45">
                    <h1>
                        unko
                    </h1>
                </p>
            </div>
        </div>
    </div>

    @endsection
</body>