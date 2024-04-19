@extends('src.recruitment.layout.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Biodata</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Biodata</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Form Input Biodata</h3>
                    <div class="card-tools">
                        <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Clear Form</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputNIK">NIK</label>
                                <input type="number" disabled class="form-control" id="exampleInputNIK" placeholder="Enter NIK">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input type="email" class="form-control" disabled id="exampleInputEmail" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputNama" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleInputEmail" placeholder="Masukan Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="JK">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="JK" class="form-control">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="WN">Warga Negara</label>
                                        <select name="jenis_kelamin" id="WN" class="form-control">
                                            <option value="Pria">WNI</option>
                                            <option value="Wanita">WNA</option>
                                            <option value="Lain">Lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="WN">Agama</label>
                                        <select name="jenis_kelamin" id="WN" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Angkatan</label>
                                        <input type="number" class="form-control" id="exampleInputEmail" placeholder="Masukan Angkatan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputNotelp">No. Telepon</label>
                                <input type="number" class="form-control" id="exampleInputNotelp" placeholder="Masukan Notelp">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <textarea name="" class="form-control" id="exampleInputAlamat" cols="10" placeholder="Maukan Alamat" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" style="width: 100%;"><i class="fa fa-edit"></i> Ubah Data</button>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
