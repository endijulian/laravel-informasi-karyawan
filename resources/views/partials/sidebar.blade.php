<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">DEPARTEMEN PRESS SHOP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">

        </div>

        @if (Auth::user()->role_user == 1)
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="{{ request()->is('admin-dashboard*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('admin.dashboard') }}"><i class="far fa-square"></i>
                        <span>Dashboard</span></a></li>
                <li class="menu-header">Data</li>
                <li class="{{ request()->is('user*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('user.index') }}"><i class="far fa-user"></i>
                        <span>Data User</span></a></li>

                <li class="{{ request()->is('karyawan*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('karyawan.index') }}"><i class="far fa-user"></i>
                        <span>Data Karyawan</span></a></li>

                <li class="{{ request()->is('penilaian*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('penilaian-admin.index') }}"><i class="far fa-user"></i>
                        <span>Input Penilaian</span></a></li>

                <li class="{{ request()->is('nilai-performa*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('nilai-performa.index') }}"><i class="far fa-user"></i>
                        <span>Nilai performa</span></a></li>

                <li class="{{ request()->is('karyawan-terbaik*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('karyawan.terbaik') }}"><i class="far fa-user"></i>
                        <span>Karyawan Terbaik</span></a></li>

                <li class="{{ request()->is('karyawan-terendah*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('karyawan.terendah') }}"><i class="far fa-user"></i>
                        <span>Karyawan Terendah</span></a></li>

                <li class="{{ request()->is('nilai-akhir*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('nilai.akhir') }}"><i class="far fa-user"></i>
                        <span>Nilai Akhir Periode</span></a></li>

            </ul>
        @elseif (Auth::user()->role_user == 2)
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item dropdown">
                    <a href="{{ url('dashboard_karyawan') }}" class="nav-link "><i class="fas fa-fire">
                        </i><span>Dashboard</span></a>
                </li>

                <li class="{{ request()->is('pelanggaran*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('nilai-performa.index') }}"><i class="far fa-square"></i>
                        <span>Nilai performa</span></a></li>
                <li class="{{ request()->is('total_point*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('data-karyawan.index') }}"><i class="far fa-square"></i>
                        <span>Data karyawan</span></a></li>

                        
            @elseif (Auth::user()->role_user == 3)
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('dashboard.leader') }}" class="nav-link "><i class="fas fa-fire">
                            </i><span>Dashboard</span></a>
                    </li>

                    <li class="{{ request()->is('pelanggaran*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('nilai-performa.index') }}"><i class="far fa-square"></i>
                            <span>Nilai performa</span></a></li>
                    <li class="{{ request()->is('total_point*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('data-karyawan.index') }}"><i class="far fa-square"></i>
                            <span>Data karyawan</span></a></li>
                            
                <li class="{{ request()->is('karyawan-terbaik*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('karyawan.terbaik') }}"><i class="far fa-user"></i>
                        <span>Karyawan Terbaik</span></a></li>

                <li class="{{ request()->is('karyawan-terendah*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('karyawan.terendah') }}"><i class="far fa-user"></i>
                        <span>Karyawan Terendah</span></a></li>

                <li class="{{ request()->is('nilai-akhir*') ? 'active' : '' }}"><a class="nav-link"
                        href="{{ route('nilai.akhir') }}"><i class="far fa-user"></i>
                        <span>Nilai Akhir Periode</span></a></li>
                </ul>
        @endif

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
            </a>
        </div>

    </aside>
</div>
