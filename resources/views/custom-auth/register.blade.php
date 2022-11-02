@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 m-auto">
       <div class="card rounded">
        <div class="card-title p-2">
            <h4 class="text">Custom Registration Form</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="name" name="name" id="name" class="form-control
                       @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" id="email" class="form-control
                      @error('email') is-invalid @enderror">
                   @error('email')
                       <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="tel" name="phone" id="phone" class="form-control
                      @error('phone') is-invalid @enderror">
                   @error('phone')
                       <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" id="password" class="form-control
                      @error('password') is-invalid @enderror">
                   @error('password')
                       <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
                    </div>
                    <div class="mb-3">
                      <label for="c_password" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
       </div>
    </div>
  </div>
</div>

@endsection
