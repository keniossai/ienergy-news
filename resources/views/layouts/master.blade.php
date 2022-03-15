<!DOCTYPE html>
<html lang="en">


<head>
    <title>iEnergy Online | Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- app favicon -->
    <link rel="shortcut icon" href="panel/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('panel/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{asset('panel/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            {{-- <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{asset('panel/img/loader/loader.svg')}}" alt="loader">
                    </div>
                </div>
            </div> --}}

            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('panel/img/logo.png')}}" class="img-fluid logo-desktop" alt="logo" />
                            <img src="{{asset('panel/img/logo-icon.png')}}" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti ti-email"></i>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
                                                <label class="label label-info label-round">6</label>
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Mark all as read</span></a>
                                            </li>
                                            <li class="dropdown-body">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/03.jpg" alt="user3">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brianing Leyon</p>
                                                                    <small>You will sail along until you...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/01.jpg" alt="user">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jimmyimg Leyon</p>
                                                                    <small>Okay</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/02.jpg" alt="user2">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Brainjon Leyon</p>
                                                                    <small>So, make the decision...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/04.jpg" alt="user4">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Smithmin Leyon</p>
                                                                    <small>Thanks</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/05.jpg" alt="user5">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Jennyns Leyon</p>
                                                                    <small>How are you</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <img class="img-fluid" src="panel/img/avtar/06.jpg" alt="user6">
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Demian Leyon</p>
                                                                    <small>I like your themes</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All messages </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link search" href="javascript:void(0)">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <div class="search-wrapper">
                                        <div class="close-btn">
                                            <i class="ti ti-close"></i>
                                        </div>
                                        <div class="search-content">
                                            <form>
                                                <div class="form-group">
                                                    <i class="ti ti-search magnifier"></i>
                                                    <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{asset('panel/img/avtar/02.jpg')}}" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    @guest
                                                        @else
                                                        <h4 class="text-white mb-0">{{ Auth::user()->name }}</h4>
                                                        <small class="text-white">{{ Auth::user()->email }}</small>
                                                    @endguest
                                                </div>
                                                <form method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                    <a class="text-white font-20 tooltip-wrapper" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                           this.closest('form').submit();"> <i
                                                        class="zmdi zmdi-power"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="settings">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="lockscreen">
                                                <i class=" ti ti-lock pr-2 text-dark"></i> Lockscreen
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>

            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">iENERGY CMS</li>
                            <li class="active">
                                <a class="has-arrow" href="{{ route('dashboard')}}" aria-expanded="false">
                                    <i class="nav-icon ti ti-home"></i>
                                    <span class="nav-title">Dashboard</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a></li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-pin"></i><span class="nav-title">Posts</span> </a>
                                    <ul aria-expanded="false">
                                        <li> <a href="{{ route('post.index')}}">All Posts</a> </li>
                                        <li> <a href="{{ route('post.create')}}">Add New</a> </li>
                                        <li> <a href="{{ route('category.index')}}">Categories</a> </li>
                                        <li> <a href="{{ route('tag.index')}}">Tags</a> </li>
                                    </ul>
                                </li>
                            <li><a href="media"><i class="nav-icon ti ti-video"></i><span class="nav-title">Media</span><span class="nav-label label label-success">New</span></a> </li>
                            <li><a href="messages"><i class="nav-icon ti ti-email"></i><span class="nav-title">Messages</span><span class="nav-label label label-success">2</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout-column3-alt"></i><span class="nav-title">Pages</span> </a>
                                <ul aria-expanded="false">
                                    <li> <a href="/">Home</a> </li>
                                    <li> <a href="about">About</a> </li>
                                </ul>
                            </li>
                            <li><a href="calendar"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Calendar</span></a></li>
                            <li><a href="comments"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Comments</span><span class="nav-label label label-danger">2</span></a> </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Settings</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href="{{route('settings.index')}}">Account Settings</a> </li>
                                    <li> <a href="users">Users</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Auth</span></a>
                                <ul aria-expanded="false">
                                    <form action="{{route('logout')}}" method="POST">
                                        <li> <a href="{{route('logout')}}">Logout</a> </li>
                                    </form>
                                        <li> <a href="lockscreen">Lock Screen</a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-banner p-4 bg-gradient text-center m-3 d-block rounded">
                                <h5 class="text-white mb-1">iEnergyAfrica</h5>
                                <a class="btn btn-square bg-dark btn-xl d-inline-block mt-2 mb-0" href="/"> Go to website</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>


                @yield('content')

            </div>
                <footer class="footer">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-left">
                            <p>&copy; Copyright 2022. All rights reserved.</p>
                        </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                            <p><a target="_blank" href="">Developed By Ken Ossai</a></p>
                        </div>
                    </div>
                </footer>
            <!-- end footer -->
        </div>  
    </div>
<!-- end app -->

<!-- plugins -->
<script src="{{asset('panel/js/vendors.js')}}"></script>

<!-- custom app -->
<script src="{{asset('panel/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('panel') }}/js/bs-custom-file-input.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    $(document).ready(function () {
      bsCustomFileInput.init()
    });
    $(document).ready(function () {
        bsCustomFileInput.init()
    });
  </script>
</body>


</html>