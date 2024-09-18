@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="card shadow overflow-hidden">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Data Penempatan</h4>
        <div class="d-inline-flex">
            <a href="input_data_penempatan.php" class="btn btn-primary btn-sm d-flex align-items-center"><i
                    class="fa fa-fw fa-plus"></i>&nbsp; Tambah</a>
            <a href="export_penempatan.php" class="btn btn-primary btn-sm d-flex align-items-center ml-2"><i
                    class="fa fa-fw fa-download"></i>&nbsp; Export</a>
            <a href="export_pdf.php" class="btn btn-primary btn-sm d-flex align-items-center ml-2"><i
                    class="fa fa-fw fa-download"></i>&nbsp; PDF</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="penempatanTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Tahun Perolehan</th>
                        <th>Kode Aset</th>
                        <th>Kode Telkom</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection