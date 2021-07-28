@extends('layouts.app')

@section('content')
<div class="container p-5 mb-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ようこそ') }}
                    <a href="/informations">トップページに戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
