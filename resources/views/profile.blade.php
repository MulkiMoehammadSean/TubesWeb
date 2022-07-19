@extends('layouts.main')
@section('body')
<div class="grid">
      {{-- header --}}
      @include('partials.header')

      {{-- sidenav --}}
      @include('partials.navbar')


      <main class="main">
         <div class="row mx-2 mt-2 mb-4 g-3">
            <div class="col-md-12">
               <div>
                  <h1>{{ $biodata->namaLengkap }}</h1>
               </div>
            </div>
            
            <div class="col-md-12">
               <div class="bg-white shadow rounded-2 px-1 py-2">
                  <h3 align="center">Biodata</h3><hr>
                  <table class="table table-borderless table-sm">
                     <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ $biodata->namaLengkap }}</td>
                     </tr>
                     <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td>{{ $biodata->namaPanggilan }}</td>
                     </tr>
                     <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>{{ $biodata->tempatLahir }}</td>
                     </tr>
                     <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $biodata->tanggalLahir }}</td>
                     </tr>
                     <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $biodata->jenisKelamin }}</td>
                     </tr>
                     <tr>
                        <td>Asal</td>
                        <td>:</td>
                        <td>{{ $biodata->asal }}</td>
                     </tr>
                  </table>
                  @auth
                     <a href="/editProfile/{{ $biodata->id }}" class="btn btn-dark w-100">Edit <i class="bi bi-pencil-square"></i></a>
                  @endauth
               </div>
            </div>
         </div>
      </main>

      {{-- footer --}}
      @include('partials.footer')
   </div>
@endsection