<aside class="sidenav">
   <div class="sidenav__brand">
      <!-- <i class="fas fa-feather-alt sidenav__brand-icon"></i> -->
      <!-- <a class="sidenav__brand-link" href="#">Ux<span class="text-light">Pro</span></a> -->
      <a class="sidenav__brand-link" href="#">Kelompok 6</a>
      <i class="fas fa-times sidenav__brand-close"></i>
   </div>
      <div class="sidenav__profile-title text-light">
         {{-- @auth
            {{ auth()->user()->name }}
         @else
            Guest
         @endauth --}}
      </div>
   <div class="menu">
      <div class="position-sticky pt-3">
            <ul class="nav flex-column">
               <li class="nav-item {{ Request::is('/') ? 'selected-nav-item' : '' }}">
                  <a class="nav-link text-white active" aria-current="page" href="/">
                  Dashboard
                  </a>
               </li>
               @auth
                  <li class="nav-item {{ Request::is('addProfile') ? 'selected-nav-item' : '' }}">
                     <a class="nav-link text-white active" aria-current="page" href="/addProfile">
                      <i class="bi bi-plus-square"></i> Tambah Data
                     </a>
                  </li>
               @endauth
            </ul>
            <ul class="nav flex-column">
               @foreach ($members as $member)
               <li class="nav-item {{ Request::is("profile/$member->id")||Request::is("editProfile/$member->id") ? 'selected-nav-item' : '' }}">
                  <a class="nav-link text-white" href="/profile/{{ $member->id }}">
                     <i class="bi bi-person-circle"></i>
                        {{ $member->namaLengkap }}
                  </a>
               </li>
               @endforeach
            </ul>
      </div>
   </div>
</aside>