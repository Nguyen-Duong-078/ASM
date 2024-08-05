@extends('client.layouts.app')
@section('title')
    Xác nhận mật khẩu
@endsection
@section('content')
    <div class="container mb-5" style="margin-top: 170px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class=" text-center">
                        <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt=""
                            width="150px">
                    </div>
                    <div class="alert alert-success mt-2" role="alert">
                        {{ __('Xác nhận mật khẩu') }}
                    </div>
                    <div class="card-body text-center">
                        {{ __('Vui lòng xác nhận mật khẩu trước khi tiếp tục.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="row mb-2 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Mật khẩu">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <div class="row mb-3 mt-2 d-flex justify-content-center">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Xác nhận mật khẩu') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
