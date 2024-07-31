
<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="MuchLearn Admin Dashboard & Backend">
		<meta name="author" content=" MuchLearn Incorporated">
		<meta name="keywords" content="muchlearn much learn lms online education online learning data science data-science, mobile-development, mobile development, software engineering, software-engineering">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('bend/images/brand/favicon.ico') }}" />

		<!-- TITLE -->
		<title>MuchLearn – Admin</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{asset ('bend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset ('bend/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset ('bend/css/plugins.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset ('bend/css/icons.css')}}" rel="stylesheet"/>

	</head>

	<body class="app sidebar-mini ltr light-mode">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset ('bend/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- App-Header -->
				<div class="app-header header sticky">
					<div class="container-fluid main-container">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
							</a>
							<a class="logo-horizontal " href="index.html">
								<img src="{{asset ('bend/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset ('bend/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
									alt="logo">
							</a>
							<!-- sidebar-toggle-->
							<div class="header-search d-none d-lg-flex">
								<div class="form-inline">
									<div class="search-element">
										<input type="search" class="form-control header-search" placeholder="Search…"
											aria-label="Search" tabindex="1">
										<button class="btn btn-primary-color">
											<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
												width="24">
												<path d="M0 0h24v24H0V0z" fill="none" />
												<path
													d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
											</svg>
										</button>
									</div>
								</div>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons header-search-icon">
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
									data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
									aria-controls="navbarSupportedContent-4" aria-expanded="false"
									aria-label="Toggle navigation">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
										class="navbar-toggler-icon">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path
											d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
									</svg>
								</button>
								<div class="navbar navbar-collapse responsive-navbar p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<div class="d-flex">
											<div class="dropdown d-lg-none d-flex">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
														width="24">
														<path d="M0 0h24v24H0V0z" fill="none" />
														<path
															d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
													</svg>
												</a>
												<div class="dropdown-menu header-search dropdown-menu-start">
													<div class="input-group w-100 p-2">
														<input type="text" class="form-control " placeholder="Search....">
														<button type="button" class="btn btn-primary position-relative">
															<svg xmlns="http://www.w3.org/2000/svg" height="24"
																viewBox="0 0 24 24" width="24" fill="#fff">
																<path d="M0 0h24v24H0V0z" fill="none" />
																<path
																	d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
															</svg>
														</button>
													</div>
												</div>
											</div><!-- SEARCH -->
											<div class="dropdown d-flex main-header-theme">
												<a class="nav-link icon layout-setting">
													<span class="dark-layout fs-0">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" /></svg>

													</span>
													<span class="light-layout fs-0">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3.55 19.09L4.96 20.5L6.76 18.71L5.34 17.29M12 6C8.69 6 6 8.69 6 12S8.69 18 12 18 18 15.31 18 12C18 8.68 15.31 6 12 6M20 13H23V11H20M17.24 18.71L19.04 20.5L20.45 19.09L18.66 17.29M20.45 5L19.04 3.6L17.24 5.39L18.66 6.81M13 1H11V4H13M6.76 5.39L4.96 3.6L3.55 5L5.34 6.81L6.76 5.39M1 13H4V11H1M13 20H11V23H13" /></svg>
													</span>
												</a>
											</div><!-- Theme-Layout -->
											<div class="dropdown  d-flex">
												<a class="nav-link icon full-screen-link nav-link-bg">
													<svg class="fullscreen-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M9.5,13.09L10.91,14.5L6.41,19H10V21H3V14H5V17.59L9.5,13.09M10.91,9.5L9.5,10.91L5,6.41V10H3V3H10V5H6.41L10.91,9.5M14.5,13.09L19,17.59V14H21V21H14V19H17.59L13.09,14.5L14.5,13.09M13.09,9.5L17.59,5H14V3H21V10H19V6.41L14.5,10.91L13.09,9.5Z" /></svg>
												</a>
											</div><!-- FULL-SCREEN -->
											<div class="dropdown  d-flex notifications">
												<a class="nav-link icon" data-bs-toggle="dropdown">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M10 21H14C14 22.1 13.1 23 12 23S10 22.1 10 21M21 19V20H3V19L5 17V11C5 7.9 7 5.2 10 4.3V4C10 2.9 10.9 2 12 2S14 2.9 14 4V4.3C17 5.2 19 7.9 19 11V17L21 19M17 11C17 8.2 14.8 6 12 6S7 8.2 7 11V18H17V11Z" /></svg>
													<span class="pulse1 bg-success"></span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<div class="p-4 border-bottom">
														<h5 class="border-bottom-0 mb-0 fs-16 font-weight-semibold ">Notifications</h5>
													</div>
													<div class="notifications-menu">
														<a class="dropdown-item d-flex" href="email-inbox.html">
															<div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
																<i class="fe fe-mail"></i>
															</div>
															<div class="w-80">
																<h6 class="notification-label mb-0 text-wrap">Commented on your post </h6>
																<span class="notification-subtext text-muted fs-12">3 days ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="email-inbox.html">
															<div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
																<i class="fe fe-download"></i>
															</div>
															<div class="w-80">
																<h6 class="notification-label mb-0 text-wrap">New file has been Uploaded </h6>
																<span class="notification-subtext text-muted fs-12">3 days ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="email-inbox.html">
															<div class="me-3 notifyimg  bg-warning brround box-shadow-warning">
																<i class="fe fe-user"></i>
															</div>
															<div class="w-80">
																<h6 class="notification-label mb-0 text-wrap">User account has
																	Updated</h6>
																<span class="notification-subtext text-muted fs-12">2 days ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="email-inbox.html">
															<div class="me-3 notifyimg  bg-danger brround box-shadow-danger">
																<i class="fe fe-shopping-cart"></i>
															</div>
															<div class="w-80">
																<h6 class="notification-label mb-0 text-wrap">New Order Recevied </h6>
																<span class="notification-subtext text-muted fs-12">1 hour ago</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="email-inbox.html">
															<div class="me-3 notifyimg  bg-info brround box-shadow-info">
																<i class="fe fe-server"></i>
															</div>
															<div class="w-80">
																<h6 class="notification-label mb-0 text-wrap">Server Rebooted </h6>
																<span class="notification-subtext text-muted fs-12">2 hour ago</span>
															</div>
														</a>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a href="email-inbox.html" class="dropdown-item text-center">View all Notification</a>
												</div>
											</div><!-- NOTIFICATIONS -->
											<div class="dropdown  d-flex message">
												<a class="nav-link icon text-center" data-bs-toggle="dropdown">
													<svg class="mt-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M20 2H4C2.9 2 2 2.9 2 4V16C2 17.1 2.9 18 4 18H18L22 22V4C22 2.9 21.1 2 20 2M20 17.2L18.8 16H4V4H20V17.2Z" /></svg>
													<span class="nav-unread badge bg-danger rounded-pill pulse">3</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<div class="p-4 border-bottom">
														<h5 class="border-bottom-0 mb-0 fs-16 font-weight-semibold ">Messages</h5>
													</div>
													<div class="message-menu message-menu-scroll message-menu">
														<a class="dropdown-item d-flex" href="chat.html">
															 <span class="avatar brround me-3 cover-image" data-bs-image-src="{{asset ('bend/images/users/1.jpg" style="background: url(&quot;{{asset ('bend/images/users/1.jpg&quot;) center center;">
															</span>
															<div class="w-90">
																 <div class="d-flex">
																	<h6 class="my-1 text-break">Madeleine</h6>
																	<span class="text-muted ms-auto text-wrap fs-12"> 35 sec ago </span>
																</div>
																<span class="text-muted fs-13">Hey! there I' am available..</span>
															</div>
														</a>
														<a class="dropdown-item d-flex" href="chat.html">
															<span class="avatar brround me-3 cover-image" data-bs-image-src="{{asset ('bend/images/users/2.jpg" style="background: url(&quot;{{asset ('bend/images/users/2.jpg&quot;) center center;">
														   </span>
														   <div class="w-90">
																<div class="d-flex">
																   <h6 class="my-1 text-break">Anthony</h6>
																   <span class="text-muted ms-auto text-wrap fs-12"> 15 mins ago </span>
															   </div>
															   <span class="text-muted fs-13">New product Launching...</span>
														   </div>
													   </a>
														<a class="dropdown-item d-flex" href="chat.html">
															<span class="avatar brround me-3 cover-image" data-bs-image-src="{{asset ('bend/images/users/9.jpg" style="background: url(&quot;{{asset ('bend/images/users/9.jpg&quot;) center center;">
														   </span>
														   <div class="w-90">
																<div class="d-flex">
																   <h6 class="my-1 text-break">Olivia</h6>
																   <span class="text-muted ms-auto text-wrap fs-12"> 2 hrs ago </span>
															   </div>
															   <span class="text-muted fs-13">New Schedule Realease...</span>
														   </div>
													   </a>
														<a class="dropdown-item d-flex" href="chat.html">
															<span class="avatar brround me-3 cover-image" data-bs-image-src="{{asset ('bend/images/users/10.jpg" style="background: url(&quot;{{asset ('bend/images/users/10.jpg&quot;) center center;">
														   </span>
														   <div class="w-90">
																<div class="d-flex">
																   <h6 class="my-1 text-break">Sanderson</h6>
																   <span class="text-muted ms-auto text-wrap fs-12"> 4 hrs ago </span>
															   </div>
															   <span class="text-muted fs-13">New Schedule Realease...</span>
														   </div>
													   </a>
													</div>
													<div class="dropdown-divider m-0"></div>
													<a href="javascript:void(0);" class="dropdown-item text-center">See all Messages</a>
												</div>
											</div><!-- MESSAGE-BOX -->
											<div class="dropdown  d-flex country-selector">
												<a href="javascript:void(0);" class="d-flex nav-link icon leading-none" data-bs-toggle="dropdown"
													aria-expanded="true">
													<img src="{{asset ('bend/images/flags/us_flag.jpg" alt="img"
														class="align-self-center">
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<a href="javascript:void(0);" class="dropdown-item d-flex pb-2 px-4">
														<img src="{{asset ('bend/images/flags/french_flag.jpg" alt="flag-img"
															class="avatar  me-3 align-self-center">
														<div class="countries">
															<strong>French</strong>
														</div>
													</a>
													<a href="javascript:void(0);" class="dropdown-item d-flex pb-2 px-4">
														<img src="{{asset ('bend/images/flags/germany_flag.jpg" alt="flag-img"
															class="avatar  me-3 align-self-center">
														<div class="countries">
															<strong>Germany</strong>
														</div>
													</a>
													<a href="javascript:void(0);" class="dropdown-item d-flex pb-2 px-4">
														<img src="{{asset ('bend/images/flags/italy_flag.jpg" alt="flag-img"
															class="avatar  me-3 align-self-center">
														<div class="countries">
															<strong>Italy</strong>
														</div>
													</a>
													<a href="javascript:void(0);" class="dropdown-item d-flex pb-2 px-4">
														<img src="{{asset ('bend/images/flags/russia_flag.jpg" alt="flag-img"
															class="avatar  me-3 align-self-center">
														<div class="countries">
															<strong>Russia</strong>
														</div>
													</a>
													<a href="javascript:void(0);" class="dropdown-item d-flex pb-2 px-4">
														<img src="{{asset ('bend/images/flags/spain_flag.jpg" alt="flag-img"
															class="avatar  me-3 align-self-center">
														<div class="countries">
															<strong>Spain</strong>
														</div>
													</a>
												</div>
											</div>
											<div class="dropdown profile-1 d-flex">
												<a href="javascript:void(0);" data-bs-toggle="dropdown"
													class="nav-link icon leading-none d-flex">
													<img src="{{asset ('bend/images/users/4.jpg" alt="profile-user"
														class="avatar profile-user brround cover-image">
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
													<a class="dropdown-item" href="profile.html">
														<i class="dropdown-icon mdi mdi-account-outline"></i> My Profile
													</a>
													<a class="dropdown-item" href="profile.html">
														<i class="dropdown-icon zmdi zmdi-edit"></i> Edit Profile
													</a>
													<a class="dropdown-item" href="settings.html">
														<i class="dropdown-icon  mdi mdi-settings"></i> Settings
													</a>
													<a class="dropdown-item" href="email-inbox.html">
														<span class="float-end"></span>
														<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
													</a>
													<a class="dropdown-item" href="email-compose.html">
														<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
													</a>
													<a class="dropdown-item" href="faq.html">
														<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
													</a>
													<a class="dropdown-item" href="login.html">
														<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
													</a>
												</div>
											</div>
											<div class="dropdown  d-flex header-settings">
												<a href="javascript:void(0);" class="nav-link icon " data-bs-toggle="sidebar-right"
													data-bs-target=".sidebar-right">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
												</a>
											</div><!-- SIDE-MENU -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- App-Header -->

				<!--APP-SIDEBAR-->
				<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
					<div class="app-sidebar">
						<div class="side-header">
							<a class="header-brand1" href="index.html">
								<img src="{{asset ('bend/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset ('bend/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo"
									alt="logo">
								<img src="{{asset ('bend/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
								<img src="{{asset ('bend/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
									alt="logo">
							</a>
							<!-- LOGO -->
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
								<ul class="side-menu">
									<li>
										<h3 class="sub-category">Main</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22" /></svg>
											<span class="side-menu__label">Dashboard</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Dashboard</a></li>
											<li><a class="slide-item" href="index.html"><span>Sales Dashboard</span></a></li>
											<li><a class="slide-item" href="index2.html"><span>Marketing Dashboard</span></a></li>
											<li><a class="slide-item" href="index3.html"><span>App Dashboard</span></a></li>
											<li><a class="slide-item" href="index4.html"><span>LMS Dashboard</span></a></li>
											<li><a class="slide-item" href="index5.html"><span>Analytics Dashboard</span></a></li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">Apps</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg  class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z" /></svg>
											<span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Apps</a></li>
											<li><a class="slide-item" href="widgets.html"><span>Widgets</span></a></li>
											<li><a class="slide-item" href="switcher.html"><span>Switcher</span></a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Maps</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="maps-leaflet.html"> Leaflet Maps</a></li>
													<li><a class="sub-slide-item" href="maps-mapel.html"> Mapel Maps</a></li>
													<li><a class="sub-slide-item" href="maps-vector.html"> Vector Maps</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Mails</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="email-compose.html"> Mail-Compose</a></li>
													<li><a class="sub-slide-item" href="email-inbox.html"> Mail-Inbox</a></li>
													<li><a class="sub-slide-item" href="email-view.html"> View-Mail</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">Elements</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M7,17L10.2,10.2L17,7L13.8,13.8L7,17M12,11.1A0.9,0.9 0 0,0 11.1,12A0.9,0.9 0 0,0 12,12.9A0.9,0.9 0 0,0 12.9,12A0.9,0.9 0 0,0 12,11.1M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" /></svg>
											<span class="side-menu__label">Components</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Components</a></li>
											<li><a href="cards.html" class="slide-item"> Cards design</a></li>
											<li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
											<li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
											<li><a href="contacts.html" class="slide-item"> Contacts</a></li>
											<li><a href="collapse.html" class="slide-item"> Collapse</a></li>
											<li><a href="chat.html" class="slide-item"> Default Chat</a></li>
											<li><a href="notify.html" class="slide-item"> Notifications</a></li>
											<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
											<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
											<li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
											<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
											<li><a href="counters.html" class="slide-item"> Counters</a></li>
											<li><a href="rating.html" class="slide-item"> Rating</a></li>
											<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
											<li><a href="treeview.html" class="slide-item"> Treeview</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg  class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7V17C4 19.21 7.59 21 12 21S20 19.21 20 17V7C20 4.79 16.42 3 12 3M18 17C18 17.5 15.87 19 12 19S6 17.5 6 17V14.77C7.61 15.55 9.72 16 12 16S16.39 15.55 18 14.77V17M18 12.45C16.7 13.4 14.42 14 12 14C9.58 14 7.3 13.4 6 12.45V9.64C7.47 10.47 9.61 11 12 11C14.39 11 16.53 10.47 18 9.64V12.45M12 9C8.13 9 6 7.5 6 7S8.13 5 12 5C15.87 5 18 6.5 18 7S15.87 9 12 9Z" /></svg>
											<span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Elements</a></li>
											<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
											<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
											<li><a href="dropdown.html" class="slide-item"> Dropdowns</a></li>
											<li><a href="colors.html" class="slide-item"> Colors</a></li>
											<li><a href="avatarsquare.html" class="slide-item"> Avatar-Square</a></li>
											<li><a href="avatar-round.html" class="slide-item"> Avatar-Rounded</a></li>
											<li><a href="avatar-radius.html" class="slide-item"> Avatar-Radius</a></li>
											<li><a href="list.html" class="slide-item"> Lists & ListGroups</a></li>
											<li><a href="tags.html" class="slide-item"> Tags</a></li>
											<li><a href="toast.html" class="slide-item"> Toast</a></li>
											<li><a href="offcanvas.html" class="slide-item"> Offcanvas</a></li>
											<li><a href="scrollspy.html" class="slide-item"> Scrollspy</a></li>
											<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
											<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
											<li><a href="typography.html" class="slide-item"> Typography</a></li>
											<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
											<li><a href="badge.html" class="slide-item"> Badges</a></li>
											<li><a href="panels.html" class="slide-item"> Panels</a></li>
											<li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg  class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L6.04,7.5L12,10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V9.21L13,12.58V19.29L19,15.91Z" /></svg>
											<span class="side-menu__label">Advanced UI</span>
											<i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Advanced Elements</a></li>
											<li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
											<li><a href="accordion.html" class="slide-item"> Accordions</a></li>
											<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
											<li><a href="modal.html" class="slide-item"> Modal</a></li>
											<li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
											<li><a href="progress.html" class="slide-item"> Progress</a></li>
											<li><a href="carousel.html" class="slide-item"> Carousels</a></li>
											<li><a href="footers.html" class="slide-item"> Footers</a></li>
											<li><a href="users-list.html" class="slide-item"> User List</a></li>
											<li><a href="search.html" class="slide-item">Search</a></li>
											<li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">Icons</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2C17.5,2 22,6 22,11A6,6 0 0,1 16,17H14.2C13.9,17 13.7,17.2 13.7,17.5C13.7,17.6 13.8,17.7 13.8,17.8C14.2,18.3 14.4,18.9 14.4,19.5C14.5,20.9 13.4,22 12,22M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20C12.3,20 12.5,19.8 12.5,19.5C12.5,19.3 12.4,19.2 12.4,19.1C12,18.6 11.8,18.1 11.8,17.5C11.8,16.1 12.9,15 14.3,15H16A4,4 0 0,0 20,11C20,7.1 16.4,4 12,4M6.5,10C7.3,10 8,10.7 8,11.5C8,12.3 7.3,13 6.5,13C5.7,13 5,12.3 5,11.5C5,10.7 5.7,10 6.5,10M9.5,6C10.3,6 11,6.7 11,7.5C11,8.3 10.3,9 9.5,9C8.7,9 8,8.3 8,7.5C8,6.7 8.7,6 9.5,6M14.5,6C15.3,6 16,6.7 16,7.5C16,8.3 15.3,9 14.5,9C13.7,9 13,8.3 13,7.5C13,6.7 13.7,6 14.5,6M17.5,10C18.3,10 19,10.7 19,11.5C19,12.3 18.3,13 17.5,13C16.7,13 16,12.3 16,11.5C16,10.7 16.7,10 17.5,10Z" /></svg>
											<span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Icons</a></li>
											<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
											<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
											<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
											<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
											<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
											<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
											<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
											<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
											<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
											<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
											<li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">Pages</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,18.54L19.37,12.8L21,14.07L12,21.07L3,14.07L4.62,12.81L12,18.54M12,16L3,9L12,2L21,9L12,16M12,4.53L6.26,9L12,13.47L17.74,9L12,4.53Z" /></svg>
											<span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Pages</a></li>
											<li><a href="profile.html" class="slide-item"> Profile</a></li>
											<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
											<li><a href="about.html" class="slide-item"> About Company</a></li>
											<li><a href="services.html" class="slide-item"> Services</a></li>
											<li><a href="faq.html" class="slide-item"> FAQS</a></li>
											<li><a href="terms.html" class="slide-item"> Terms</a></li>
											<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
											<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
											<li><a href="settings.html" class="slide-item"> Settings</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#.html"><span
														class="sub-side-menu__label">Blog</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="blog.html"> Blog Page</a></li>
													<li><a class="sub-slide-item" href="blog-details.html"> Blog Details</a></li>
													<li><a class="sub-slide-item" href="blog-post.html"> Blog Post</a></li>
												</ul>
											</li>

											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Charts</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="chart-chartist.html">Chart Js</a></li>
													<li><a class="sub-slide-item" href="chart-flot.html"> Flot Charts</a></li>
													<li><a class="sub-slide-item" href="chart-echart.html"> ECharts</a></li>
													<li><a class="sub-slide-item" href="chart-morris.html"> Morris Charts</a></li>
													<li><a class="sub-slide-item" href="chart-nvd3.html"> Nvd3 Charts</a></li>
													<li><a class="sub-slide-item" href="charts.html"> C3 Bar Charts</a></li>
													<li><a class="sub-slide-item" href="chart-line.html"> C3 Line Charts</a></li>
													<li><a class="sub-slide-item" href="chart-donut.html"> C3 Donut Charts</a></li>
													<li><a class="sub-slide-item" href="chart-pie.html"> C3 Pie charts</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Tables</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="tables.html">Default table</a></li>
													<li><a class="sub-slide-item" href="datatable.html"> Data Tables</a></li>
													<li><a class="sub-slide-item" href="edit-table.html"> Edit Tables</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Forms</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="form-elements.html"> Form Elements</a></li>
													<li><a class="sub-slide-item" href="form-layouts.html"> Form Layouts</a></li>
													<li><a class="sub-slide-item" href="form-editor.html"> Form Editor</a></li>
													<li><a class="sub-slide-item" href="form-wizard.html"> Form Wizard</a></li>
													<li><a class="sub-slide-item" href="form-validation.html"> Form Validation</a></li>
													<li><a class="sub-slide-item" href="form-sizes.html"> Form Element Sizes</a></li>
												</ul>
											</li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">File Manager</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="file-manager.html"> File Manager</a></li>
													<li><a class="sub-slide-item" href="filemanager-list.html"> File Manager List</a></li>
													<li><a class="sub-slide-item" href="filemanager-details.html"> File Details</a></li>
													<li><a class="sub-slide-item" href="file-attachments.html"> File Attachments</a></li>
												</ul>
											</li>
											<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M2,16H10V14H2M18,14V10H16V14H12V16H16V20H18V16H22V14M14,6H2V8H14M14,10H2V12H14V10Z" /></svg>
											<span class="side-menu__label">Submenu Items</span><i class="angle fe fe-chevron-right"></i>
										</a>

										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Submenu Items</a></li>
											<li><a href="javascript:void(0);" class="slide-item"> Submenu-1</a></li>
											<li class="sub-slide">
												<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
														class="sub-side-menu__label">Submenu-2</span><i
														class="sub-angle fa fa-angle-right"></i></a>
												<ul class="sub-slide-menu">
													<li><a class="sub-slide-item" href="javascript:void(0);"> Submenu-2.1</a></li>
													<li class="sub-slide2">
														<a class="sub-side-menu__item2" href="javascript:void(0);" data-bs-toggle="sub-slide2"><span
																class="sub-side-menu__label2">Submenu-2.2</span><i
																class="sub-angle2 fe fe-chevron-right"></i></a>
														<ul class="sub-slide-menu2">
															<li><a href="javascript:void(0);" class="sub-slide-item2"> Submenu-2.2.1</a></li>
															<li><a href="javascript:void(0);" class="sub-slide-item2"> Submenu-2.2.2</a></li>
														</ul>
													</li>
													<li><a class="sub-slide-item" href="javascript:void(0);"> Submenu-2.3</a></li>
													<li><a class="sub-slide-item" href="javascript:void(0);"> Submenu-2.4</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">E-Commerce</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
											<span class="side-menu__label">E-Commerce</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">E-Commerce</a></li>
											<li><a href="shop.html" class="slide-item"> Shop</a></li>
											<li><a href="shop-description.html" class="slide-item">Product Details</a></li>
											<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
											<li><a href="add-product.html" class="slide-item">Add Product</a></li>
											<li><a href="wishlist.html" class="slide-item">Wish List</a></li>
											<li><a href="checkout.html" class="slide-item"> Checkout</a></li>
										</ul>
									</li>
									<li>
										<h3 class="sub-category">Custom & Error Pages</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z" /></svg>
											<span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Custom Pages</a></li>
											<li><a href="login.html" class="slide-item"> Login</a></li>
											<li><a href="register.html" class="slide-item"> Register</a></li>
											<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
											<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
											<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M8.27,3L3,8.27V15.73L8.27,21H15.73C17.5,19.24 21,15.73 21,15.73V8.27L15.73,3M9.1,5H14.9L19,9.1V14.9L14.9,19H9.1L5,14.9V9.1M11,15H13V17H11V15M11,7H13V13H11V7" /></svg>
											<span class="side-menu__label">Error Pages</span><i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="side-menu-label1"><a href="javascript:void(0);">Error Pages</a></li>
											<li><a href="400.html" class="slide-item"> 400</a></li>
											<li><a href="401.html" class="slide-item"> 401</a></li>
											<li><a href="403.html" class="slide-item"> 403</a></li>
											<li><a href="404.html" class="slide-item"> 404</a></li>
											<li><a href="500.html" class="slide-item"> 500</a></li>
											<li><a href="503.html" class="slide-item"> 503</a></li>
										</ul>
									</li>
								</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div>
						</div>
					</div>
					<!--/APP-SIDEBAR-->
				</div>
				<!--/APP-SIDEBAR-->

				<!--app-content open-->
				<div class="main-content app-content mt-0">
					<div class="side-app">

						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">LMS Dashboard</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">LMS Dashboard</li>
									</ol>
								</div>
								<div class="ms-auto pageheader-btn">
									<a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
										<span>
											<i class="fe fe-shopping-cart"></i>
										</span> Add Order
									</a>
									<a href="javascript:void(0);" class="btn btn-secondary btn-icon text-white">
										<span>
											<i class="fe fe-plus"></i>
										</span> Add User
									</a>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 -->
							<div class="row">
								<div class="col-md-12">
									<div class="card  banner">
										<div class="card-body">
											<div class="row">
												<div class="col-xl-3 col-lg-3 text-center mb-3 mb-lg-0">
													<img src="{{asset ('bend/images/pngs/dash4.png')}}" alt="img" class="w-95">
												</div>
												<div class="col-xl-9 col-lg-9 ps-lg-0">
													<div class="row">
														<div class="col-xl-7 col-lg-6">
															<div class="text-start text-white mt-xl-4">
																<h3 class="font-weight-semibold">Congratulations Steven</h3>
																<h4 class="font-weight-normal">You Cources Reached your targeted milestone</h4>
																<p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
															</div>
														</div>
														<div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
															<h5 class="font-weight-semibold mb-1 text-white">Students Subscribed</h5>
															<h2 class="display-2 mb-3 number-font text-white">50M</h2>
															<div class="btn-list mb-xl-0">
																<a href="javascript:void(0);" class="btn btn-pink mb-xl-0">Check Details</a>
																<a href="javascript:void(0);" class="btn btn-white mb-xl-0" id="skip">No, Thanks</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 End-->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-xxl-3 col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col">
													<div class="dash1">
														<p class="mb-1">Total Students</p>
														<h3 class="mb-1 number-font">479</h3>
														<span class="fs-12 text-muted">
															<span class="text-success me-1"><i class="fe fe-trending-up"></i> <strong> 2.6%</strong></span>
															<span class="ms-0 mt-1">than last week</span>
														</span>
													</div>
												</div>
												<div class="col col-auto">
													<p class="data-attributes mb-0 mt-3">
														<span data-peity='{ "fill": ["#ec5444", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col">
													<div class="dash1">
														<p class="mb-1">Total Instructors</p>
														<h3 class="mb-1 number-font">534</h3>
														<span class="fs-12 text-muted">
															<span class="text-danger me-1"><i class="fe fe-trending-down"></i> <strong> 0.5%</strong></span>
															<span class="ms-0 mt-1">than last week</span>
														</span>
													</div>
												</div>
												<div class="col col-auto">
													<p class="data-attributes mb-0 mt-3">
														<span data-peity='{ "fill": ["#1cc5ef", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>4/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col">
													<div class="dash1">
														<p class="mb-1">Total Courses</p>
														<h3 class="mb-1 number-font">487</h3>
														<span class="fs-12 text-muted">
															<span class="text-success me-1"><i class="fe fe-trending-up"></i> <strong> 1.5%</strong> </span>
															<span class="ms-0 mt-1">than last week</span>
														</span>
													</div>
												</div>
												<div class="col col-auto">
													<p class="data-attributes mb-0 mt-3">
														<span data-peity='{ "fill": ["#24e4ac", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>6/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xxl-3 col-sm-6">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col">
													<div class="dash1">
														<p class="mb-1">Total Assignments</p>
														<h3 class="mb-1 number-font">84</h3>
														<span class="fs-12 text-muted">
															<span class="text-danger me-1"><i class="fe fe-trending-down"></i> <strong> 0.6%</strong></span>
															<span class="ms-0 mt-1">than last week</span>
														</span>
													</div>
												</div>
												<div class="col col-auto">
													<p class="data-attributes mb-0 mt-3">
														<span data-peity='{ "fill": ["#f18238", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>3/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xl-8">
									<div class="card overflow-hidden">
										<div class="card-header">
											<h3 class="card-title">Learners with Time Sent Monthlywise</h3>
										</div>
										<div class="card-body">
											<div id="learners"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xl-4">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Course Progress</h3>
										</div>
										<div class="card-body">
											<div id="morrisBarchart1" class="h-250 morris-donut-charts"></div>
											<div class="row mt-2">
												<div class="col-md-6 col-6 text-center mb-5">
													<div class="task-box mb-0">
														<p class="text-muted mb-2"><span class="dot-label bg-lightblue me-2"></span>Completed</p>
														<h5 class="mt-1 mb-0 number-font1 font-weight-semibold">3,567</h5>
													</div>
												</div>
												<div class="col-md-6 col-6 text-center mb-5">
													<div class="task-box mb-0">
														<p  class="text-muted mb-2"><span class="dot-label bg-primary me-2"></span>In Progress</p>
														<h5 class="mt-1 mb-0 number-font1 font-weight-semibold">1,456</h5>
													</div>
												</div>
												<div class="col-md-6 col-6 text-center mb-4 mb-lg-0">
													<div class="task-box mb-0">
														<p  class="text-muted mb-2"><span class="dot-label bg-secondary1 me-2"></span>Not Completed</p>
														<h5 class="mt-1 mb-0 number-font1 font-weight-semibold">456</h5>
													</div>
												</div>
												<div class="col-md-6 col-6 text-center">
													<div class="task-box mb-0">
														<p  class="text-muted mb-2"><span class="dot-label bg-pink me-2"></span>Not Started</p>
														<h5 class="mt-1 mb-0 number-font1 font-weight-semibold">133</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card border-bottom-0 overflow-hidden">
										<div class="card-header">
											<h3 class="card-title">Popular Courses</h3>
										</div>
										<div class="card-body p-0">
											<div class="table-responsive">
												<table class="table  mb-0 text-nowrap">
													<tbody>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-2.png')}}" alt="img" class="ang-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">AngularJs</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>9 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>2 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$34</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-1.png')}}" alt="img" class="wd-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">Wordpress</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>3 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>1 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$16</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-3.png')}}" alt="img" class="re-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">React</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>4 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>4 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$25</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-4.png" alt="img" class="vue-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">Vuejs</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>5 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>2 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$18</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-5.png')}}" alt="img" class="lar-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">Laravel</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>3 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>3 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$22</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
														<tr>
															<td>
																<div class="software-cat">
																	<img src="{{asset ('bend/images/pngs/0-6.png')}}" alt="img" class="node-bg br-5">
																</div>
															</td>
															<td>
																<h6 class="mb-1 font-weight-semibold">Nodejs</h6>
																<small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>2 Months</small>
																<small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>1 Hours</small>
															</td>
															<td class="text-center">
																<h6 class="mb-0 fw-600">$28</h6>
																<span class="fs-12 text-yellow">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Students Overview</h3>
										</div>
										<div class="card-body">
											<div class="mb-5">
												<p class="mb-2">Good<span class="float-end"><b>80%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-primary" role="progressbar" style="width:80%"></div>
												</div>
											</div>
											<div class="mb-5">
												<p class="mb-2">Satisfied<span class="float-end"><b>75%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-secondary" role="progressbar" style="width:75%"></div>
												</div>
											</div>
											<div class="mb-5">
												<p class="mb-2">Excellent<span class="float-end"><b>72%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-secondary1" role="progressbar" style="width:70%"></div>
												</div>
											</div>
											<div class="mb-5">
												<p class="mb-2">Average<span class="float-end"><b>65%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-warning" role="progressbar" style="width:65%"></div>
												</div>
											</div>
											<div class="mb-5">
												<p class="mb-2">Below Average<span class="float-end"><b>50%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-info" role="progressbar" style="width:50%"></div>
												</div>
											</div>
											<div class="mb-0">
												<p class="mb-2">Unsatisfied<span class="float-end"><b>40%</b></span></p>
												<div class="progress h-2">
													<div class="progress-bar bg-orange" role="progressbar" style="width:40%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Top 5 Instructors</h3>
										</div>
										<div class="card-body p-0">
											<div class="p-0 br-5">
												<div class="list d-flex align-items-center border-bottom px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/1.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex">
															<div>
																<h6 class="mb-1">Lillian Blake</h6>
																<p class="mb-0 fs-12 text-muted">Web Designer</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:2 hours</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list d-flex align-items-center border-bottom px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/10.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex">
															<div>
																<h6 class="mb-1 font-weight-normal">Tim Gray</h6>
																<p class="mb-0 fs-12 text-muted">Data Science</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:1 hours</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list d-flex align-items-center border-bottom px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/12.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex">
															<div>
																<h6 class="mb-1 font-weight-normal">Carley Murrer</h6>
																<p class="mb-0 fs-12 text-muted">Data Science</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:2 hours</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list d-flex align-items-center border-bottom px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/3.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex mt-2">
															<div>
																<h6 class="mb-1 font-weight-normal">Rose Nash</h6>
																<p class="mb-0 fs-12 text-muted">Law</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:3 hours</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list d-flex align-items-center  border-bottom px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/9.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex">
															<div>
																<h6 class="mb-1 font-weight-normal">Justin Parr</h6>
																<p class="mb-0 fs-12 text-muted">Photography</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:2 hours</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list d-flex align-items-center px-5 py-3">
													<span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/8.jpg"></span>
													<div class="w-100 ms-3">
														<div class="mb-0 d-flex">
															<div>
																<h6 class="mb-1 font-weight-normal">Justin Parr</h6>
																<p class="mb-0 fs-12 text-muted">Digital Marketing</p>
															</div>
															<div class="ms-auto">
																<p class="fs-12 text-muted mb-0">Daily:3 hours</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-4 CLOSED -->

							<!-- ROW-5 OPEN -->
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Courses Overview</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-hover mb-0 text-nowrap">
													<thead>
														<tr>
															<th>Course Name</th>
															<th>Faculty Name</th>
															<th>Duration</th>
															<th>Amount</th>
															<th>Course Type</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>HTML Classes</td>
															<td>Vanessa</td>
															<td>3 Months</td>
															<td class="font-weight-semibold fs-15">$89</td>
															<td>Online</td>
															<td>
																<a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
															</td>
														</tr>
														<tr>
															<td>3D Animation Trainig</td>
															<td>Rutherford</td>
															<td>6 Months</td>
															<td class="font-weight-semibold fs-15">$14,276</td>
															<td>Online</td>
															<td>
																<a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Closed</a>
															</td>
														</tr>
														<tr>
															<td>Digital Marketing</td>
															<td>Elizabeth</td>
															<td>4 Months</td>
															<td class="font-weight-semibold fs-15">$25,000</td>
															<td>Offline</td>
															<td>
																<a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
															</td>
														</tr>
														<tr>
															<td>Guitar classes</td>
															<td>Anthony</td>
															<td>3 Months</td>
															<td class="font-weight-semibold fs-15">$50.00</td>
															<td>Online</td>
															<td>
																<a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Expired</a>
															</td>
														</tr>
														<tr>
															<td>Beautician Classes</td>
															<td>Lambert</td>
															<td>2 Months</td>
															<td class="font-weight-semibold fs-15">$99.99</td>
															<td>Offline</td>
															<td>
																<a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Closed</a>
															</td>
														</tr>
														<tr>
															<td>PhotoShop Designing</td>
															<td>Lilly</td>
															<td>6 Months</td>
															<td class="font-weight-semibold fs-15">$145</td>
															<td>Offline</td>
															<td>
																<a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
															</td>
														</tr>
														<tr>
															<td>3D Animation Trainig</td>
															<td>Marry cott</td>
															<td>8 Months</td>
															<td class="font-weight-semibold fs-15">$378</td>
															<td>Online</td>
															<td>
																<a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-5 CLOSED -->

						</div>
						<!-- CONTAINER CLOSED -->
					</div>
				</div>
				<!--app-content closed-->

			</div>

			<!-- SIDE-BAR -->
			<div class="sidebar sidebar-right sidebar-animate">
			   <div class="">
					<a href="javascript:void(0);" class="sidebar-icon text-end float-end" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="p-3 border-bottom">
					<h5 class="border-bottom-0 mb-0">General Settings</h5>
				</div>
				<div class="p-4">
					<div class="switch-settings">
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Notifications</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Show your emails</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Show Task statistics</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Show recent activity</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">System Logs</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Error Reporting</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Show your status to all</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="d-flex mb-2">
							<span class="me-auto fs-15">Keep up to date</span>
							<label class="custom-switch">
								<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
								<span class="custom-switch-indicator"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="p-3 border-bottom">
					<h5 class="border-bottom-0 mb-0">Overview</h5>
				</div>
				<div class="p-4">
					<div class="progress-wrapper">
						<div class="mb-3">
							<p class="mb-2">Achieves<span class="float-end text-muted font-weight-normal">80%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-primary w-80 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Projects<span class="float-end text-muted font-weight-normal">60%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Earnings<span class="float-end text-muted font-weight-normal">50%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-success w-50" role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Balance<span class="float-end text-muted font-weight-normal">45%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-warning w-45 " role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Toatal Profits<span class="float-end text-muted font-weight-normal">75%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-danger w-75" role="progressbar"></div>
							</div>
						</div>
					</div>
					<div class="progress-wrapper pt-2">
						<div class="mb-3">
							<p class="mb-2">Total Likes<span class="float-end text-muted font-weight-normal">70%</span></p>
							<div class="progress h-1">
								<div class="progress-bar bg-teal w-70" role="progressbar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SIDE-BAR CLOSED -->


			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2022 <a href="javascript:void(0);">Yoha</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset ('bend/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset ('bend/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset ('bend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Sticky js -->
		<script src="{{asset ('bend/js/sticky.js')}}"></script>

		<!-- SIDE-MENU JS-->
		<script src="{{asset ('bend/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- PERFECT SCROLL BAR js-->
		<script src="{{asset ('bend/plugins/p-scroll/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset ('bend/plugins/sidemenu/sidemenu-scroll.js')}}"></script>

		<!-- INTERNAL PIETY CHART JS -->
		<script src="{{asset ('bend/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset ('bend/plugins/peitychart/peitychart.init.js')}}"></script>

		<!-- INTERNAL MORRIS CHART JS -->
		<script src="{{asset ('bend/plugins/morris/morris.js')}}"></script>
		<script src="{{asset ('bend/plugins/morris/raphael-min.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset ('bend/plugins/sidebar/sidebar.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		<script src="{{asset ('bend/js/apexcharts.js')}}"></script>

		<!--INTERNAL INDEX JS-->
        <script src="{{asset ('bend/js/index4.js')}}"></script>

		<!-- THEMECOLORS JS -->
		<script src="{{asset ('bend/js/themeColors.js')}}"></script>

		<!-- CUSTOM JS -->
		<script src="{{asset ('bend/js/custom.js')}}"></script>

	</body>
</html>