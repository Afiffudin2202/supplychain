@extends('logistic.layouts.main')
@section('content')
    <div class="content-wrapper bg-white">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row mt-3">
                    <div class="col-lg-3 col-6 ">
                        <!-- box in -->
                        <a href="{{ url('scan/information') }}">
                        <div class="small-box ">
                                <div class="inner text-dark">
                                    <h3>Scan</h3>
    
                                    <p>Informasi Material</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-camera"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- main content dashboard chart-->
                <div class="row">
                    <section class="col-lg-7 connectedSortable">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    September 2023
                                </h3>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
