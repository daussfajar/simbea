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
     <link rel="stylesheet" href="{{ base_url('/assets/css/bootstrap.min.css') }}" type="text/css" />
     <link rel="stylesheet" href="{{ base_url('/assets/css/dataTabales.bootstrap4.min.css') }}" type="text/css" />
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
     
          <!-- START LEFT SIDEBAR -->
		<div class="left-side-menu">
			<div class="slimscroll-menu">
	          <!-- SIDEMENU -->
			<div id="sidebar-menu">

				<ul class="metismenu" id="side-menu">

					<li class="menu-title">Navigation</li>

					<li>
						<a href="{{ base_url('admin') }}" class="waves-effect waves-light">
							<i class="mdi mdi-view-dashboard"></i>
							<span>  Dashboard  </span>
						 </a>
					</li>

					<li>
						<a href="javascript: void(0);" class="waves-effect waves-light">
						    <i class="mdi mdi-view-dashboard"></i>
						    <span class="menu-arrow"></span>
						    <span>  Master Data  </span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
						    <li><a href="#">Wakil Rektor</a></li>
						    <li><a href="{{ base_url('admin/master_data/mahasiswa') }}">BKAL</a></li>
						    <li><a href="#">Kaprodi</a></li>
						    <li><a href="#">Dosen PA</a></li>
						    <li><a href="#">Mahasiswa</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript: void(0);" class="waves-effect waves-light">
						    <i class="mdi mdi-view-dashboard"></i>
						    <span class="menu-arrow"></span>
						    <span>  Beasiswa  </span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
						    	<li><a href="#">Laporan Prestasi Akademik</a></li>
						    	<li><a href="#">Laporan Capaian Non Akademik</a></li>
							{{-- Laporan Capaian Non Akademik -> Ikut Kegiatan Organisasi, Ikut kepanitiaan Organisasi, Publikasi Ilmiah/Karya Tulis/PKM --}}
							<li><a href="#">Laporan Keuangan Pendidikan</a></li>
						</ul>
					</li>
				</ul>

			</div>
			<!-- SIDEMENU -->
			</div>
		</div>
          <!-- END LEFT SIDEBAR -->

		<!-- START PAGE CONTENT -->
          <div class="content-page">
			<div class="content">
				
				<!-- START CONTENT -->
				<div class="container-fluid">
					
					<!-- START PAGE TITLE -->
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-box">
								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="">UPJ BEASISWA</a>@yield('breadcrumb')</li>
									</ol>
								</div>
								<h4 class="page-title">@yield('page-title')</h4>
							</div>
						</div>
					</div>
					<!-- END PAGE TITLE -->

					<div class="row">
						<div class="col-md-12">
							@yield('content')
						</div>
					</div>

				</div>

			</div>
			
               <!-- START FOOTER -->
               <footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-center">
							2023 &copy; Universitas Pembangunan Jaya, Powered By ICT.
                              </div>
                         </div>
                    </div>
               </footer>
               <!-- END FOOTER -->
          </div>
		<!-- END PAGE CONTENT -->

		<!-- START MODAL LOGOUT -->
		<div id="modal-logout" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="{{ base_url('admin/auth/logout') }}" method="post" accept-charset="utf-8">
						<input type="hidden" name="<?=$CI->security->get_csrf_token_name();?>"
							value="<?=$CI->security->get_csrf_hash();?>" />
						<div class="modal-body">
							<p class="pb-0 mb-0">Apakah anda yakin ingin keluar?</p>
						</div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm waves-effect"
								data-dismiss="modal"><span class="mdi mdi-close"></span> Batal</button>
							<button type="submit" class="btn btn-danger btn-sm waves-effect waves-light"><span class="mdi mdi-logout-variant"></span> Keluar</button>							
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- END MODAL LOGOUT -->

		<!-- START MODAL UBAH PASSWORD -->
          <div id="modal-ubah-password" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Password</h5>
                    </div>
					<form action="{{ base_url('admin/auth/ubah_password') }}" method="post" accept-charset="utf-8">
						<input type="hidden" name="<?=$CI->security->get_csrf_token_name();?>"
							value="<?=$CI->security->get_csrf_hash();?>" />
						<div class="modal-body">
							<div class="form-group">
                                <label for="">Password Lama</label>
                                <input type="password" name="password_lama" id="password_lama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password Baru</label>
                                <input type="password" name="password_baru" id="password_baru" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Konfirmasi Password</label>
                                <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" required>
                            </div>
						</div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm waves-effect"
								data-dismiss="modal"><span class="mdi mdi-close"></span> Batal</button>
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light"><span class="mdi mdi-check"></span> Ubah Password</button>							
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- END MODAL UBAH PASSWORD -->

     </div>
     <!-- END PAGE -->
     
	<!-- Vendor js -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="{{ base_url('assets/js/vendor.min.js') }}"></script>

	<!-- App js -->
	<script src="{{ base_url('assets/js/app.min.js') }}"></script>

	<!-- Datatable plugin js -->
	<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script>
	<!-- Datatable plugin js -->

	@yield('script')
</body>
</html>