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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Welcome to Attendance App</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
