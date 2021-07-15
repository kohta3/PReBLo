@extends('layouts.app')
@section('content')


<h1>{{$information->id}}</h1>
<div>
  <?php
    if($information->ParkingCar===0)$judgeCar='駐車場有り';
    else$judgeCar='駐車場無し';
    if($information->ParkingBicycles===0)$judgeBycycle='駐輪場有り';
    else$judgeBycycle='駐輪場無し';
  ?>
    {{$information->tittle}}
    {{$information->pref}}
    {{$information->URL}}
    {{$information->TEL}}
    {{$information->about}}
    {{$information->OfficeHour}}
    {{$judgeCar."\t".$judgeBycycle}}
</div>


{{-- good or ungood --}}
<div>
    @if($information->is_liked_by_auth_user())
      <a href="{{ route('infounlike', ['id' => $information->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
    @else
      <a href="{{ route('infolike', ['id' => $information->id]) }}" class="btn btn-info btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
    @endif
  </div>

<a href="/informations">back</a>

@endsection