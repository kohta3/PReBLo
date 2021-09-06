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
    <div class="row ml-3 h2 text-light">
        アカウント情報の編集
    </div>
    <div class="text-light row m-auto w-100" style="height: 80vh">
        <form action="/account" method="POST" class="mx-auto d-flex align-items-center h-100">
            @csrf 
            <input type="hidden" name="_method" value="PUT">
            <label for="name" class="h3">変更後の名前<input type="text" name="name" class=" mx-3" value="{{$user->name}}"></label>
            <button class="btn bg-info shadow rounded-pill" type="submit">更新</button>
        </form>
    </div>
    <div class=" d-flex align-items-end">
        <a href="/account" class="h2 ml-4">戻る</a>
    </div>
    @endsection
</body>