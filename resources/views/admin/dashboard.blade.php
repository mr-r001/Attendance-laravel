@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fullcalendar/fullcalendar.min.css">

@endsection

@section('content')
   <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item">
              <a href="{{ route('admin.dashboard') }}">
                  <i class="fa fa-home"></i>
                  Dashboard
              </a>
          </div>
        </div>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Customer</h4>
                </div>
                <div class="card-body">
                  10
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Tracking <br> (Data diterima)</h4>
                </div>
                <div class="card-body">
                  42
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Tracking (Diproses)</h4>
                </div>
                <div class="card-body">
                  1,201
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-circle"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Tracking <br> (Selesai)</h4>
                </div>
                <div class="card-body">
                  47
                </div>
              </div>
            </div>
          </div>                  
        </div>
      </div>
    </section>
  </div>
@endsection
