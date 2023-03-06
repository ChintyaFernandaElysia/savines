<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon">
      {{-- <i class="fas fa-laugh-wink"></i> --}}
      <svg width="25" height="40" viewBox="0 0 25 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12.5" cy="12.5" r="11.5196" fill="#FF9C08" stroke="#FF9C08" stroke-width="1.96078"/>
        <path d="M22.9411 13.8725C23.5293 7.54908 20.7842 2.00977 12.647 2.00977C4.50972 2.00977 1.29077 9.21555 2.10775 14.1175C3.23779 20.8978 8.84074 23.6076 16.7143 23.8109C17.2556 23.8249 17.6959 24.2612 17.6959 24.8027C17.6959 26.4415 17.6959 29.1206 17.6959 29.4606H5.29402" stroke="white" stroke-width="3.92157"/>
        <path d="M7.745 37.1572H16.5685" stroke="white" stroke-width="3.92157"/>
        </svg>
        
    </div>
    <div class="sidebar-brand-text mx-3">Savines</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  {{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('barang') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Barang</span></a>
  </li> --}}

  <li class="nav-item">
    <a class="nav-link" href="{{ route('transactions') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Transactions</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('notes') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Notes</span></a>
  </li>

  {{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('expenses') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Expenses</span></a>
  </li> --}}

	{{-- @if (auth()->user()->level == 'Admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kategori</span></a>
  </li>
	@endif --}}

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  {{-- <!-- Sidebar Message -->
  <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
  </div> --}}

</ul>
