
@extends('layouts.app')
@section('content')

<div>
@foreach ($info as $information)
    {{$information->comment}}
    {{$information->tittle}}
    {{$information->pref}}
    {{$information->URL}}
    {{$information->TEL}}
    {{$information->about}}
    {{$information->OfficeHour}}
    {{$information->ParkingCar}}
    {{$information->ParkingBicycles}}
    <a href="{{route('informations.show', $information)}}">Show</a>
    <a href="{{route('informations.edit', $information)}}">edit</a> 
@endforeach

<h1>kohta</h1>
</div>
@endsection