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
               <h1>{{ $biodata->namaLengkap }}</h1>
            </div>
         </div>
         <div class="col-md-12">
            <div class="bg-white shadow rounded-3 px-3 py-2">
            <h3>Biodata</h3>
               <form action="/editProfile/{{ $biodata->id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $biodata->id }}">
                  <input type="hidden" name="oldImage" value="{{ $biodata->profileImage }}">
                  <table class="table-borderless table-sm col-12 ">
                     <tr>
                     <td>
                        <label for="namaLengkap">Nama Lengkap</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="namaLengkap" id="namaLengkap" value="{{ $biodata->namaLengkap }}" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="namaPanggilan">nama Panggilan</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="namaPanggilan" id="namaPanggilan" value="{{ $biodata->namaPanggilan }}" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="tempatLahir">tempat Lahir</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="text" name="tempatLahir" id="tempatLahir" value="{{ $biodata->tempatLahir }}" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="tanggalLahir">tanggal Lahir</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="date" name="tanggalLahir" id="tanggalLahir" value="{{ $biodata->tanggalLahir }}" class="form-control">
                     </td>
                     </tr>
                     <tr>
                     <td>
                        <label for="">jenis Kelamin</label>
                     </td>
                     <td>:</td>
                     <td>
                        <input type="radio" name="jenisKelamin" id="Laki-Laki" value="Laki-Laki" class="" @if($biodata->jenisKelamin=="Laki-Laki") checked @endif>
                        <label for="Laki-Laki">Laki-Laki</label>
                        <input type="radio" name="jenisKelamin" id="Perempuan" value="Perempuan" class="" @if($biodata->jenisKelamin=="Perempuan") checked @endif>
                        <label for="Perempuan">Perempuan</label>
                     </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="asal">Asal</label>
                        </td>
                        <td>:</td>
                        <td>
                           <input type="text" name="asal" id="asal" value="{{ $biodata->asal }}" class="form-control">
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