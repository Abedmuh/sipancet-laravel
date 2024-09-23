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
                        <th>Kode Asset</th>
                        <th>QR Code</th>
                        <th>Lokasi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $item)
                    <td>{{ $item->namaBarang }}</td>
                    <td>{{ $item->kodeAsset }}</td>
                    <td>{{ $item->qrCode }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>
                        @if ($item->foto)
                        <img src="{{ asset($item->foto) }}" alt="Image" width="50">
                        @else
                        No Image
                        @endif
                    </td>

                    <td class="d-flex align-items-center" style="gap: 10px">
                        <a href="{{ route('penempatan.show',$item->uuid) }}" title="Detail penempatan">
                            <i class="fas fa-fw fa-info-circle" style="font-size: 20px; padding: 5px;"></i>
                        </a>
                        <a href="{{ route('penempatan.edit',$item->uuid)}}" title="Ubah">
                            <i class="far fa-fw fa-edit" style="font-size: 20px; padding: 5px;"></i>
                        </a>
                        <a href="#" title="Hapus" onclick="hapus('{{ $item->id }}', '{{ $item->namaBarang }}')" class="text-danger">
                            <i class="fas fa-fw fa-trash" style="font-size: 20px; padding: 5px;"></i>
                        </a>
                    </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus <strong id="itemName"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- Form to delete the asset -->
                <form id="deleteForm" action="/penempatan" method="DELETE">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function hapus(id, namaBarang) {
        document.getElementById('itemName').textContent = namaBarang;
        document.getElementById('deleteForm').action = '/assets/' + id;
        $('#deleteModal').modal('show');
    }
</script>

@endsection