@extends('layouts.dashboard')

@section('title', 'Detail')

@section('content')


<div class="card shadow overflow-hidden">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('penempatan.index')}}" class="btn btn-secondary btn-sm d-flex align-items-center"><i
                class="fa fa-fw fa-arrow-left"></i>&nbsp;</a>
        <h4 class="card-title mb-0">Info Data Penempatan</h4>
        <a href="#" class="btn btn-primary btn-sm d-flex align-items-center"><i class="far fa-fw fa-edit"></i>&nbsp; Ubah</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset($assets->foto)}}" alt="Foto penempatan" class="img-fluid"
                    style="width: 100%; max-width: 300px;">
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Barang</th>
                        <td>{{ $assets->namaBarang}}</td>
                    </tr>
                    <tr>
                        <th>Tahun Perolehan</th>
                        <td>{{ $assets->kodeAsset}}</td>
                    </tr>
                    <tr>
                        <th>QR Code</th>
                        <td>{{ $assets->qrCode}}</td>
                    </tr>
                    <tr>
                        <th>Kode Telkom</th>
                        <td>{{ $assets->kodeTelkom }}</td>
                    </tr>
                    <tr>
                        <th>Serial Number</th>
                        <td>{{ $assets->serialNumber }}</td>
                    </tr>
                    <tr>
                        <th>Lokasi</th>
                        <td>{{ $assets->lokasi}}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $assets->keterangan}}</td>
                    </tr>
                    <tr>
                        <th>Kondisi</th>
                        <td>{{ $assets->kondisi}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $assets->status}}</td>
                    </tr>
                    <tr>
                        <th>Pelabuhan</th>
                        <td>{{ $assets->pelabuhan}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection