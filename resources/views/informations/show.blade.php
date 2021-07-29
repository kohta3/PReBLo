@extends('layouts.app')
@section('content')


<!-- フラッシュメッセージ -->
@if (session('flash_message'))
<div class="flash_message text-light m-5" style="width: 40%">
    {{ session('flash_message') }}
</div>
@endif

<div class='m-0 shadow-lg h-60'>
  <div class="row m-0 p-0">
    <div class="col-sm-7 show-position">
      @if ($information->image !== "")
        <img src="{{$information->image}}" class="img-fluid">
        @else
        <img src="{{ asset('img/dummy.png')}}" class="img-fluid">
      @endif
    </div>

    <div class="col-sm-5 show-position show-infor text-light">
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
    </div>

  </div>


  <div class="row">
    <h1>kohta</h1>
  </div>
</div>


<a href="/informations">back</a>

@endsection