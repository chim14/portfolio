<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Areteajaya</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/'); ?>">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>
    <?php if (in_groups(['admin', 'staffpenjualan'])) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Product Management
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kategori'); ?> ">
                <i class="fa-solid fa-book-open"></i>
                <span>Kategori Produk</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('produk'); ?> ">
                <i class="fa-solid fa-book-open"></i>
                <span>Daftar Produk</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Customer Management
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('customer'); ?> ">
                <i class="fa-solid fa-receipt"></i>
                <span>Daftar Customer</span></a>
        </li>
    <?php endif; ?>
    <?php if (in_groups(['admin', 'customer'])) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaction
        </div>

        <!-- Pemesanan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pemesanan'); ?>">
                <i class="fa-solid fa-book"></i>
                <span>Pemesanan</span></a>
        </li>
    <?php endif; ?>
    <?php if (in_groups(['admin', 'staffpenjualan'])) : ?>
        <!-- Penjualan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Penjualan</span></a>
        </li>
    <?php endif; ?>


    <?php if (in_groups('admin')) : ?>
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?> ">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['admin', 'staffkeuangan'])) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Income Management
        </div>

        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?> ">
                <i class="fa-solid fa-check"></i>
                <span>Pendapatan</span></a>
        </li>

        <!-- Nav Item - Edit Profie -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fa-solid fa-clipboard"></i>
                <span>Pengeluaran</span></a>
        </li>
    <?php endif; ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?> ">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit Profie -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-user-edit"></i>
            <span>Edit Profie</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Log Out -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?> ">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>