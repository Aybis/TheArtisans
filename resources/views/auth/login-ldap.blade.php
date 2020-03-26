<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../">
		<meta charset="utf-8" />
		<title>Login | Artisans</title>
		<meta name="description" content="User login example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
        <link href="{{ asset('assets/css/pages/login/login-v2.css')}}" rel="stylesheet" type="text/css" />


		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('assets/css/skins/aside/brand.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/razer-logo.svg')}}" width="10px" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">

				<!--begin::Item-->
				<div class="kt-grid__item  kt-grid--hor">

					<!--begin::Heade-->
					<div class="kt-login-v2__head animated fadeInDown">
						<div class="kt-login-v2__logo">
							<a href="#">
								{{-- <img src="{{ asset('assets/media/logos/razer-logo.svg')}}" alt=""  width="50px" height="40px"/> --}}
								<img src="{{ asset('assets/media/logos/razer.svg')}}" alt="" width="100px" height="40px" />
							</a>
						</div>
						<div class="kt-login-v2__signup" hidden>
							<span>Don't have an account?</span>
							<a href="#" class="kt-link kt-font-brand">Sign Up</a>
						</div>
					</div>

					<!--begin::Head-->
				</div>

				<!--end::Item-->

				<!--begin::Item-->
				<div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">

					<!--begin::Body-->
					<div class="kt-login-v2__body">

						<!--begin::Wrapper-->
						<div class="kt-login-v2__wrapper animated fadeInLeft">
							<div class="kt-login-v2__container">
								<div class="kt-login-v2__title">
									<h3>Sign to Artisans</h3>
								</div>

								<!--begin::Form-->
                                <form method="post" action="" class="kt-login-v2__form kt-form" id="kt_login_form">
                                <input type="hidden" id="_token" value="{{ csrf_token()}}">
									<div class="form-group">
                                        <input name="nik" id="nik" type="text" class="form-control {{$errors->has('nik') ? 'is-invalid' : '' }}" placeholder="NIK" value="{{ old('nik') }}" required autofocus>
                                        @if ($errors->has('nik'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nik') }}</strong>
                                        </span>
                                        @endif
									</div>
									<div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" id="pwldap" name="pwldap" autocomplete="off">
                                        <input name="password" id="password" type="hidden" value="semangART">
									</div>

									<!--begin::Action-->
									<div class="kt-login-v2__actions">

										<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Sign In</button>
									</div>

									<!--end::Action-->
								</form>

								<!--end::Form-->

								<!--begin::Separator-->
								<div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>

								<!--end::Separator-->

								<!--begin::Options-->
								<h3 class="kt-login-v2__desc" hidden>Or sign with social account</h3>
								<div class="kt-login-v2__options" hidden>
									<a href="#" class="btn btn-facebook btn-pill">
										<i class="fab fa-facebook-f"></i>
										Facebook
									</a>
									<a href="#" class="btn btn-twitter btn-pill">
										<i class="fab fa-twitter"></i>
										Twitter
									</a>
									<a href="#" class="btn btn-google btn-pill">
										<i class="fab fa-google"></i>
										Google
									</a>
								</div>

								<!--end::Options-->
							</div>
						</div>

						<!--end::Wrapper-->

						<!--begin::Image-->
						<div class="kt-login-v2__image animated fadeInRight">
							<img src="assets/media/misc/illustration-8.png" alt="">
						</div>

						<!--begin::Image-->
					</div>

					<!--begin::Body-->
				</div>

				<!--end::Item-->

				<!--begin::Item-->
				<div class="kt-grid__item animated fadeInUp">
					<div class="kt-login-v2__footer">
						<div class="kt-login-v2__link">
							<a href="#" class="kt-link kt-font-brand">Privacy</a>
							<a href="#" class="kt-link kt-font-brand">Legal</a>
							<a href="#" class="kt-link kt-font-brand">Contact</a>
						</div>
						<div class="kt-login-v2__info">
							<a href="#" class="kt-link">&copy; 2020 Aybis Corp</a>
						</div>
					</div>
				</div>

				<!--end::Item-->
			</div>
		</div>

		<!-- end:: Page -->

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

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{ asset('assets/js/pages/custom/user/login-ldap.js')}}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
