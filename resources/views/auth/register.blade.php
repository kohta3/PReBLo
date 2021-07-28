@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mt-3 mb-3 font-weight-bold text-primary">新規会員登録</h3>

            <hr>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label text-md-left text-light">氏名<span class="ml-1 "><a>&nbsp;&nbsp;<span class="badge-pill badge-danger need-font-size">必須</span></a></label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="PRe BLoTARO">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label text-md-left text-light">メールアドレス<a>&nbsp;&nbsp;<span class="badge-pill badge-danger need-font-size">必須</span></a></label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="BLo@PRe.com">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left text-light">電話番号<a>&nbsp;&nbsp;<span class="badge-pill badge-danger need-font-size">必須</span></a></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required placeholder="080-0000-0000">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left text-light">パスワード<a>&nbsp;&nbsp;<span class="badge-pill badge-danger need-font-size">必須</span></a></label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror samazon-login-input" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-5 col-form-label text-md-left"></label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control samazon-login-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn btn-outline-info w-100">
                        アカウント作成
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection