@extends('admin.layouts.master')
@section('title', 'Data Karyawan')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/modules/datatables/datatables.min.css') }}">
@endsection

@section('content')
   <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tracking STNK</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fas fa-user"></i>
                        Tracking STNK
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <button class="btn btn-primary ml-auto" id="btn-add">
                            <i class="fas fa-plus-circle"></i>
                            Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover" id="user-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No. Handphone</th>
                                        <th>Tanggal Beli</th>
                                        <th>Status</th>
                                        <th>Ubah Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Renny</td>
                                        <td>Jawa Barat</td>
                                        <td>087264574836</td>
                                        <td>01 April 2022</td>
                                        <td><span class="badge badge-primary">Data diterima</span></td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Ubah Status</button></td>
                                        <td>
                                            <div class="form-button-action">
                                                <button id="btn-delete" class="btn btn-sm btn-icon btn-danger" data-original-title="Delete">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Renny</td>
                                        <td>Jawa Barat</td>
                                        <td>087264574836</td>
                                        <td>01 April 2022</td>
                                        <td><span class="badge badge-success">Diproses</span></td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Ubah Status</button></td>
                                        <td>
                                            <div class="form-button-action">
                                                <button id="btn-delete" class="btn btn-sm btn-icon btn-danger" data-original-title="Delete">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Renny</td>
                                        <td>Jawa Barat</td>
                                        <td>087264574836</td>
                                        <td>01 April 2022</td>
                                        <td><span class="badge badge-info">Selesai</span></td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Ubah Status</button></td>
                                        <td>
                                            <div class="form-button-action">
                                                <button id="btn-delete" class="btn btn-sm btn-icon btn-danger" data-original-title="Delete">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/modules/sweetalert/sweetalert.min.js') }}"></script>

@endsection
