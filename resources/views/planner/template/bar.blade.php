@extends('planner.template.layout')
@section('sidebar')
<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex justify-content-left align-items-center">
        <a href="/Dashboard" class="header-logo">
            <img src="/templatetrafindo/assets/images/logotrafindo.png" style="width: 10rem;height:5rem;" alt="logo_trafoindo">
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="/Dashboard" class="svg-icon">
                        <i class="fa-solid fa-house"></i> <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('bom-index') }}">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span class="ml-4">Bill Of Material</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('workorder-index') }}">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span class="ml-4">Work Order</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('mps-index') }}">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span class="ml-4">MPS</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#b" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-car"></i>
                        <span class="ml-4">GPA</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="b" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="/GlobalPicking-Oli">
                                <i class="fa-solid fa-car"></i>
                                <span class="ml-4">GPA Oil</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/GlobalPicking-Dry">
                                <i class="fa-solid fa-car"></i>
                                <span class="ml-4">GPA Dry Type</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="/Stock">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span class="ml-4">Stock</span>
                    </a>
                </li>
                <li class="">
                    <a href="/Production" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Production</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="pt-5 pb-2"></div>
    </div>
</div>
@endsection
@section('navbar')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="../backend/index.html" class="header-logo">
                </a>
            </div>
            <div class="navbar-breadcrumb">
                <h5>$title1</h5>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">


                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/templatetrafindo/assets/images/user/1.jpg" class="img-fluid rounded-circle" alt="user">
                                <div class="caption ml-3">
                                    <h6 class="mb-0 line-height">$username<i class="las la-angle-down ml-2"></i></h6>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <a href="../app/user-profile.html">My Profile</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <a href="../app/user-profile-edit.html">Edit Profile</a>
                                </li>
                                <li class="dropdown-item  d-flex svg-icon border-top">
                                    <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <a href="/Logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection
@section('footer')

<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li><b>awan akatsuki</b></li>
                    <!-- <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li> -->
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1">
                    <script>
                        document.write(new Date().getFullYear())
                    </script>©
                </span> <a href="#" class="">MSIB TRAFINDO BATCH 5</a>
            </div>
        </div>
    </div>
</footer>
<!-- resources  -->
@endsection