@extends('layouts.master')



@section('content')
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                    <div class="page-title mr-4 pr-4 border-right">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="breadcrumb-bar align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                        <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="News">
                            <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                        </a>
                        <a href="calendar" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                            <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                        </a>
                        <a class="btn btn-primary" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add New
                        </a>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- Notification -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those
                    fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ti ti-close"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-pink">
                    <div class="card-body">
                        <h2 class="text-white mb-0">128</h2>
                        <p class="text-white">All News</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-primary">
                    <div class="card-body">
                        <h2 class="text-white mb-0">758</h2>
                        <p class="text-white">Sale Properties</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-orange">
                    <div class="card-body">
                        <h2 class="text-white mb-0">2521</h2>
                        <p class="text-white">Categories</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-xxl-3 m-b-30">
                <div class="card card-statistics h-100 m-b-0 bg-info">
                    <div class="card-body">
                        <h2 class="text-white mb-0">500</h2>
                        <p class="text-white">Users</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row magnific-wrapper">
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/02.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"><a href="javascript:void(0)">Your title here</a></h4>
                            </div>
                            <a class="popup portfolio-img view" href="{{asset('panel/img/widget/02.jpg')}}"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/03.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/03.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/04.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/04.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/05.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/05.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/06.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/06.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/07.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/07.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/08.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class=" view popup portfolio-img" href="{{asset('panel/img/widget/08.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card card-statistics text-center">
                    <div class="card-body p-0">
                        <div class="portfolio-item">
                            <img src="{{asset('panel/img/widget/09.jpg')}}" alt="gallery-img">
                            <div class="portfolio-overlay">
                                <h4 class="text-white"> <a href="javascript:void(0)"> Your title here </a> </h4>
                            </div>
                            <a class="popup portfolio-img view" href="{{asset('panel/img/widget/09.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event Modal -->
        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="modelemail">Event Name</label>
                                <input type="email" class="form-control" id="modelemail">
                            </div>
                            <div class="form-group">
                                <label>Choose Event Color</label>
                                <select class="form-control">
                                    <option>Primary</option>
                                    <option>Warning</option>
                                    <option>Success</option>
                                    <option>Danger</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container-fluid -->
</div>
@endsection