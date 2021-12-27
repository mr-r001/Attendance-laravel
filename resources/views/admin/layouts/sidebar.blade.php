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
                <li class="{{ request()->segment(2) == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user.index') }}" class="nav-link"><i class="fas fa-users"></i> <span>Data Karyawan</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'attedance' ? 'active' : '' }}">
                    <a href="{{ route('admin.attedance.index') }}" class="nav-link"><i class="fas fa-chart-bar"></i> <span>Rekap Absensi</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'change-password' ? 'active' : '' }}">
                    <a href="{{ route('admin.changePassword') }}" class="nav-link"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a>
                </li>
            @elseif ( auth()->user()->isUser())
                <li class="{{ request()->segment(2) == 'card' ? 'active' : '' }}">
                    <a href="{{ route('admin.card') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>ID Card</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'permission' ? 'active' : '' }}">
                    <a href="{{ route('admin.permission.index') }}" class="nav-link"><i class="fas fa-lock"></i> <span>Izin</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'rekap' ? 'active' : '' }}">
                    <a href="{{ route('admin.rekap.index') }}" class="nav-link"><i class="fas fa-chart-bar"></i> <span>Riwayat Absensi</span></a>
                </li>
                <li class="{{ request()->segment(2) == 'change-password' ? 'active' : '' }}">
                    <a href="{{ route('admin.changePassword') }}" class="nav-link"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a>
                </li>
            @endif
        </ul>
    </aside>
</div>
