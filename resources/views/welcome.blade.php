@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome user</h3>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                            id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="mdi mdi-calendar"></i> Hari ini
                            <?php $currentDate = date('(d/m/Y)'); echo $currentDate;?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent" style="cursor: pointer;">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Barang :</p>
                        <p class="fs-30 mb-2">19019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection