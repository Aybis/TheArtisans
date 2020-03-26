<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>@yield('title') | Artisans</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('assets/css/skins/aside/light.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/razer-logo.svg')}}" width="10px"/>
        @yield('external_css')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin::Page loader -->
            <x-header></x-header>

        <div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <!-- begin:: Aside -->

			    <!-- Sidebar  -->
                    <x-sidebar></x-sidebar>
                <!-- End Sidebar -->

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item " data-ktheader-minimize="on">
						<div class="kt-container  kt-container--fluid ">

							<!-- begin:: Subheader -->
                                    <x-breadcumbdekstop></x-breadcumbdekstop>
							<!-- begin:: Topbar -->
							<div class="kt-header__topbar" hidden>

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

								<!--begin: Quick Actions -->
								<div class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px">
										<span class="kt-header__topbar-icon"><i class="fa fa-cog"></i></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
										<div class="kt-head" style="background-image: url({{ asset('assets/media/misc/head_bg_sm.jpg')}})">
											<h3 class="kt-head__title">Quick Actions</h3>
										</div>
										<div class="kt-grid-nav">
											<a href="#" class="kt-grid-nav__item">
												<div class="kt-grid-nav__item-icon"><i class="flaticon-computer"></i></div>
												<div class="kt-grid-nav__item-title">Customers</div>
												<div class="kt-grid-nav__item-desc">per department</div>
											</a>
											<a href="#" class="kt-grid-nav__item">
												<div class="kt-grid-nav__item-icon"><i class="flaticon-business"></i></div>
												<div class="kt-grid-nav__item-title">Orders</div>
												<div class="kt-grid-nav__item-desc">latest orders</div>
											</a>
											<a href="#" class="kt-grid-nav__item">
												<div class="kt-grid-nav__item-icon"><i class="flaticon-line-graph"></i></div>
												<div class="kt-grid-nav__item-title">Reports</div>
												<div class="kt-grid-nav__item-desc">finance & accounting</div>
											</a>
											<a href="#" class="kt-grid-nav__item">
												<div class="kt-grid-nav__item-icon"><i class="flaticon-settings"></i></div>
												<div class="kt-grid-nav__item-title">Administration</div>
												<div class="kt-grid-nav__item-desc">settings and logs</div>
											</a>
										</div>
									</div>
								</div>

								<!--end: Quick Actions -->

								<!--begin: Quick Panel Toggler -->
								<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
									<div class="kt-header__topbar-wrapper">
										<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="fa fa-copy"></i></span>
									</div>
								</div>

								<!--end: Quick Panel Toggler -->

								<!--begin: Languages -->
								<div class="kt-header__topbar-item kt-header__topbar-item--langs">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon">
											<img class="" src="{{asset('assets/media/flags/226-united-states.svg')}}" alt="" />
										</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
										<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
											<li class="kt-nav__item kt-nav__item--active">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="{{asset('assets/media/flags/226-united-states.svg')}}" alt="" /></span>
													<span class="kt-nav__link-text">English</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="{{asset('assets/media/flags/128-spain.svg')}}" alt="" /></span>
													<span class="kt-nav__link-text">Spanish</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="{{asset('assets/media/flags/162-germany.svg')}}" alt="" /></span>
													<span class="kt-nav__link-text">German</span>
												</a>
											</li>
										</ul>
									</div>
								</div>

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
										<img alt="Pic" src="{{ asset('assets/media/users/300_21.jpg')}}" />

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
										<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(assets/media/misc/head_bg_sm.jpg)">
											<div class="kt-user-card__wrapper">
												<div class="kt-user-card__pic">

													<!--use "kt-rounded" class for rounded avatar style-->
													<img alt="Pic" src="{{ asset('assets/media/users/300_21.jpg')}}" class="kt-rounded-" />
												</div>
												<div class="kt-user-card__details">
													<div class="kt-user-card__name">Alex Stone</div>
													<div class="kt-user-card__position">CTO, Loop Inc.</div>
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
												<a href="custom/login/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
												<i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
											</li>
										</ul>
									</div>
								</div>

								<!--end: User -->
							</div>
                                <!-- Header Right Bar -->
                                    <x-topbar></x-topbar>
                                <!-- End Header Right Bar -->
							<!-- end:: Topbar -->
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Subheader -->
                            <x-breadcumbmobile></x-breadcumbmobile>
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--begin::Row-->
                                @yield('content')
							<!--end::Row-->
						</div>
						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
                        <x-footer></x-footer>
					<!-- end:: Footer -->
				</div>
			</div>
		</div>
		<!-- begin::Scrolltop Button for scroll to up-->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->


		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5578eb",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

        <!--end::Page Scripts -->
        @yield('external_js')
        <script type="text/javascript">
            $(document).ready(function () {
                let url = window.location;
                // for sidebar menu but not for treeview submenu
                $('ul.kt-menu__nav a').filter(function() {
                    return this.href == url;
                }).parent().siblings().removeClass('kt-menu__item--active').end().addClass('kt-menu__item--active');
                // for treeview which is like a submenu
                $('ul.kt-menu__subnav a').filter(function() {
                    return this.href == url;
                }).parentsUntil(".kt-menu__nav > .kt-menu__subnav").siblings().removeClass('kt-menu__item--open').end().addClass('kt-menu__item--open');
            });

        </script>
	</body>

	<!-- end::Body -->
</html>
