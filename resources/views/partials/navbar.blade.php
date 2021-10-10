<nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="/"><i class="fas fa-book-reader"></i> MyNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start bg-dark mobile-responsive" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand offcanvas-title" href="/"><i class="fas fa-book-reader"></i> MyNotes</a>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-book-open"></i> Lessons</a>

                <ul class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/lessons?category=matematika">Matematika</a></li>
                <li><a class="dropdown-item" href="/lessons?category=fisika">Fisika</a></li>
                <li><a class="dropdown-item" href="/lessons?category=kimia">Kimia</a></li>
                <li><a class="dropdown-item" href="/lessons?category=biologi">Biologi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/lessons">See More</a></li>
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-pencil-alt"></i> Exercises</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-puzzle-piece"></i> Games</a>
            </li>
            
            </ul>

            <i id="icon-button" class="bg-light rounded-circle fas fa-search" style="padding: 13px; cursor: pointer;"></i>

            <form action="/lessons" method="GET" class="d-flex search-form position-absolute" style="top: 100px; right: 5px; width:20rem; height: 3rem;  transform-origin: right;" id="search-form">
              @if (request('category')) 
                <input type="hidden" name="category" value="{{ request('category') }}">
              @endif

              @if (request('author')) 
                <input type="hidden" name="author" value="{{ request('author') }}">
              @endif

                <input class="form-control me-2 bg-dark text-white rounded-pill ps-4 pe-5" id="search-box" type="search" placeholder="Search library" name="btn-keyword" value="{{ request('btn-keyword') }}">
                <button class="btn btn-primary rounded-circle position-absolute" type="submit" style=" right: 8px; height: 3rem; width: 3rem; background-color: rgba(0, 0, 0, 0); border: none"><i class="fas fa-search"></i></button>
            </form>
            

            <div class="ms-3">
            @auth
            <div class="nav-item dropdown" id="profile-button">
              <a href="/login" class="rounded-pill me-1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px"> <i class="fas fa-user-circle" style="font-size: 40px"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><p class="dropdown-item disabled">Halo, {{ auth()->user()->username }}</p></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/dashboard"><i class='bx bxs-dashboard'></i> My Dashboard</a></li>

                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" href="#" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log Out</button>
                  </form>
                </li>
              </ul>
            </div>
            @else
              <a href="/login" class="btn btn-primary rounded-pill me-1" style="width: 100px" id="login-button"><i class="fas fa-sign-in-alt"></i> Log In</a>
            @endauth
            </div>
            
        </div>
      </div>
    </div>
  </nav>

