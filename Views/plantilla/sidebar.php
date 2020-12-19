<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background:rgba(0,128,128,1)" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL ?>index/index">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-industry"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Venta de Celulares</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="../index/index">
    <i class="fas fa-fw fa-home"></i>
    <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  General
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productos" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-box"></i>
    <span>Productos</span>
  </a>

  <div id="productos" class="collapse" aria-labelledby="headingUtilities" data-parent="">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>productos/index">Productos</a>
      <a class="collapse-item" href="<?= BASE_URL ?>productos/verproductos">Ver Productos</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#servicios" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-file-invoice-dollar"></i>
    <span>Servicios</span>
  </a>

  <div id="servicios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
    <a class="collapse-item" href="<?= BASE_URL ?>productos/verrecargas">Recargas</a>
    </div>
  </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->