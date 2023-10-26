<header>
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" class="p-3" alt="" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase {{Route::currentRouteName() === 'characters' ? 'border-bottom border-primary': ''}} " aria-current="page" href="{{route('characters')}}">Characters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-uppercase {{Route::currentRouteName() === 'comics' ? 'border-bottom border-primary': ''}} " href="{{route('comics')}}">Comics</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-uppercase " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex btn_search " role="search">
          <input class="form-control border-0 text-end p-0" type="search" placeholder="Search" aria-label="Search">
          <button class="btn border-0 p-0" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <section class="bg_top img_jumb">
    <div class="p-3"></div>
  </section>
</header>