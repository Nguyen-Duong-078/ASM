@extends('client.layouts.app')
@section('title')
    Đăng ký
@endsection
@section('content')
    <div class="container mb-5" style="margin-top: 160px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class=" text-center">
                        <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt=""
                            width="150px">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.register') }}">
                            @csrf

                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        placeholder="Nhập tên của bạn" value="{{ old('name') }}" autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Nhập Email của bạn" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Mật Khẩu" autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password"
                                        class="form-control
                                        @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Nhập lại mật khẩu" name="password_confirmation"
                                        autocomplete="new-password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1 d-flex justify-content-center">
                                <div class="col-md-6 mb-3">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Đăng Ký') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                Bạn đã có tài khoản? <a class="btn-link ml-1" href="{{ route('auth.login') }}">
                                    <strong class="text-danger">Đăng nhập ngay</strong>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
