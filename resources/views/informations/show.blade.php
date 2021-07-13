@extends('layouts.app')
@section('content')


<h1>{{$information->id}}</h1>
<div>
    {{$information->comment}}
    {{$information->tittle}}
    {{$information->pref}}
    {{$information->URL}}
    {{$information->TEL}}
    {{$information->about}}
    {{$information->OfficeHour}}
    {{$information->ParkingCar}}
    {{$information->ParkingBicycles}}
</div>
<div>
    @if($information->is_liked_by_auth_user())
      <a href="{{ route('infounlike', ['id' => $information->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
    @else
      <a href="{{ route('infolike', ['id' => $information->id]) }}" class="btn btn-info btn-sm">いいね<span class="badge">{{ $information->likes->count() }}</span></a>
    @endif
  </div>

<a href="/informations">back</a>

@endsection