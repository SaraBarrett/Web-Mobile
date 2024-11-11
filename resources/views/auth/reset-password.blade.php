@extends('layouts.femaster')
@section('content')
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center my-2"><img
                                src="https://www.layoutcriativo.com/wp-content/uploads/2021/06/cesae.png" alt="logo"
                                width="150"></div>

                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form method="POST" action="{{ route('password.update') }}" class="needs-validation" novalidate=""
                            autocomplete="off">
                            @csrf

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ request()->email }}" required="" autofocus="" fdprocessedid="8f7bri">
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                                @error('email')
                                    erro de email
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email"> Password</label>
                                <input id="password" type="password" class="form-control" name="password" required=""
                                    fdprocessedid="2y22z">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email"> Password Confirmation</label>
                                <input id="password" type="password" class="form-control" name="password_confirmation"
                                    required="" fdprocessedid="2y22z">
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>
                            <input type="hidden" name="token" value="{{ request()->route('token') }}" id="">
                            
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary ms-auto" fdprocessedid="i5syyn">
                                    Actualizar Pass
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright © 2024 — Cesae
                </div>
            </div>
        </div>
    </div>
@endsection
