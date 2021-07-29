@extends('layouts.app')
@section('content')


<!-- フラッシュメッセージ -->
@if (session('flash_message'))
<div class="flash_message text-light m-5" style="width: 40%">
    {{ session('flash_message') }}
</div>
@endif

<div class='m-3 shadow-lg'>
  <div class="row" style="height: 60rem">
    <div class="col-sm-7 text-center show-position">
      @if ($information->image !== "")
        <img src="{{$information->image}}" class="show-image">
        @else
        <img src="{{ asset('img/dummy.png')}}" class="show-image">
      @endif
    </div>

    <div class="col-sm-5 show-infor show-position">
      <div>
        <?php
          if($information->ParkingCar===0)$judgeCar='駐車場有り';
          else$judgeCar='駐車場無し';
          if($information->ParkingBicycles===0)$judgeBycycle='駐輪場有り';
          else$judgeBycycle='駐輪場無し';
        ?>
        <p>{{$information->tittle}}</p>
        <p>{{$information->pref}}</p>
        <p>{{$information->URL}}</p>
        <p>{{$information->TEL}}</p>
        <p>{{$information->about}}</p>
        <p>{{$information->OfficeHour}}</p>
        <p>{{$judgeCar."\t".$judgeBycycle}}</p>
        {{-- good or ungood --}}
      </div>

      <div>
        @if($information->is_liked_by_auth_user())
          <a href="{{ route('infounlike', ['id' => $information->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
        @else
          <a href="{{ route('infolike', ['id' => $information->id]) }}" class="btn btn-info btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
        @endif
      </div>

    </div>
  </div>
</div>


<a href="/informations">back</a>

@endsection