<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta charset="UTF-8">
     <title>UPJ SIMBE | Admin @yield('title')</title>

     <!-- APP FAVICON -->
     <link rel="shortcut icon" href="assets/icon/favicon/favicon.ico">

     <!-- APP CSS -->
     {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" /> --}}
     <link rel="stylesheet" href="{{ base_url('/assets/css/bootstrap.min.css') }}" type="text/css" id="bootsrap-stylesheet" />
     <link rel="stylesheet" href="{{ base_url('assets/css/icons.min.css') }}" type="text/css" />
     <link rel="stylesheet" href="{{ base_url('assets/css/app.min.css') }}" type="text/css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" type="text/css" />

     @yield('css')
</head>
<body>

     <!-- START PAGE -->
     <div id="wrapper">

          <!-- START NAVIGATION BAR -->
          <div class="navbar-custom">
               <ul class="list-unstyled topnav-menu float-right mb-0">

				<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button"
						aria-haspopup="false" aria-expanded="false">
						<i class="mdi mdi-bell noti-icon"></i>
						<span class="badge badge-success rounded-circle noti-icon-badge">0</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-lg">

						<!-- item-->
						<div class="dropdown-item noti-title">
							<h5 class="font-16 m-0">
								<span class="float-right">
									<a href="" class="text-dark">
										<small>Hapus Semua</small>
									</a>
								</span>Pemberitahuan
							</h5>
						</div>

						<div class="slimscroll noti-scroll">

						</div>

						<!-- All-->
						<a href="javascript:void(0);"
							class="dropdown-item text-center text-primary notify-item notify-all">
							Lihat Semua Pemberitahuan
							<i class="fi-arrow-right"></i>
						</a>

					</div>
				</li>


				<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
						role="button" aria-haspopup="false" aria-expanded="false">
						<img src="" alt="user-image" class="rounded-circle">
						<span
							class="d-none d-sm-inline-block ml-1"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<a href="" class="dropdown-item notify-item">
							<i class="mdi mdi-account-outline"></i>
							<span>Profile</span>
						</a>

						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item" data-toggle="modal"
							data-target="#modal-logout">
							<i class="mdi mdi-logout-variant"></i>
							<span>Logout</span>
						</a>

					</div>
				</li>
			</ul>

               <!-- LOGO -->
			<div class="logo-box">
				<a href="{{ base_url('admin/dashboard') }}" class="logo text-center">
					<span class="logo-lg">
						<img src="{{ base_url('assets/icon/all/upj-logo-text-white.png') }}" alt="" height="70">
					</span>
					<span class="logo-sm">
						<img src="{{ base_url('assets/icon/all/upj-logo-text-white.png') }}" alt="" height="24">
					</span>
				</a>
			</div>

               <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
				<li>
					<button class="button-menu-mobile waves-effect">
						<i class="mdi mdi-menu"></i>
					</button>
				</li>

			</ul>

          </div>
          <!-- END NAVIGATION BAR -->

          <!-- bagian judul halaman blog -->
          <h3> @yield('judul_halaman') </h3>
     
          <div class="content-page">

               <!-- START PAGE CONTENT -->
               
               <!-- END PAGE CONTENT -->

               <!-- bagian konten blog -->
               @yield('konten')
          
               <!-- START FOOTER -->
               <footer class="footer">
                    <div class="container-fluid">
                         <div class="row">
                              <div class="col-md-12">
                                   2023 &copy; Universitas Pembangunan Jaya, Powered By ICT.
                              </div>
                         </div>
                    </div>
               </footer>
               <!-- END FOOTER -->
          </div>
     </div>
     <!-- END PAGE -->
     
</body>
</html>