@extends('admin.layouts.master')
@section('title', 'Data Karyawan')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/modules/datatables/datatables.min.css') }}">
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="company-form">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nip">NIP <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="nip" name="nip"
                            placeholder="Masukkan nip..." autocomplete="off">
                        <div class="invalid-feedback" id="valid-nip"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukkan name..." autocomplete="off">
                        <div class="invalid-feedback" id="valid-name"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <sup class="text-danger">*</sup></label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Masukkan Email...">
                        <div class="invalid-feedback" id="valid-email"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <sup class="text-danger">*</sup></label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Masukkan Password...">
                        <small id="null"></small>
                        <div class="invalid-feedback" id="valid-password"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    Close
                </button>
                <button type="button" id="btn-save" class="btn btn-primary">
                    <i class="fas fa-check"></i>
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>

   <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Customer</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fas fa-user"></i>
                        Data Customer
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
                                        <td>
                                            <div class="form-button-action">
                                                <button id="btn-edit" class="btn btn-sm btn-icon btn-warning" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </button>
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
