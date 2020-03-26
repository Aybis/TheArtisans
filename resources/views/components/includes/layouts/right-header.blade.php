<div class="animated fadeInRight kt-header__topbar" style="z-index:2">

    <!--begin: Search -->
    <div class="kt-header__topbar-item kt-header__topbar-item--search">
        <div class="kt-header__topbar-wrapper">
            <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
                <form method="get" class="kt-quick-search__form">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                        <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                        <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                    </div>
                </form>
                <div data-toggle="dropdown" data-offset="0,15px"></div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end: Search -->

    <!--begin: Search -->
    <div class="kt-header__topbar-item kt-header__topbar-item--search kt-hidden">
        <div class="kt-input-icon kt-input-icon--right">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="kt-input-icon__icon kt-input-icon__icon--right">
                <span><i class="la la-search"></i></span>
            </span>
        </div>
    </div>

    <!--end: Search -->



    <!--end: Quick Actions -->

    <!--begin: Quick Panel Toggler -->
    <div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
        <div class="kt-header__topbar-wrapper">
            <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="fa fa-copy"></i></span>
        </div>
    </div>

    <!--end: Quick Panel Toggler -->


    <!--end: Languages -->

    <!--begin: Notifications -->
    <div class="kt-header__topbar-item dropdown">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
            <span class="kt-header__topbar-icon kt-bg-brand"><i class="fa fa-bell kt-font-light"></i></span>
            <span class="kt-badge kt-badge--danger kt-badge--notify">3</span>
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
            <div class="kt-head" style="background-image: url({{ asset('assets/media/misc/head_bg_sm.jpg')}})">
                <h3 class="kt-head__title">User Notifications</h3>
                <div class="kt-head__sub"><span class="kt-head__desc">23 new notifications</span></div>
            </div>
            <div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-line-chart kt-font-success"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New order has been received
                        </div>
                        <div class="kt-notification__item-time">
                            2 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-box-1 kt-font-brand"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New customer is registered
                        </div>
                        <div class="kt-notification__item-time">
                            3 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-chart2 kt-font-danger"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            Application has been approved
                        </div>
                        <div class="kt-notification__item-time">
                            3 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-image-file kt-font-warning"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New file has been uploaded
                        </div>
                        <div class="kt-notification__item-time">
                            5 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-user kt-font-info"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New user feedback received
                        </div>
                        <div class="kt-notification__item-time">
                            8 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            System reboot has been successfully completed
                        </div>
                        <div class="kt-notification__item-time">
                            12 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-favourite kt-font-focus"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New order has been placed
                        </div>
                        <div class="kt-notification__item-time">
                            15 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item kt-notification__item--read">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-safe kt-font-primary"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            Company meeting canceled
                        </div>
                        <div class="kt-notification__item-time">
                            19 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-psd kt-font-success"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New report has been received
                        </div>
                        <div class="kt-notification__item-time">
                            23 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon-download-1 kt-font-danger"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            Finance report has been generated
                        </div>
                        <div class="kt-notification__item-time">
                            25 hrs ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon-security kt-font-warning"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New customer comment recieved
                        </div>
                        <div class="kt-notification__item-time">
                            2 days ago
                        </div>
                    </div>
                </a>
                <a href="#" class="kt-notification__item">
                    <div class="kt-notification__item-icon">
                        <i class="flaticon2-pie-chart kt-font-focus"></i>
                    </div>
                    <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title">
                            New customer is registered
                        </div>
                        <div class="kt-notification__item-time">
                            3 days ago
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--end: Notifications -->

    <!--begin: User -->
    <div class="kt-header__topbar-item kt-header__topbar-item--user">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
            <img alt="Pic" src="{{ asset('assets/media/logos/razer-logo.svg')}}" width="40px" />

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
            <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url({{ asset('assets/media/misc/head_bg_sm.jpg')}})">
                <div class="kt-user-card__wrapper">
                    <div class="kt-user-card__pic">

                        <!--use "kt-rounded" class for rounded avatar style-->
                        <img alt="Pic" src="{{ asset('assets/media/logos/razer-logo.svg')}}" width="40px" class="kt-rounded-" />
                    </div>
                    <div class="kt-user-card__details">
                        <div class="kt-user-card__name">{{ Auth::user()->name }}</div>
                        <div class="kt-user-card__position">{{ strtoupper(Auth::user()->level)}}</div>
                    </div>
                </div>
            </div>
            <ul class="kt-nav kt-margin-b-10">
                <li class="kt-nav__item">
                    <a href="custom/profile/personal-information.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                        <span class="kt-nav__link-text">My Profile</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/overview-1.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                        <span class="kt-nav__link-text">My Tasks</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/overview-2.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
                        <span class="kt-nav__link-text">Messages</span>
                    </a>
                </li>
                <li class="kt-nav__item">
                    <a href="custom/profile/account-settings.html" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
                        <span class="kt-nav__link-text">Settings</span>
                    </a>
                </li>
                <li class="kt-nav__separator kt-nav__separator--fit"></li>
                <li class="kt-nav__custom kt-space-between">
                    <a href="/logout" onClick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
                    <i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                </li>
                <div class="text-center">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </ul>
        </div>
    </div>

    <!--end: User -->
</div>
