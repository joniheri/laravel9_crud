@extends('layouts/public/MainPublic')

@section('content')
<div class="container">

  <form action="/processregister" method="POST" style="margin-top: 80px">
    {{-- Notife Register Success or Fail --}}
    <div class="row mb-3">
      <div class="col-md-4">
        @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
          {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger alert-dismissible fade show">
          {{ Session::get('fail') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
    </div>
    {{-- End Notife Register Success or Fail --}}

    @csrf
    <h1 class="mb-3">Form Register</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" id="" value="{{ old('email') }}"
            class="form-control @error('email') is-invalid @enderror" placeholder="Enter email here..." />
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" id="" value="{{ old('username') }}"
            class="form-control @error('username') is-invalid @enderror" placeholder="Enter username here..." />
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Fullname</label>
          <input type="text" name="fullname" id="" value="{{ old('fullname') }}"
            class="form-control @error('fullname') is-invalid @enderror" placeholder="Enter fullname here..." />
          @error('fullname')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" id="inputPassword" value="{{ old('password') }}"
            class="form-control @error('password') is-invalid @enderror" />
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="show-password" />
          <label class="form-check-label">
            Show Password
          </label>
        </div>
        <div class="mb-3">
          <label class="form-label">Confirmation Password</label>
          <input type="password" name="cpassword" id="inputCPassword" value="{{ old('cpassword') }}"
            class="form-control @error('cpassword') is-invalid @enderror" />
          @error('cpassword')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="show-cpassword" />
          <label class="form-check-label">
            Show Password
          </label>
        </div>
        <div class="mb-3">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
        </div>
        <div class="mb-3">
          <span style="color: #2602f4">Sudah punya Akun? <a href="/login">Login Disini</a></span>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection