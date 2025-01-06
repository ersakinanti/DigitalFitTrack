@extends('layouts.layout')

@section('content')
<div class="container mt-5" style="background-color: #eef2f7; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="border: none;">
                <div class="card-header text-white text-center" style="background: linear-gradient(135deg, #359ae7 0%, #359ae7  100%);">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" style="border-radius: 8px;" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" style="border-radius: 8px;" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" style="background-color: #359ae7 f; border: none; border-radius: 8px;">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center" style="background-color: #f9f9f9;">
                    <p>Belum punya akun? <a href="{{ route('register') }}" class="text-danger" style="text-decoration: none; font-weight: bold;">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
