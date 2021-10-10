<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <i class="fas fa-home"></i>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <i class="fas fa-file-signature"></i>
                My Posts
                </a>
            </li>
        </ul>

        @can('admin')
        <hr>
        <h6 class="sidebar-heading text-muted d-flex justify-content-between align-items-center px-3 mt-3 mb-1">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                <i class='bx bxs-grid-alt'></i> Lesson Categories</a>
            </li>
        </ul>            
        @endcan
    </div>
</nav>