@extends('src.recruitment.layout.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-info"></i> Informasi!</h5>
                            Lihat kelengkapan data anda, dan lengkapi jika belum diupload atau diisi
                            <li><i class="fas fa-times-circle"></i> : Data Belum Diisi, Belum lengkap, Belum Diupload</li>
                            <li><i class="fas fa-clipboard-check"></i> : Data Sudah Diisi</li>
                            Kami tidak bertanggung jawab apabila panitia mengguggurkan akibat tidak mengupload berkas taua kesalahan biodata
                            maka sebeleum apply pastikan <b>Data Anda Benar</b> dan
                            <b>Jika Sudah apply data tidak dapat diubah</b>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-clipboard-check"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Biodata</span>
                                <span class="info-box-number">Biodata Lengkap</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-clipboard-check"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Dokumen</span>
                                <span class="info-box-number">Dokumen Lengkap</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="fas fa-times-circle"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Foto</span>
                                <span class="info-box-number">Maaf! foto belum lengkap <div class="badge badge-danger">Lengkapi Foto</div></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-clipboard-check"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pendidikan Lengkap</span>
                                <span class="info-box-number">Pendidikan Lengkap</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="fas fa-clipboard-check"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Keahlian Dan Keterampilan</span>
                                <span class="info-box-number">Keahlian Dan Keterampilan Lengkap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
