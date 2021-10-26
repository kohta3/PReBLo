@extends('layouts.app')
@section('content')


<h1 class="text-light">内容の変更</h1>

<div class="ml-5">
    <form method="POST" action="/informations/{{ $information->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <p><input type="string" name="comment" value="{{ $information->comment }}"></p>
        <p><input type="url" name="URL" value="{{$information->URL}}"></p>
        <p><textarea name="about">{{ $information->about }}</textarea></p>
        <input type="number" name="TEL"  value="{{ $information->TEL }}">

        <button type="submit">Update</button>
    </form>
</div>

<a href="/infomations" class="ml-3">Back</a>



@endsection