@extends('layouts.app')

@section('content')
<div class="container p-5 mb-100" style="min-height: 52rem">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('massage') }}</div>

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
