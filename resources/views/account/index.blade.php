<!DOCTYPE html>
<html lang="ja">
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
    <div class="text-light">
        <span class="ml-3 h3">こんにちは！{{$AuthUser->name}}さん</span>
    </div>
    @endsection
</body>