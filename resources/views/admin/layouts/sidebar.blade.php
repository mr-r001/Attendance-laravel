<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#" class="logo">
                {{ auth()->user()->role->name }} Panel
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" class="logo">
                {{-- <img src="{{ asset('img/logo.jpeg') }}" width="50" alt="navbar brand"> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            {{-- Data --}}
            @if (auth()->user()->isAdmin())
                <li class="{{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'customer' ? 'active' : '' }}">
                    <a href="{{ route('admin.customer.index') }}" class="nav-link"><i class="fas fa-users"></i> <span>Data Customer</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tracking</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="{{ route('admin.tracking-bpkb.index') }}">BPKB</a></li>
                      <li><a class="nav-link" href="{{ route('admin.tracking-stnk.index') }}">STNK</a></li>
                    </ul>
                  </li>
                <li class="{{ request()->segment(2) == 'change-password' ? 'active' : '' }}">
                    <a href="{{ route('admin.changePassword') }}" class="nav-link"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a>
                </li>
            @elseif ( auth()->user()->isUser())
                <li class="{{ request()->segment(2) == 'card' ? 'active' : '' }}">
                    <a href="{{ route('admin.card') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'change-password' ? 'active' : '' }}">
                    <a href="{{ route('admin.changePassword') }}" class="nav-link"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a>
                </li>
            @endif
        </ul>
    </aside>
</div>
