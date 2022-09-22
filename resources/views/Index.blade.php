
@extends('layout.main')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold text-primary">Selamat Datang {{$user->name}}</h3>
                    <h6 class="font-weight-normal mb-0 text-primary">Sudah Kemana Aja Hari Ini?</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto">
                    <img src="../aSSETS/images/dashboard/people.svg" alt="people">
                    <div class="weather-info">
                        <div class="d-flex">
                            <div>
                                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>32<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                                <h4 class="location font-weight-normal">Depok</h4>
                                <h6 class="font-weight-normal">Indonesia</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Positif</p>
                            <p class="fs-30 mb-2">6.415.328</p>
                            <p>Update Terakhir: 21-09-2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Sembuh</p>
                            <p class="fs-30 mb-2">6.231.970</p>
                            <p>Update Terakhir: 21-09-2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Meninggal Dunia</p>
                            <p class="fs-30 mb-2">157.948</p>
                            <p>Update Terakhir: 21-09-2022</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Number of Clients</p>
                            <p class="fs-30 mb-2">47033</p>
                            <p>Update Terakhir: 21-09-2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection