@extends('client.layouts.app')

@section('title')
    Đăng Nhập
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

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        placeholder="Nhập địa chỉ Email" value="{{ old('email') }}" autofocus>
                                    @error('email')
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Lỗi',
                                                    text: '{{ $message }}',
                                                });
                                            });
                                        </script>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 d-flex justify-content-center">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"
                                        placeholder="Mật khẩu" autofocus>
                                    @error('password')
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Lỗi',
                                                    text: '{{ $message }}',
                                                });
                                            });
                                        </script>
                                    @enderror
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Nhớ tôi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 390px" class="mb-2">
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="row mb-1 d-flex justify-content-center">
                                <div class="col-md-6 mb-3">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Đăng Nhập') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                Bạn chưa có tài khoản? <a class="btn-link ml-1" href="{{ route('auth.register') }}">
                                    <strong class="text-danger">Đăng ký ngay</strong>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
