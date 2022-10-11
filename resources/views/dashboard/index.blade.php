@extends('layout.app')

@section('title')
Dashboard
@endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row callout callout-info">
            <h1>Dashboard</h1>
        </div>
    </div>
</section>
<section class="content">

    <div class="container-fluid">
        <div class="row">
            @if(auth()->user()->role == 'admin')
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Data Guru</a>
                        </span>
                        <span class="info-box-number">
                            {{ $guru }}
                        </span>
                    </div>
                    <a href="/guru" class="small-box-footer nav-link">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Siswa</span>
                        <span class="info-box-number">{{ $siswa }}</span>
                    </div>
                    <a href="/siswa" class="small-box-footer nav-link">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>


            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chalkboard"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Kelas</span>
                        <span class="info-box-number">{{ $kelas }}</span>
                    </div>
                    <a href="/kelas" class="small-box-footer nav-link">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Mapel</span>
                        <span class="info-box-number">{{ $mapel }}</span>
                    </div>
                    <a href="/mapel" class="small-box-footer nav-link">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endif
            @if(auth()->user()->role == 'siswa')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-primary">
                            {{!empty(auth()->user()->name) ? (auth()->user()->name) : '' }}
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <thead class="table table-striped">
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Guru</th>
                        </tr>
                    </thead>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection