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
        {{-- <h1>ID Card</h1> --}}
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
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Status Tracking BPKB dan STNK</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-primary alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">BPKB</div>
                    Saat ini data anda baru saja diterima oleh kami.
                  </div>
                </div>
                <div class="alert alert-success alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">STNK</div>
                    Saat ini STNK anda sedang kami proses.
                    <br>
                    Estimasi selesai 20 April 2022
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
