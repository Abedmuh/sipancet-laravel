@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo" style="text-align: center; margin-bottom: 20px;">
                            <img src="{{ asset('assets/asdplogo.png')}}" alt="logo">
                        </div>
                        <div class="text-center font-weight-light">
                            <h3>Data Aset Inventaris</h3>
                            <h6>PT ASDP Indonesia Ferry (Persero)</h6>
                        </div>
                        <form method="POST" action="/login" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" value=""
                                    id="exampleInputEmail1" placeholder="Email Address">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button name="btn_submit"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                    type="submit">LOGIN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Ingat saya
                                    </label>
                                </div>
                                <a href="lupa_password.php" class="text-primary">Lupa password?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Belum memiliki akun? <a href="/register" class="text-primary">Buat akun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection