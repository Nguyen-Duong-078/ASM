<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="/admin/" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span style="color:var(--bs-primary);">
                    <svg id="logo-39" width="50" height="40" viewBox="0 0 50 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.0001 0L50 15.0098V24.9863L25.0001 40L0 24.9863V15.0099L25.0001 0Z" fill="#A5B4FC"
                            class="ccompli2"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 15.0098L25 0L50 15.0098V24.9863L25 40L0 24.9863V15.0098ZM25 33.631L44.6967 21.8022V18.1951L44.6957 18.1945L25 30.0197L5.30426 18.1945L5.3033 18.1951V21.8022L25 33.631ZM25 24.5046L40.1018 15.4376L36.4229 13.2298L25 20.0881L13.5771 13.2298L9.89822 15.4376L25 24.5046ZM25 14.573L31.829 10.4729L25 6.37467L18.171 10.4729L25 14.573Z"
                            fill="#4F46E5" class="ccustom"></path>
                        <path d="M25.0001 0L0 15.0099V24.9863L25 40L25.0001 0Z" fill="#A5B4FC" class="ccompli2"
                            fill-opacity="0.3"></path>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">𝐄𝐜𝐨𝐦𝐦𝐞𝐫𝐜𝐞</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-header fw-medium mt-3">
            <span class="menu-header-text" data-i18n="Điều khiển">Điều khiển</span>
        </li>
        <li class="menu-item">
            <a href="/../admin" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Bảng Điều Khiển">Bảng Điều Khiển</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header fw-medium mt-2">
            <span class="menu-header-text" data-i18n="Nội dung trang">Nội dung trang</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons mdi mdi-folder-outline'></i>
                <div data-i18n="Quản Lý Loại Tin">Quản Lý Loại Tin</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/categories/create" class="menu-link">
                        <div data-i18n="Thêm mới">Thêm mới</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/categories" class="menu-link">
                        <div data-i18n="Danh sách">Danh sách</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons mdi mdi mdi-unity'></i>
                <div data-i18n="Quản Lý Tin">Quản Lý Tin</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/news/create" class="menu-link">
                        <div data-i18n="Thêm mới">Thêm mới</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/news" class="menu-link">
                        <div data-i18n="Danh sách">Danh sách</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header fw-medium mt-2">
            <span class="menu-header-text" data-i18n="Thông báo &amp; Quyền">Thông báo &amp; Quyền</span>
        </li>
        {{-- <li class="menu-item">
            <a href="" class="menu-link">
                <i class='menu-icon tf-icons mdi mdi-bell-badge-outline'></i>
                <div data-i18n="Thông Báo">Thông Báo</div>
            </a>
        </li> --}}

        <li class="menu-item">
            <a href="/admin/members" class="menu-link">
                <i class='menu-icon tf-icons mdi mdi-account-group'></i>
                <div data-i18n="Thành Viên">Thành Viên</div>
            </a>
            {{-- <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/catelogues/create" class="menu-link">
                        <div data-i18n="Thêm mới danh mục">Thêm mới danh mục</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/catelogues" class="menu-link">
                        <div data-i18n="Danh sách danh mục">Danh sách danh mục</div>
                    </a>
                </li>
            </ul> --}}
        </li>

        {{-- <li class="menu-item">
            <a href="" class="menu-link">
                <i class='menu-icon tf-icons mdi mdi-account-lock-open-outline'></i>
                <div data-i18n="Quyền Truy Cập">Quyền Truy Cập</div>
            </a>
        </li> --}}
        {{--
        <li class="menu-header fw-medium mt-2">
            <span class="menu-header-text" data-i18n="Thống kê">Thống kê</span>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class='menu-icon tf-icons mdi mdi-chart-bar'></i>
                <div data-i18n="Thống Kê">Thống Kê</div>
            </a>
        </li> --}}
    </ul>
</aside>
<!-- / Menu -->
