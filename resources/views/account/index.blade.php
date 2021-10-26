<!DOCTYPE html>
<html lang="ja" class="h-100">
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
    <div class="text-light h-100" style="min-height: 100vh;">
        <span class="ml-3 h3 w-100">こんにちは！{{$user->name}}さん</span>
        <div class="container w-75 mx-auto my-5" style="font-size: 2.5vw;">
            <div class="row d-flex align-items-center border h-25">
                <a href="{{route('account.edit')}}" class="text-light" >
                    <img src="/img/editname.png" alt="people" class="show-accountmenu-img m-3 w-25">
                    <span class="w-75">アカウントを編集</span>
                </a>
            </div>

            <div class="row d-flex align-items-center border h-25">
                <a href="{{url('EditInformation')}}" class="text-light">
                    <img src="/img/Reshume.png" alt="people" class="show-accountmenu-img m-3 w-25">
                    <span class="w-25">投稿の修正と削除</span>
                </a>
            </div>

        </div>

        
    </div>
    @endsection
</body>