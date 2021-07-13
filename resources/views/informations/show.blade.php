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

<a href="/informations">back</a>

@endsection