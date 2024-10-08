@extends('layouts.auth')
@section('title', 'Register')

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
                        <div class="text-center mt-4 font-weight-light">
                            <h4>Buat Akun</h4>
                        </div>
                        <form class="pt-3" method="POST" action="/register">
                            @csrf
                            <!-- Name Field -->
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    id="inputUsername1" placeholder="Username" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    id="inputEmail1" placeholder="Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    id="inputPassword1" name="password" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Terms and Conditions Checkbox -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="terms" {{ old('terms')
                                            ? 'checked' : '' }}>
                                        Saya setuju dengan Syarat & Ketentuan
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-3">
                                <button name="btn_submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    Register Account
                                </button>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center mt-4 font-weight-light">
                                Sudah punya akun? <a href="/login" class="text-primary">Login</a>
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