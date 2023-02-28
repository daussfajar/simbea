<!-- START TOPBAR -->
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


          {{-- <li class="dropdown notification-list">
               <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ base_url('assets/icon/all/logo.png') }}" alt="user-image" class="rounded-circle">
                    <span
                         class="d-none d-sm-inline-block ml-1">{{ $CI->session->userdata('user_sessions')['nama_user'] }}</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <i class="mdi mdi-account-outline"></i>
                         <span>Profile</span>
                    </a>
                         <i class="mdi mdi-key-outline"></i>
                         <span>Ubah Password</span>
                    </a>-->

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item" data-toggle="modal"
                         data-target="#modal-logout">
                         <i class="mdi mdi-logout-variant"></i>
                         <span>Logout</span>
                    </a>

               </div>
          </li> --}}
     </ul>

     <!-- LOGO -->
     {{-- <div class="logo-box">
          <a href="{{ base_url('admin/dashboard') }}" class="logo text-center">
               <span class="logo-lg">
                    <img src="{{ base_url('assets/icon/all/upj-logo-text-white.png') }}" alt="" height="70">
               </span>
               <span class="logo-sm">
                    <img src="{{ base_url('assets/icon/all/upj-logo-text-white.png') }}" alt="" height="24">
               </span>
          </a>
     </div> --}}
  

     <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
               <button class="button-menu-mobile waves-effect">
                    <i class="mdi mdi-menu"></i>
               </button>
          </li>

     </ul>
</div>
<!-- END TOPBAR -->