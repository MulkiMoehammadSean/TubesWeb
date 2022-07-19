@extends('layouts.main')
@section('body')
<div class="grid">
   {{-- header --}}
   @include('partials.header')

   {{-- sidenav --}}
   @include('partials.navbar')

   <main class="main">
      
      <div class="row g-2 mx-2 mt-3 justify-content-center" >
      <div class="welcome col-12 mx-auto ">
         @foreach ($members as $member)
            <div class="col-lg-12 position-relative mx-auto">
               <a href="/profile/{{ $member->id }}" class="bg-white shadow d-flex px-3 py-3 align-items-center text-dark">
                  <div class="image me-2">
                     <img src="{{ asset('storage/' . $member->profileImage) }}" alt="" width="75" height="75" class="img-fluid">
                  </div>
                  <div class="">
                     <h5>{{ $member->namaLengkap }}</h5>
                  </div>
               </a>
               @auth
                  <div class="position-absolute top-0 end-0 me-3 mt-1">
                     <form action="/hapus/{{ $member->id }}" method="post">
                        @csrf
                        <button class="dropdown-item text-danger " type="submit" onclick="return confirm('Are you sure?')"> hapus
                           <i class="bi bi-trash"></i>
                        </button>
                     </form>
                  </div>
               @endauth
            </div>
         @endforeach
      </div>
   </main>

   {{-- footer --}}
   @include('partials.footer')
</div>
@endsection