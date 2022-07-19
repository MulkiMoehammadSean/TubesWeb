<header class="header">
   <i class="fas fa-bars header__menu"></i>
   <div class="header__search">
      <input class="header__input" placeholder="Search..." />
   </div>
   @auth
      <form action="/logout" method="post">
         @csrf
         <button type="submit" class="border-0 bg-transparent" title="Logout">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
      </form>
   @else
   <button class="border-0 bg-transparent" title="Login">
      <a href="/login" class="text-dark">Login <i class="fa-solid fa-arrow-right-to-bracket"></i> </a>
   </button>
   @endauth
</header>