<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown {{ set_active('dashboard') }}">
      <a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    {{-- @if(auth()->user()->role == 'admin') --}}
    <li class="nav-item dropdown {{ set_active('verifikasi.*') }}">
        <a href="siswa" class="nav-link"><i class="fas fa-users"></i><span>Daftar Peserta</span></a>
    </li>
    {{-- @endif --}}
  </ul>