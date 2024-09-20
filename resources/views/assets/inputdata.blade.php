@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="card shadow overflow-hidden">
    <div class="card-body">
        <h4 class="card-title"><i class="fa fa-fw fa-plus"></i>&nbsp; Input Data Penempatan</h4>
        <form class="form-sample" enctype="multipart/form-data" method="POST" action="/penempatan">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_barang" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Perolehan <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tahun_perolehan" required value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Grup <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="grup" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">kategori <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kategori" required value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kelas <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kelas" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sub Kelas <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sub_kelas" required value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomor Urut <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nomor_urut" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kode Aset <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kode_aset" required value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">QR Code <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="qr_code" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kode Telkom <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kode_telkom" required value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Serial Number <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="serial_number" required value="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" name="foto" class="file-upload-default"
                                accept=".jpg, .jpeg, .png, .bmp, .ico, .webp, .svg, .heic">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <!-- <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" name="foto" readonly placeholder="Upload Image" accept=".jpg, .jpeg, .png, .bmp, .ico, .webp, .svg, .heic">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
            <div class="clearfix">
                <div class="float-right">
                    <button type="reset" class="btn btn-secondary"><i class="fa fw fa-sync"></i>&nbsp; Reset</button>
                    <button type="submit" name="btn_submit" class="btn btn-primary mr-2">
                        <i class="fa fa-fw fa-save"></i>&nbsp; Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection