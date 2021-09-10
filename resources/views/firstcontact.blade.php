<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta property="og:url" content=" www.preblo.site" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="観光地・ホテル・ご飯の投稿サイトPReBLo" />
    <meta property="og:description" content=" 観光地、宿泊施設、飲食店をみんなに共有しよう！" />
    <meta property="og:site_name" content="観光地・ホテル・ご飯の投稿サイトPReBLo" />
    <meta property="og:image" content={{asset('img/meta.png')}} />
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="carousel slide carousel-fade" data-pause=false data-interval=3000  data-ride="carousel" style="width:100%">
            <div style="position: relative">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-85 img-fluid" src="{{asset('img/carucell01.jpg')}}" alt="d-block img-fluid">
                        {{-- <div class="mr-5 text-center"> --}}
                            <div class="firstContact_button font-weight-bold w-25 text-white">
                                <a href="{{ route('register') }}"><button class="btn btn-success col btn-lg btn-block mb-3 text-nowrap">新規登録</button></a>
                                <a href="{{ route('login') }}"><button class="btn btn-info col btn-lg btn-block text-nowrap">ログイン</button></a>
                            </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-85 img-fluid" src="{{asset('img/carucell02.jpg')}}" alt="d-block img-fluid">
                        {{-- <div class="mr-5 text-center"> --}}
                        <div class="firstContact_button font-weight-bold w-25 text-white">
                            <a href="{{ route('register') }}"><button class="btn btn-success col btn-lg btn-block mb-3 text-nowrap">新規登録</button></a>
                            <a href="{{ route('login') }}"><button class="btn btn-info col btn-lg btn-block text-nowrap">ログイン</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        {{-- follow SNS --}}
        <div class="row w-80 text-center m-2 shadow" style="height: 10%">
            <div class="w-25 m-auto">
                <a href="https://www.instagram.com/preblo_poko?ref=badge">
                    <img src="{{asset('img/icon_062470_128.png')}}" alt="instagram" class="insta_info">
                    <br><span style="font-size: 1.5vw">instagram follow</span>
                </a>
            </div>
            <div class="w-25 m-auto">
                <a href="https://twitter.com/intent/follow?screen_name=Preblo1" target="_blank">
                    <img src="{{asset('img/icon_017880_128.png')}}" alt="twetter" class="insta_info">
                    <br><span style="font-size: 1.5vw">twtter follow</span>
                </a>
            </div>
            <div class="w-25 m-auto">
                <a href="https://twitter.com/intent/follow?screen_name=Preblo1" target="_blank">
                    <img src="{{asset('img/f_logo_RGB-White_1024.png')}}" alt="facebook" class="insta_info bg-primary">
                    <br><span style="font-size: 1.5vw">facebook follow</span>
                </a>
            </div>
        </div>

        {{--PReBLoに関して--}}
        <div class="w-100 text-light my-3">
            <details class="w-100 border-top shadow">
                <summary class="w-80 d-flex align-items-center">-1.PReBLoを使う</summary>
                <div class="row w-100 mx-2">
                    <div class="col-md-5 p-0 d-flex align-items-center text-center" style="height: 15rem">
                        <video src="{{asset('img/view1.mp4')}}" class="StartImageInfo1" autoplay playinline muted loop></video>
                    </div>
                    <div class="col-md-7 w-100 my-auto">
                            <p class="ml-3">PReBLoでは、旅行やお出かけした思い出を投稿することができます。</p>
                            <p class="ml-3">まずは登録！上のボタンから登録可能！</p>
                            <p class="ml-3">アカウントをお持ちの場合は、ログインを選択</p>
                    </div>
                </div>
            </details>
            <details class="w-100 border-top shadow">
                <summary class="w-80 d-flex align-items-center">-2.旅行の記録を投稿</summary><br>
                <div class="row w-100 mx-2">
                    <div class="col-md-5 p-0 text-center" style="height: 15rem">
                        <img src="{{asset('img/screen.jpg')}}" class="show-img border">
                    </div>
                    <div class="col-md-7 w-100 text-center">
                            <p class="ml-3">PReBLoでは、旅行やお出かけした思い出を投稿することができます。</p>
                            <p class="ml-3">まずは登録！上のボタンから登録可能！</p>
                            <p class="ml-3">アカウントをお持ちの場合は、ログインを選択</p>
                    </div>
                </div>
            </details>
            <details class="w-100 border-top border-bottom shadow">
                <summary class="w-80 d-flex align-items-center">-3.観光地・ホテル・ご飯を探す</summary>
                <div class="row w-100 mx-2">
                    <div class="col-md-5 p-0 text-center" style="height: 15rem">
                        <video src="{{asset('img/screenviddeo.mp4')}}" class="middleImageInfo1" autoplay playinline muted loop></video>
                    </div>
                    <div class="col-md-7 w-100 text-center">
                            <p class="ml-3">PReBLoでは、旅行やお出かけした思い出を投稿することができます。</p>
                            <p class="ml-3">まずは登録！上のボタンから登録可能！</p>
                            <p class="ml-3">アカウントをお持ちの場合は、ログインを選択</p>
                    </div>
                </div>
            </details>
            
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-8"></div>
            </div>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-8"></div>
            </div>
        </div>

        <div class='row w-100 m-0'>
            @foreach ($info as $newInfo)
                <div class="col-md-2 bg-secondary p-0 shadow">
                    <?php
                        $infoTime=str_replace(" ","日",substr($newInfo->created_at,8));
                    ?>
                    <div class="m-1 bg-dark text-white shadow">
                        <span class="text-center col-md-5 TopNewInfo p-0">
                            @if ($newInfo->image !== "")
                                <img src="{{$newInfo->image}}" class="TopImageInfo">
                                @else
                                <img src="{{ asset('img/dummy.png')}}" class="TopImageInfo">
                            @endif
                        </span>
                        
                        <div class="text-nowrap row firstInfo">
                            <div class="align-items-start  col-md-7">
                                <p>投稿時間[{{$infoTime}}]</p>
                                <span class="text-success h4">{{$newInfo->tittle}}</span><br>
                                <span style="font-size: h5">{{$newInfo->pref .'>'. $newInfo->city}}</span><br>
                                <span class="text-nowrap">コメント:{{$newInfo->comment}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
     
        {{-- </div> --}}

        <div class="d-block d-sm-none text-center">
            <a href="https://hb.afl.rakuten.co.jp/ichiba/20f0ba88.2a3a980d.20f0ba89.53dd5aa7/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fedyshop%2Fedy-key-panda%2F&link_type=pict&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0Iiwic2l6ZSI6IjQwMHg0MDAiLCJuYW0iOjEsIm5hbXAiOiJyaWdodCIsImNvbSI6MSwiY29tcCI6ImRvd24iLCJwcmljZSI6MCwiYm9yIjowLCJjb2wiOjAsImJidG4iOjEsInByb2QiOjAsImFtcCI6ZmFsc2V9" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
                <img src="https://hbb.afl.rakuten.co.jp/hgb/20f0ba88.2a3a980d.20f0ba89.53dd5aa7/?me_id=1258569&item_id=10000535&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fedyshop%2Fcabinet%2Fproduct%2Fedy-key-panda%2Fedy-key-panda_001d.jpg%3F_ex%3D400x400&s=400x400&t=pict" border="0" style="margin:2px" alt="" title="">
            </a>
        </div>

        <div class="d-none my-5 d-md-block text-center">
            <span class="ml-auto">
                <a href="https://px.a8.net/svt/ejp?a8mat=3HGOQW+5R6VAQ+4OJS+5ZMCH" rel="nofollow">
                    <img border="0" width="300" height="250" alt="" src="https://www27.a8.net/svt/bgt?aid=210730568348&wid=001&eno=01&mid=s00000021844001006000&mc=1">
                </a>
                    <img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=3HGOQW+5R6VAQ+4OJS+5ZMCH" alt="">
            </span>
            <span class="ml-auto">
                <a href="https://px.a8.net/svt/ejp?a8mat=3HIU7U+6TW1MA+4SJ4+614CX" rel="nofollow">
                    <img border="0" width="300" height="250" alt="" src="https://www26.a8.net/svt/bgt?aid=210830970413&wid=001&eno=01&mid=s00000022360001013000&mc=1">
                </a>
                    <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3HIU7U+6TW1MA+4SJ4+614CX" alt="">
            </span>
            <span class="ml-auto">
                <a href="https://px.a8.net/svt/ejp?a8mat=3HIU7U+71MOHE+4EI4+5ZMCH" rel="nofollow">
                <img border="0" width="300" height="250" alt="" src="https://www27.a8.net/svt/bgt?aid=210830970426&wid=001&eno=01&mid=s00000020542001006000&mc=1">
                </a>
                <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=3HIU7U+71MOHE+4EI4+5ZMCH" alt="">
            </span>
            <span class="ml-auto">
                <a href="https://px.a8.net/svt/ejp?a8mat=3HIU7U+7NNPV6+3ZO8+601S1" rel="nofollow">
                <img border="0" width="300" height="250" alt="" src="https://www24.a8.net/svt/bgt?aid=210830970463&wid=001&eno=01&mid=s00000018620001008000&mc=1">
                </a>
                <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3HIU7U+7NNPV6+3ZO8+601S1" alt="">
            </span>
            <span class="ml-auto">
                <a href="https://hb.afl.rakuten.co.jp/hsc/20bca630.fcc5488e.20bca631.12bbb9d1/?link_type=pict&ut=eyJwYWdlIjoic2hvcCIsInR5cGUiOiJwaWN0IiwiY29sIjoxLCJjYXQiOiIxMjAiLCJiYW4iOiIxNDIxNzk5IiwiYW1wIjpmYWxzZX0%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >
                    <img src="https://hbb.afl.rakuten.co.jp/hsb/20bca630.fcc5488e.20bca631.12bbb9d1/?me_id=2100001&me_adv_id=1421799&t=pict" border="0" style="margin:2px" alt="kuma" title="" style="object-fit: contain">
                </a>
            </span>
        </div>
        
    @endsection
</body>