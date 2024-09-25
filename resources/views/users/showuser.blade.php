@extends('layouts.dashboard')

@section('title', ($user->name))

@section('content')
<div class="card shadow overflow-hidden">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('penempatan.index')}}" class="btn btn-secondary btn-sm d-flex align-items-center"><i
                class="fa fa-fw fa-arrow-left"></i>&nbsp;</a>
        <h4 class="card-title mb-0">Info Data Penempatan</h4>
        <a href="#" class="btn btn-primary btn-sm d-flex align-items-center"><i class="far fa-fw fa-edit"></i>&nbsp;
            Ubah</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                @if ($user->foto)
                <img src="{{ asset('storage/foto/' . $user->foto)}}" alt="Foto penempatan" class="img-fluid"
                    style="width: 100%; max-width: 300px;">
                @else
                <p class="text-center">No Image Available</p>
                @endif
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Barang</th>
                        <td>{{ $user->name}}</td>
                    </tr>
                    <tr>
                        <th>Nama Barang</th>
                        <td>{{ $user->role}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection