@extends('layouts.main')
@section('body')
<div class="grid">
   {{-- header --}}
   @include('partials.header')

   {{-- sidenav --}}
   @include('partials.navbar')

   <main class="main">
      <div class="row mx-2 mt-2 mb-4 gy-3">
         <div class="col-md-12">
            <div class="bg-white shadow rounded-3 p-3">
               <h1>Tambahkan Data</h1>
            </div>
         </div>
         <div class="col-md-12">
            <div class="bg-white shadow rounded-3 px-3 py-2 ">
            <h3>Biodata</h3>
               <form action="/storeProfile" method="post" enctype="multipart/form-data">
                  @csrf
                  <table class="table-borderless table-sm col-12 ">
                     <tr>
                     <td>
                        <label for="namaLengkap">Nama Lengkap</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="namaLengkap" id="namaLengkap" value="" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="namaPanggilan">nama Panggilan</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="namaPanggilan" id="namaPanggilan" value="" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="tempatLahir">tempat Lahir</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="tempatLahir" id="tempatLahir" value="" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="tanggalLahir">tanggal Lahir</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="date" name="tanggalLahir" id="tanggalLahir" value="" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="">jenisKelamin</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="radio" name="jenisKelamin" id="Laki-Laki" value="Laki-Laki" class="" checked>
                        <label for="Laki-Laki">Laki-Laki</label>
                        <input type="radio" name="jenisKelamin" id="Perempuan" value="Perempuan" class="">
                        <label for="Perempuan">Perempuan</label>
                     </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="asal">Asal</label>
                        </td>
                        <td>:</td>
                        <td>
                           <input type="text" name="asal" id="asal" value="" class="form-control">
                        </td>
                     </tr>
                     <tr>
                        <td><label for="fotoBio">Foto Biodata</label></td>
                        <td>:</td>
                        <td>
                           <input class="form-control form-control-sm @error('profileImage') is-invalid @enderror" type="file" id="uploadImage" name="profileImage" onchange="previewImage()">
                        </td>
                     </tr>
                  </table>
                  <button type="submit" class="btn btn-dark mt-3 w-100">Simpan</button>
               </form>
            </div>
         </div>
      </div>
   </main>

   {{-- footer --}}
   @include('partials.footer')
</div>
@endsection