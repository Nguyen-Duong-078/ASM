@extends('client.layouts.app')

@section('content')
    <div class="container mb-5" style="margin-top: 170px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class=" text-center">
                        <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" alt=""
                            width="150px">
                    </div>

                    <div class="card-header">{{ __('Xác minh địa chỉ email của bạn') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Một liên kết xác minh mới đã được gửi tới địa chỉ email của bạn.') }}
                            </div>
                        @endif

                        {{ __('Trước khi tiếp tục, vui lòng kiểm tra email để biết liên kết xác minh.') }}
                        {{ __('Nếu bạn không nhận được email') }}
                        <form class="d-inline d-flex justify-content-center mt-2 mb-2" method="POST"
                            action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-success">{{ __('nhấp vào đây để yêu cầu một cái khác') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
