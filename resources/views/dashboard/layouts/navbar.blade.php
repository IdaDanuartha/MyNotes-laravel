<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><i class='bx bxs-dashboard'></i> MyDashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">

        <div class="btn-group dropstart">
            <a href="#" class="m-2 text-light" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle" style="font-size: 40px"></i>
            </a>
            <ul class="dropdown-menu position-absolute">
              <li><a class="dropdown-item disabled" href="#">Hai, {{ auth()->user()->username }}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/"><i class="fas fa-blog"></i> Blog</a></li>

              <li>
                <form action="/logout" method="POST">
                @csrf
                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
              </li>
            </ul>
          </div>
        
    </div>
</header>