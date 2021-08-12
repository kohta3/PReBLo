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
    <meta property="og:site_name" content="PReBLo" />
    <meta property="og:image" content={{asset('img/meta.png')}} />
</head>



<body>
  @extends('layouts.app')
  @section('content')

  <!-- フラッシュメッセージ -->
  @if (session('flash_message'))
  <div class="flash_message text-light m-5" style="width: 40%">
      {{ session('flash_message') }}
  </div>
  @endif

  <div class='shadow-lg container-fluid'>
    <div class="row m-2 show-breakpoint">
      <div class="col-md-6 show-position h-100">
        @if ($information->image !== "")
          <img src="{{$information->image}}" class="show-img">
          @else
          <img src="{{ asset('img/dummy.png')}}" class="show-img">
        @endif
      </div>

      <div class="col-md-6 show-position show-infor h-100">
        <div class="h-50 border">
          <div class="m-3">
            <?php
              if($information->ParkingCar===0)$judgeCar='駐車場有り';
              else$judgeCar='駐車場無し';
              if($information->ParkingBicycles===0)$judgeBycycle='駐輪場有り';
              else$judgeBycycle='駐輪場無し';
            ?>
            <p class="h2">{{$information->tittle}}</p>
            <p>{{$information->pref . $information->city}}</p>
            <p><a href='{{$information->URL}}'>ウェブサイトにアクセス</a></p>
            <p>{{$information->TEL}}</p>
            <p>{{$information->about}}</p>
            <p>{{$information->OfficeHour}}</p>
            <p>{{$judgeCar."\t".$judgeBycycle}}</p>
            {{-- good or ungood --}}
        
            @if($information->is_liked_by_auth_user())
              <a href="{{ route('infounlike', ['id' => $information->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
            @else
              <a href="{{ route('infolike', ['id' => $information->id]) }}" class="btn btn-info btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
            @endif

            {{-- tweet --}}
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="投稿型旅行サイトPReBLo!!" data-show-count="false">
              Tweet
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

          </div>
        </div>
        <div class="h-50 text-light">
          <p>map</p>
        </div>
      </div>
    </div>
    <div class="w-100 mt-5 mb-2 text-light"><h2 class="bg-dark shadow m-3">付近の宿泊施設↓</h2></div>
    <div class="row mx-3">
      @foreach ($hotelInfo as $hotel)
      <div class="col-md-4 shadow bg-secondary text-light ">     
          <div
            class='h5 m-2 shadow w-100 h-10'>{{$hotel['hotelName']}}
          </div>
          <div>
            <p><span class="text-dark show-oricolor" >{{$hotel['hotelSpecial']}}</span><br>
              <span class="h4 mt-1">住&nbsp;所:</span>{{$hotel['address1'].$hotel['address2']}}<br>
              <span class="h4 mt-1">アクセス:</span>{{$hotel['access']}}<br>
              <span class="h4 mt-1">宿泊¥{{$hotel['hotelMinCharge']}}より</span>
            </p>
            
            <p>
                <a href='{{$hotel['hotelInformationUrl']}}'>ホテルの詳細</a>
            </p>
          </div>

          <div class='text-nowrap'>
            <img src='{{$hotel['hotelImageUrl']}}' alt='hotelImage' class="show-hotel-img show-img">
            <img src='{{$hotel['roomImageUrl']}}' alt='hotelImage' class="show-hotel-img">
          </div>
            <p>{{$hotel['reviewAverage']}}</p>
      </div>
      @endforeach
    </div>
    <div class="w-100 mt-5 mb-2 text-light"><h2 class="bg-dark shadow m-3">付近の飲食店↓</h2></div>
    <div class="row mx-3">
      @foreach ($eatInfo as $shop)
        <div class="col-md-4 shadow bg-secondary text-light ">     
            <div class='h5 m-2 shadow w-100 h-10'>
              {{$shop['name']}}
            </div>
            <div>
              <ul class='text-left p-0' style="list-style:none ">
                <p  class="text-dark" style="background-color:#b0c4de ">{{$shop['catch']}}</p>
                <span class="h4 mt-1">住所:</span>{{$shop['address']}}<br>
                <span class="h4 mt-1">アクセス:</span>{{$shop['access']}}<br>
                <span class="h4 mt-1">平均予算</span>{{$shop['budget']['name']}}<br>
                </span>
              </ul>
              <p>
                  <a href='{{$shop['urls']['pc']}}'>お店の詳細</a>
              </p>
            </div>

            <div class='text-nowrap'>
              <img src='{{$shop['photo']['mobile']['l']}}' alt='shopImage' class="show-hotel-img">
              <img src='{{$shop['photo']['pc']['l']}}' alt='shopImage' class="show-hotel-img">
            </div>
              <p>{{$hotel['reviewAverage']}}</p>
        </div>
      @endforeach
    </div>
  </div>


  <a href="/informations">back</a>

  @endsection

</body>