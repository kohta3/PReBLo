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
        <div class="w-80 text-light m-0 px-3 pt-3">
            <h1 class='bg-secondary rounded w-100'><span class="mx-3">地域で検索</span></h1>
        </div>
        <div class="row m-3" style="height: 100%">
            <div class="col-md-6">
                <img src="{{ asset('img/japanmap.png')}}" alt="JapanMap" class="show-img">
            </div>
            <div class="col-md-6 text-light mt-3 Serch_responsiv_font">
                    @foreach ($pref as $prefecture)
                    <?php $i=$prefecture->id ?>
                    @if ($i==1)
                    <h4 class='mt-2'>北海道</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==2)
                    <h4 class='mt-2'>東北</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==7)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==8)
                    <h4 class='mt-2'>関東</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==14)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==15)
                    <h4 class='mt-2'>北陸</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==18)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==19)
                    <h4 class='mt-2'>中部</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==24)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==25)
                    <h4 class='mt-2'>関西</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==30)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==31)
                    <h4 class='mt-2'>中国</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==35)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==36)
                    <h4 class='mt-2'>四国</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==39)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @elseif($i==40)
                    <h4 class='mt-2'>九州・沖縄</h4>
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @elseif($i==7)
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    <br>
                    @else
                    <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="my-5 mx-1">{{$prefecture->Pref}}</a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="w-80 text-light m-0 px-3 pt-3">
            <h1 class='bg-secondary rounded w-100'><span class="mx-3">カテゴリーで検索</span></h1>
        </div>
        <div class="row text-light px-3">
            @foreach ($category as $caterorise)
                <div class="col-md-4 Serch_responsiv_font">
                    <h1>{{$caterorise}}</h1>
                    @foreach ($subcategorise as $subcategory)
                        <?php $checkCategory=$subcategory->maintype; ?>
                            @if ($checkCategory==$caterorise)
                                <a href="{{route('Search.show', ['Search' => $prefecture->id]) }}" class="ml-3 text-nowrap">{{$subcategory->category}}</a>
                            @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    @endsection
</body>