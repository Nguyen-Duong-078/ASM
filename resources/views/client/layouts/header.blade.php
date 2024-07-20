<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="/">
                <img class="img-fluid" width="100px" src="{{ asset('themes') }}/client/images/logo.png"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/">
                            Trang Chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Sản Phẩm</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Trang <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="author.html">Tác giả</a>

                            <a class="dropdown-item" href="author-single.html">Tác giả Đơn lẻ</a>

                            <a class="dropdown-item" href="advertise.html">Quảng cáo</a>

                            <a class="dropdown-item" href="post-details.html">Chi tiết bài đăng</a>

                            <a class="dropdown-item" href="post-elements.html">Thành phần bài đăng</a>

                            <a class="dropdown-item" href="tags.html">Thẻ</a>

                            <a class="dropdown-item" href="search-result.html">Kết quả tìm kiếm</a>

                            <a class="dropdown-item" href="search-not-found.html">Tìm kiếm Không Tìm thấy</a>

                            <a class="dropdown-item" href="privacy-policy.html">Chính sách bảo mật</a>

                            <a class="dropdown-item" href="terms-conditions.html">Điều khoản Điều kiện</a>

                            <a class="dropdown-item" href="404.html">Trang 404</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>

                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <select class="m-2 border-0 bg-transparent" id="select-language">
                    <option id="en" value="">English</option>
                    <option id="fr" value="" selected>Việt Nam</option>
                </select>

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Tìm Kiếm...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                    @endif
                @else
                    <li class="dropdown nav-item list-unstyled">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Đăng Xuất') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>

        </nav>
    </div>
</header>
