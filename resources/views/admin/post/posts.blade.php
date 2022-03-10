@extends('layouts.master')


@section('content')
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Posts</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Posts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- start-clients contant-->
        <div class="row">
            <div class="col-12">
                <div class="card card-statistics clients-contant">
                    <div class="card-header">
                        <div class="d-xxs-flex justify-content-between align-items-center">
                            <div class="card-heading">
                                <h4 class="card-title">Posts</h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body py-0 table-responsive">
                        <table class="table clients-contant-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Clients</th>
                                    {{-- <th scope="col">Title</th> --}}
                                    <th scope="col">Created at</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit & Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/01.jpg')}}" class="img-fluid" alt="Clients-01">
                                            </div>
                                            <p class="font-weight-bold">Adrian Demiandro</p>
                                        </div>
                                    </td>
                                    <td>20/07/2018</td>
                                    <td>$230.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/02.jpg')}}" class="img-fluid" alt="Clients-02">
                                            </div>
                                            <p class="font-weight-bold">Jenny Smithdro</p>
                                        </div>
                                    </td>
                                    <td>25/08/2018</td>
                                    <td>$330.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/03.jpg')}}" class="img-fluid" alt="Clients-03">
                                            </div>
                                            <p class="font-weight-bold">Brian Joedro</p>
                                        </div>
                                    </td>
                                    <td>01/09/2018</td>
                                    <td>$500.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/04.jpg')}}" class="img-fluid" alt="Clients-04">
                                            </div>
                                            <p class="font-weight-bold">Sandradro Garett</p>
                                        </div>
                                    </td>
                                    <td>03/08/2018</td>
                                    <td>$130.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/05.jpg')}}" class="img-fluid" alt="Clients-05">
                                            </div>
                                            <p class="font-weight-bold">Garydro</p>
                                        </div>
                                    </td>
                                    <td>15/08/2018</td>
                                    <td>$35.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-danger"></a><span>Canceled</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/06.jpg')}}" class="img-fluid" alt="Clients-06">
                                            </div>
                                            <p class="font-weight-bold">Andrew dro</p>
                                        </div>
                                    </td>
                                    <td>20/07/2018</td>
                                    <td>$230.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/07.jpg')}}" class="img-fluid" alt="Clients-07">
                                            </div>
                                            <p class="font-weight-bold">Stonedro</p>
                                        </div>
                                    </td>
                                    <td>25/08/2018</td>
                                    <td>$330.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/08.jpg')}}" class="img-fluid" alt="Clients-08">
                                            </div>
                                            <p class="font-weight-bold">Jimmy dron</p>
                                        </div>
                                    </td>
                                    <td>01/09/2018</td>
                                    <td>$500.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/09.jpg')}}" class="img-fluid" alt="Clients-09">
                                            </div>
                                            <p class="font-weight-bold">Richard dro</p>
                                        </div>
                                    </td>
                                    <td>03/08/2018</td>
                                    <td>$130.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/01.jpg')}}" class="img-fluid" alt="Clients-01">
                                            </div>
                                            <p class="font-weight-bold">Garettnice</p>
                                        </div>
                                    </td>
                                    <td>15/08/2018</td>
                                    <td>$35.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-danger"></a><span>Canceled</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/02.jpg')}}" class="img-fluid" alt="Clients-02">
                                            </div>
                                            <p class="font-weight-bold">Adriannyt</p>
                                        </div>
                                    </td>
                                    <td>20/07/2018</td>
                                    <td>$230.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/03.jpg')}}" class="img-fluid" alt="Clients-03">
                                            </div>
                                            <p class="font-weight-bold">Michaelbrt</p>
                                        </div>
                                    </td>
                                    <td>25/08/2018</td>
                                    <td>$330.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/04.jpg')}}" class="img-fluid" alt="Clients-04">
                                            </div>
                                            <p class="font-weight-bold">Andrewwer</p>
                                        </div>
                                    </td>
                                    <td>01/09/2018</td>
                                    <td>$500.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-primary"></a><span>Unpaid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/05.jpg')}}" class="img-fluid" alt="Clients-05">
                                            </div>
                                            <p class="font-weight-bold">Braincdt</p>
                                        </div>
                                    </td>
                                    <td>03/08/2018</td>
                                    <td>$130.00</td>
                                    <td><a href="javascript:void(0)" class="dot"></a><span>Paid</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-img mr-4">
                                                <img src="{{asset('panel/img/avtar/06.jpg')}}" class="img-fluid" alt="Clients-06">
                                            </div>
                                            <p class="font-weight-bold">Sandrapot</p>
                                        </div>
                                    </td>
                                    <td>15/08/2018</td>
                                    <td>$35.00</td>
                                    <td><a href="javascript:void(0)" class="dot bg-danger"></a><span>Canceled</span></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-success btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-eye"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-info btn-round"><i class="ti ti-pencil"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round ml-2"><i class="ti ti-trash"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-warning btn-round ml-2"><i class="ti ti-link"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-clients contant-->
    </div>
    <!-- end container-fluid -->
</div>
@endsection