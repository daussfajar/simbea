
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>UPJ MBKM | Admin <?php echo $__env->yieldContent('title'); ?></title>
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/icon/favicon/favicon.ico">

	<!-- App css -->
	<link href="assets/css-app/bootstrap.min.css" rel="stylesheet" type="text/css"
		id="bootstrap-stylesheet" />
	<link href="assets/css-app/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css-app/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    
	<?php echo $__env->yieldContent('css'); ?>
    
    
</head>

<body>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Topbar Start -->
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
						<a href=""
							class="dropdown-item text-center text-primary notify-item notify-all">
							Lihat Semua Pemberitahuan
							<i class="fi-arrow-right"></i>
						</a>

					</div>
				</li>


				<li class="dropdown notification-list">
					<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
						role="button" aria-haspopup="false" aria-expanded="false">
						<img src="assets/icon/all/logo.png" alt="user-image" class="rounded-circle">
						<span
							class="d-none d-sm-inline-block ml-1"><?php echo e($CI->session->userdata('user_sessions')['nama_user']); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<a href="" class="dropdown-item notify-item">
							<i class="mdi mdi-account-outline"></i>
							<span>Profile</span>
						</a>
                        <!--<a href="" data-toggle="modal" data-target="#modal-ubah-password" class="dropdown-item notify-item">
							<i class="mdi mdi-key-outline"></i>
							<span>Ubah Password</span>
						</a>-->

						<!-- item-->
						<a href="" class="dropdown-item notify-item" data-toggle="modal"
							data-target="#modal-logout">
							<i class="mdi mdi-logout-variant"></i>
							<span>Logout</span>
						</a>

					</div>
				</li>
			</ul>

			<!-- LOGO -->
			<div class="logo-box">
				<a href="admin/dashboard" class="logo text-center">
					<span class="logo-lg">
						<img src="assets/icon/all/upj-logo-text-white.png" alt="" height="70">
					</span>
					<span class="logo-sm">
						<img src="assets/icon/all/upj-logo-text-white.png" alt="" height="24">
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
		<!-- end Topbar -->

		<!-- ========== Left Sidebar Start ========== -->
		<div class="left-side-menu">

			<div class="slimscroll-menu">

				<!--- Sidemenu -->
				<div id="sidebar-menu">

					<ul class="metismenu" id="side-menu">

						<li class="menu-title">Navigation</li>

						<li>
							<a href="admin/dashboard" class="waves-effect waves-light">
								<i class="mdi mdi-view-dashboard"></i>
								<span> Dashboard </span>
							</a>
						</li>

                        <?php if($level == "admin" || $level == "dekan"): ?>
							<?php								
								$exm = explode('|', $akses);
							?>
                            <?php if(!empty($akses)): ?>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect waves-light">
                                        <i class="mdi mdi-clipboard-check-multiple"></i>
                                        <span> Approval </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">                                        
                                        <?php $__currentLoopData = $exm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php
                                                  $menu = $CI->db->get_where('mbkm_program', ['id' => $mn, 'status' => 'aktif'])->row();
                                             ?>			
                                             <li>
                                                  <a href="admin/approval/' . $menu->view_file) }}">
                                                       <span> <?php echo e($menu->judul_program); ?> </span>                                            
                                                  </a>
                                             </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endif; ?>                
                        <?php endif; ?>

                        <?php if($level == 'superuser'): ?>
                            <?php								
								$exm = explode('|', $akses);
							?>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect waves-light <?php echo e($CI->uri->segment(2) == 'approval' ? 'active' : ''); ?>">
                                    <i class="mdi mdi-clipboard-check-multiple"></i>
                                    <span> Approval </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level <?php echo e($CI->uri->segment(2) == 'approval' ? 'mm-show' : ''); ?>" aria-expanded="false">                                        
                                    <?php $__currentLoopData = $exm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $menu = $CI->db->get_where('mbkm_program', ['id' => $mn, 'status' => 'aktif'])->row();
                                        ?>			
                                        <li class="<?php echo e(($CI->uri->segment(2) == 'approval') && ($CI->uri->segment(3) == $menu->view_file) ? 'mm-active' : ''); ?>">
                                            <a href="admin/approval/' . $menu->view_file) }}" class="<?php echo e(($CI->uri->segment(2) == 'approval') && ($CI->uri->segment(3) == $menu->view_file) ? 'active' : ''); ?>">
                                                <span> <?php echo e($menu->judul_program); ?> </span>                                            
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect waves-light <?php echo e($CI->uri->segment(2) == 'history_approval' ? 'active' : ''); ?>">
                                    <i class="mdi mdi-history"></i>
                                    <span> History Approval </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level <?php echo e($CI->uri->segment(2) == 'history_approval' ? 'mm-show' : ''); ?>" aria-expanded="false">                                        
                                    <?php $__currentLoopData = $exm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $menu = $CI->db->get_where('mbkm_program', ['id' => $mn, 'status' => 'aktif'])->row();
                                        ?>			
                                        <li class="<?php echo e(($CI->uri->segment(2) == 'history_approval') && ($CI->uri->segment(3) == $menu->view_file) ? 'mm-active' : ''); ?>">
                                            <a href="admin/history_approval/' . $menu->view_file) }}" class="<?php echo e(($CI->uri->segment(2) == 'history_approval') && ($CI->uri->segment(3) == $menu->view_file) ? 'active' : ''); ?>">
                                                <span> <?php echo e($menu->judul_program); ?> </span>                                            
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect waves-light <?php echo e($CI->uri->segment(2) == 'master_data' ? 'active' : ''); ?>">
                                    <i class="mdi mdi-database"></i>
                                    <span> Master Data </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level <?php echo e($CI->uri->segment(2) == 'master_data' ? 'mm-show' : ''); ?>" aria-expanded="false">
                                    <li class="<?php echo e($CI->uri->segment(3) == 'students' ? 'mm-active' : ''); ?>">
                                        <a href="admin/master_data/students" >
                                            <span> Mahasiswa </span>                                            
                                        </a>                                        
                                    </li>
                                    <li class="<?php echo e($CI->uri->segment(3) == 'dosen' ? 'mm-active' : ''); ?>">
                                        <a href="admin/master_data/dosen">
                                            <span> Dosen </span>                                            
                                        </a>                                        
                                    </li>
                                    <li class="<?php echo e($CI->uri->segment(3) == 'orangtua' ? 'mm-active' : ''); ?>">
                                        <a href="admin/master_data/orangtua" >
                                            <span> Orangtua </span>                                            
                                        </a>                                        
                                    </li>                                   
                                    <li class="<?php echo e($CI->uri->segment(3) == 'users' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Users </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li class="<?php echo e($CI->uri->segment(3) == 'users' ? 'mm-active' : ''); ?>"><a href="admin/master_data/users">Akun Pengguna</a></li>
                                        </ul>
                                    </li>                                                                        
                                    <li class="<?php echo e($CI->uri->segment(3) == 'data_admin' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Admin </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li class="<?php echo e($CI->uri->segment(3) == 'data_admin' ? 'mm-active' : ''); ?>"><a href="admin/master_data/data_admin">Data Admin</a></li>
                                        </ul>
                                    </li>								
                                    <li class="
                                    <?php switch($CI->uri->segment(3)):
                                        case ('academic_year'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                        <?php case ('kurikulum'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                        <?php case ('study_program'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                        <?php case ('program'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                        <?php case ('faculty'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                        <?php case ('matkul'): ?>
                                            <?php echo e('mm-active'); ?>

                                            <?php break; ?>
                                    <?php endswitch; ?>
                                    ">
                                        <a href="javascript:void(0)">
                                            <span> Akademik </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'kurikulum' ? 'mm-active' : ''); ?>"><a href="admin/master_data/kurikulum">Kurikulum</a></li>    
                                            <li class="<?php echo e($CI->uri->segment(3) == 'matkul' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/matkul">
                                                Matakuliah
                                                </a>                                        
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'academic_year' ? 'mm-active' : ''); ?>"><a href="admin/master_data/academic_year">Tahun Akademik</a></li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'study_progarm' ? 'mm-active' : ''); ?>"><a href="admin/master_data/study_program">Prodi</a></li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'program' ? 'mm-active' : ''); ?>"><a href="admin/master_data/program">Program</a></li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'faculty' ? 'mm-active' : ''); ?>"><a href="admin/master_data/faculty">Fakultas</a></li>
                                        </ul>
                                    </li>                                
                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-magang' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Magang Kerja </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-magang' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-magang">
                                                    <span> Bidang Magang </span>										
                                                </a>									
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'jenis-magang' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/jenis-magang">
                                                    <span> Jenis Magang </span>										
                                                </a>									
                                            </li>                                   
                                        </ul>
                                    </li>

                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-membangun' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Membangun Desa </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-membangun' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-membangun">
                                                    <span> Bidang Membangun </span>										
                                                </a>									
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'jenis-membangun' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/jenis-membangun">
                                                    <span> Jenis Membangun </span>										
                                                </a>									
                                            </li>                                   
                                        </ul>
                                    </li>

                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-studi' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Studi Independen </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-studi' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-studi">
                                                    <span> Bidang Studi Independen </span>										
                                                </a>									
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'jenis-studi' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/jenis-studi">
                                                    <span> Jenis Studi Independen </span>										
                                                </a>									
                                            </li>                                   
                                        </ul>
                                    </li>

                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-proyek' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Proyek Kemanusiaan </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-proyek' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-proyek">
                                                    <span> Bidang Proyek Kemanusiaan </span>										
                                                </a>									
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'jenis-proyek' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/jenis-proyek">
                                                    <span> Jenis Proyek Kemanusiaan </span>										
                                                </a>									
                                            </li>                                   
                                        </ul>
                                    </li>

                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-asistensi' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Asistensi Pengajar </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-asistensi' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-asistensi">
                                                    <span> Bidang Asistensi Pengajaran </span>										
                                                </a>									
                                            </li>
                                            <li class="<?php echo e($CI->uri->segment(3) == 'jenis-asistensi' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/jenis-asistensi">
                                                    <span> Jenis Asistensi Pengajaran </span>										
                                                </a>									
                                            </li>                                   
                                        </ul>
                                    </li>

                                    <li class="<?php echo e($CI->uri->segment(3) == 'bidang-penelitian' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Penelitian </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-penelitian' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-penelitian">
                                                    <span> Bidang Penelitian </span>										
                                                </a>									
                                            </li>                                            
                                        </ul>
                                    </li>
                                    <!--<li class="<?php echo e($CI->uri->segment(3) == 'wirausaha' ? 'mm-active' : ''); ?>">
                                        <a href="javascript:void(0)">
                                            <span> Wirausaha </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">                                        
                                            <li class="<?php echo e($CI->uri->segment(3) == 'bidang-wirausaha' ? 'mm-active' : ''); ?>">
                                                <a href="admin/master_data/bidang-wirausaha">
                                                    <span> Bidang Wirausaha </span>										
                                                </a>									
                                            </li>                                            
                                        </ul>
                                    </li>-->
                                </ul>
                            </li>    
                            <li class="">
                                <a href="javascript: void(0);" class="waves-effect waves-light <?php echo e($CI->uri->segment(3) == 'program-mbkm' ? 'active' : ''); ?>">
                                    <i class="mdi mdi-application"></i>
                                    <span> MBKM </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">                                    
                                    <li class="<?php echo e($CI->uri->segment(3) == 'program-mbkm' ? 'mm-active' : ''); ?>">
                                        <a href="admin/mbkm/program-mbkm">
                                            <span> Program </span>										
                                        </a>									
                                    </li>                                    
                                </ul>
                            </li>
                        <?php endif; ?>                        
					</ul>

				</div>
				<!-- End Sidebar -->
			</div>
			<!-- Sidebar -left -->

		</div>
		<!-- Left Sidebar End -->

		<!-- ============================================================== -->
		<!-- Start Page Content here -->
		<!-- ============================================================== -->

		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box">
								<div class="page-title-right">
									<ol class="breadcrumb m-0">
										<li class="breadcrumb-item"><a href="javascript: void(0);">UPJ MBKM</a></li>
										<?php echo $__env->yieldContent('breadcrumb'); ?>
									</ol>
								</div>
								<h4 class="page-title"><?php echo $__env->yieldContent('page-title'); ?></h4>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<div class="row">
						<?php echo $__env->yieldContent('content'); ?>
					</div>
					<!-- end row -->

				</div>
				<!-- end container-fluid -->

			</div>
			<!-- end content -->



			<!-- Footer Start -->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							2021 &copy; Universitas Pembangunan Jaya, Powered By ICT.
						</div>
					</div>
				</div>
			</footer>
			<!-- end Footer -->

		</div>

		<!-- ============================================================== -->
		<!-- End Page content -->
		<!-- ============================================================== -->
		<!-- modal logout -->
		<div id="modal-logout" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="admin/auth/logout" method="post" accept-charset="utf-8">
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
		<!-- /.modal -->

        <!-- modal logout -->
		<div id="modal-ubah-password" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Password</h5>
                    </div>
					<form action="admin/auth/ubah_password" method="post" accept-charset="utf-8">
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
		<!-- /.modal -->
	</div>
	<!-- END wrapper -->

	<!-- Vendor js -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="assets/js/vendor.min.js"></script>	
    
	<?php echo $__env->yieldContent('js'); ?>

	<!-- App js -->
	<script src="assets/js/app.min.js"></script>    
    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/coba.blade.php ENDPATH**/ ?>