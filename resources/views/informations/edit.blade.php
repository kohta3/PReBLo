@extends('layouts.app')
@section('content')


<h1>内容の変更</h1>

<form method="POST" action="/infomations/{{ $infomation->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="string" name="comment" value="{{ $infomation->comment }}">
    <input type="url" name="URL" value="{{infomation->URL}}">
    <textarea name="about">{{ $information->about }}</textarea>
    <input type="number" name="price"  value="{{ $information->price }}">
    <button type="submit">Update</button>
</form>

<a href="/products">Back</a>



@endsection