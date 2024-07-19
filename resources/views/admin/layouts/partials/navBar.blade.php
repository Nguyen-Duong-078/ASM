<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                    <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                    <span class="d-none d-md-inline-block text-muted">Tìm Kiếm (Ctrl+/)</span>
                </a>
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Language -->
            <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class='mdi mdi-translate mdi-24px'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-2">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="en"
                            data-text-direction="ltr">
                            <span class="align-middle">English</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr"
                            data-text-direction="ltr">
                            <span class="align-middle">French</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="ar"
                            data-text-direction="rtl">
                            <span class="align-middle">Arabic</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="de"
                            data-text-direction="ltr">
                            <span class="align-middle">German</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ Language -->

            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class='mdi mdi mdi-24px mdi-weather-sunny'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle"><i class='mdi mdi-weather-sunny me-2'></i>Sáng</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Tối
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>Hệ
                                thống</span>
                        </a>
                    </li>
                </ul>
                <!-- / Style Switcher-->
            </li>
            <!-- Quick links  -->
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class='mdi mdi-view-grid-outline mdi-24px'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h6 class="mb-0 me-auto">Phím tắt</h6>
                            <a href="javascript:void(0)" class="dropdown-shortcuts-add text-heading"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                    class="mdi mdi-plus mdi-24px"></i></a>
                        </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-calendar-blank mdi-24px"></i>
                                </span>
                                <a href="app-calendar.html" class="stretched-link">Lịch</a>
                                <small>Cuộc hẹn</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi mdi-content-paste mdi-24px"></i>
                                </span>
                                <a href="app-invoice-list.html" class="stretched-link">Hóa đơn
                                    Ứng dụng</a>
                                <small>Quản lý tài khoản</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                </span>
                                <a href="app-user-list.html" class="stretched-link">Ứng dụng người
                                    dùng</a>
                                <small>Quản lý người dùng</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-shield-check-outline mdi-24px"></i>
                                </span>
                                <a href="app-access-roles.html" class="stretched-link">Vai trò
                                    Sự quản lý</a>
                                <small>Sự cho phép</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-monitor mdi-24px"></i>
                                </span>
                                <a href="index.html" class="stretched-link">bảng điều khiển</a>
                                <small>phân tích</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-cog-outline mdi-24px"></i>
                                </span>
                                <a href="pages-account-settings-account.html" class="stretched-link">Cài đặt</a>
                                <small>Cài đặt tài khoản</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-help-circle-outline mdi-24px"></i>
                                </span>
                                <a href="pages-faq.html" class="stretched-link">Câu hỏi thường gặp</a>
                                <small class="text-muted mb-0">Câu hỏi thường gặp & bài viết</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span
                                    class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                                    <i class="mdi mdi-dock-window mdi-24px"></i>
                                </span>
                                <a href="modal-examples.html" class="stretched-link">Phương thức</a>
                                <small>Cửa sổ bật lên hữu ích</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Quick links -->

            <!-- Notification -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline mdi-24px"></i>
                    <span
                        class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h6 class="fw-normal mb-0 me-auto">Thông báo</h6>
                            <span class="badge rounded-pill bg-label-primary">8 Mới</span>
                        </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <img src="{{ asset('themes') }}/admin/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Chúc mừng Lettie 🎉</h6>
                                        <small class="text-truncate text-body">Giành được giải thưởng
                                            tốt nhất hàng tháng
                                            huy hiệu vàng người bán</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">1 giờ trước</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                                        <small class="text-truncate text-body">Đã chấp nhận của bạn
                                            sự liên quan</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">12 giờ trước</small>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <img src="{{ asset('themes') }}/admin/img/avatars/2.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Tin nhắn mới ✉️</h6>
                                        <small class="text-truncate text-body">Bạn có tin nhắn mới
                                            từ Natalie</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">1 giờ trước</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                    class="mdi mdi-cart-outline"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Ối! Bạn có đơn hàng mới 🛒
                                        </h6>
                                        <small class="text-truncate text-body">ACME Inc. được làm mới
                                            đặt hàng $1,154</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">1 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <img src="{{ asset('themes') }}/admin/img/avatars/9.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Ứng dụng đã được phê duyệt
                                            🚀 </h6>
                                        <small class="text-truncate text-body">Your ABC project
                                            ứng dụng đã được phê duyệt.</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">2 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                    class="mdi mdi-chart-pie-outline"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Báo cáo hàng tháng được tạo
                                        </h6>
                                        <small class="text-truncate text-body">tài chính tháng 7
                                            báo cáo được tạo ra </small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">3 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <img src="{{ asset('themes') }}/admin/img/avatars/5.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Gửi yêu cầu kết nối</h6>
                                        <small class="text-truncate text-body">Peter đã gửi cho bạn
                                            Yêu cầu kết nối</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">4 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <img src="{{ asset('themes') }}/admin/img/avatars/6.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1 text-truncate">Tin nhắn mới từ Jane</h6>
                                        <small class="text-truncate text-body">Bạn có tin nhắn mới
                                            từ Jane</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">5 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                            <li
                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="flex-shrink-0">
                                        <div class="avatar me-1">
                                            <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                    class="mdi mdi-alert-circle-outline"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                                        <h6 class="mb-1">CPU đang chạy cao</h6>
                                        <small class="text-truncate text-body">Phần trăm sử dụng CPU
                                            hiện tại là 88,63%,</small>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <small class="text-muted">5 ngày trước</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-3">
                        <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">Đọc hết
                            thông báo</a>
                    </li>
                </ul>
            </li>
            <!--/ Notification -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('themes') }}/admin/img/avatars/1.png" alt
                            class="w-px-40 h-auto rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                        <a class="dropdown-item pb-2 mb-1" href="pages-account-settings-account.html">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 pe-1">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('themes') }}/admin/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">𝑵𝒉𝒖̛ 𝑻𝒉𝒂𝒏𝒉 𝑰𝑰</h6>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-0"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-profile-user.html">
                            <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                            <span class="align-middle">Thông tin của tôi</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item" href="/admin/users/{{ $accounts['id'] }}/account_settings">
                            <i class="mdi mdi-cog-outline me-1 mdi-20px"></i>
                            <span class="align-middle">Cài đặt</span>
                        </a>
                    </li> --}}
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                                <span class="flex-grow-1 align-middle ms-1">Thanh toán</span>
                                <span
                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-faq.html">
                            <i class="mdi mdi-help-circle-outline me-1 mdi-20px"></i>
                            <span class="align-middle">Câu hỏi thường gặp</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-pricing.html">
                            <i class="mdi mdi-currency-usd me-1 mdi-20px"></i>
                            <span class="align-middle">Định giá</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="admin/logout" target="_blank">
                            <i class="mdi mdi-logout me-1 mdi-20px"></i>
                            <span class="align-middle">Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Tìm Kiếm..."
            aria-label="Tìm Kiếm...">
        <i class="mdi mdi-close search-toggler cursor-pointer"></i>
    </div>
</nav>
<!-- / Navbar -->
