@extends('layouts.main')
@section('body')
   <div class="row justify-content-center bg-light w-100 mx-0 min-vh-100 align-content-center">
      <div class="col-md-4 bg-white rounded-4 shadow px-5 py-3">
         @if (session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif

         @if (session()->has('loginError'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
               {{ session('loginError') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif

         <div class="mb-4">
            <center><h1>Login</h1></center><hr>
         </div>
         <form action="/login" method="post">
            @csrf
            <input type="text" name="email" id="" placeholder="Email Address" class="form-control mt-4 rounded-pill @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus required>
            @error('email')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
            <input type="password" name="password" id="" placeholder="Password" class="form-control mt-4 rounded-pill" required>
            <button class="btn btn-primary mt-4"><a href="/register">Registrasi</a></button>
            <button type="submit" class="btn btn-primary mt-4">Login</button>
         </form>
      </div>
   </div>
@endsection