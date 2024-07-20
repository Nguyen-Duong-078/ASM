@extends('client.layouts.app')

@section('content')
    <div class="container" style="margin-top: 170px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}
                    <div class=" text-center">
                        <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt=""
                            width="150px">
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: '{{ session('status') }}',
                                        confirmButtonText: 'OK'
                                    });
                                });
                            </script>
                        @endif


                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Nhập địa chỉ Email " value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 d-flex justify-content-center">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Gửi liên kết đặt lại mật khẩu') }}
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
