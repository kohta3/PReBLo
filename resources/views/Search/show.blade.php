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


@extends('layouts.app')
@section('content')
<h3 class="row m-2 text-light">{{$sort_pref->Pref."の検索結果"}}</h3>
    @foreach ($search_view as $info)
    <div class="text-light">
        <div class="row search-circle searchshow-parent mx-5 my-3" style="height: 15rem">
            <div class="col-md-5 h-100 p-0">
                <a href="{{route('informations.show', $info)}}" class="align-items-center">    
                    @if ($info->image !== "")
                        <img src="{{$info->image}}" class="middleImageInfo3">
                        @else
                        <img src="{{ asset('img/dummy.png')}}" class="middleImageInfo3">
                    @endif
                </a>
            </div>
            <div class="col-md-7 my-3 h-100 searchshow-viewing">
                <h5>{{$info->pref.">".$info->city}}</h5>
                <h1>{{$info->tittle}}</h1>
                <p>
                    <span>{{"TEL : ".$info->tel."\n"}}</span><br>
                    <span>{{"time : ".$info->open."-".$info->close}}</span>
                </p>
            </div>
        </div>
    </div>
    @endforeach
@endsection
</body>