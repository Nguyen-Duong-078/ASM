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
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Thể Loại <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            @php
                                $categories = app(\App\Http\Controllers\HomeController::class)->getForMenu();
                            @endphp
                            @foreach ($categories as $item)
                                <a class="dropdown-item" href="/categorie/{{ $item->id }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li> --}}

                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <select class="m-2 border-0 bg-transparent" id="select-language">
                    <option id="en" value="">English</option>
                    <option id="fr" value="" selected>Việt Nam</option>
                </select>

                <!-- search -->
                <form action="{{ route('search') }}" method="GET">
                    <input class="form-control " type="text" name="query" placeholder="Tìm kiếm...">
                    {{-- <button type="submit">Search</button> --}}
                </form>

                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                    @endif
                @else
                    <li class="dropdown nav-item list-unstyled">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="javascript:void" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu">
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
