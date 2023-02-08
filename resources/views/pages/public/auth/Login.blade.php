@extends('layouts/public/MainPublic')

@section('content')
<div class="container">
  <form action="/processlogin" method="POST" style="margin-top: 80px">
    @csrf
    <h1 class="mb-3">Form Login</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" id="" class="form-control @error('username') is-invalid @enderror"
            placeholder="Enter username here..." />
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" id="inputPassword"
            class="form-control @error('password') is-invalid @enderror" placeholder="" />
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="show-password">
          <label class="form-check-label">
            Tampilkan Password
          </label>
        </div>
        <div class="mb-3">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
        </div>
        <div class="mb-3">
          <span style="color: #2602f4">Belum punya Akun? <a href="/register">Register Disini</a></span>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection