
<div class="flex-shrink-0 p-3 bg-drack" style="width: 280px; min-height:100vh; shadow">
    <a href="/dashboard" class="d-flex align-items-center pb-3 mb-3 link-white text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-5 fw-semibold h1">Zaldi</span>
    </a>
    <ul class="list-unstyled ps-0">
    
        <li class="mb-1">
            <a href="/dashboard " class="nav-link" {{ request()->is('kategori*') ? 'active' : '' }} <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#home"></use>
                </svg>
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Dashboard
            </button>
        </a>
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Create Berita
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="/kategori" class="nav-link" {{ request()->is('kategori*') ? 'active' : '' }} class="link-dark rounded">Kategori</a></li>
                    <li><a href="/berita" class="nav-link" {{ request()->is('berita*') ? 'active' : '' }} class="link-dark rounded">berita</a></li>
                    <li><a href="#" class="link-dark rounded">Reports</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Log Out
            </button>
            <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://th.bing.com/th?id=ORMS.75e9e194a1f540fac403aeebf74b9ccb&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>Admin</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></a>

                            </li>

                        </ul>
                    </div>
                </ul>
            </div>
        </li>
    </ul>
</div>
@include('layouts.frame.foot')
