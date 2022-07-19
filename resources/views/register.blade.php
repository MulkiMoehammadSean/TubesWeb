@extends('layouts.main')
@section('body')
   <div class="row justify-content-center bg-light w-100 mx-0 min-vh-100 align-content-center">
      <div class="col-md-4 bg-white rounded-4 shadow px-5 py-3">
         <div class="mb-4">
            <h1 align="center">Registrasi</h1><hr>
         </div>
         <form action="/register" method="post">
            @csrf
            <input type="text" name="name" id="" placeholder="Name" class="form-control mt-4 rounded-pill @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
            @error('name')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
            <input type="text" name="email" id="" placeholder="Email Address" class="form-control mt-4 rounded-pill @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
            <input type="password" name="password" id="" placeholder="Password" class="form-control mt-4 rounded-pill @error('password') is-invalid @enderror">
            @error('password')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
            <input type="password" name="password_confirmation" id="" placeholder="Confirm Password" class="form-control mt-4 rounded-pill @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
            <div class="invalid-feedback">
                  {{ $message }}
               </div>
               @enderror
            <button type="submit" class="btn btn-primary mt-4 ">Registrasi</button>
             <button class="btn btn-primary mt-4"><a href="/login">Login</a></button>
         </form>
      </div>
   </div>
   @endsection