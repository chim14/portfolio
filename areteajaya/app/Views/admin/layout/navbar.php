<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Penjualan</div>
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Produk
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('produk') ?>" href=" layout-static.html">Daftar Produk</a>
                        <a class="nav-link" href="<?= base_url('category-product') ?>" href="layout-sidenav-light.html">Kategori Produk</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutscustomer" aria-expanded="false" aria-controls="collapseLayoutscustomer">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutscustomer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('customer') ?>" href="layout-sidenav-light.html">Daftar Customer</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutstransactions" aria-expanded="false" aria-controls="collapseLayoutscustomer">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Transaksi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutstransactions" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('pemesanan') ?>" href=" layout-static.html">Pemesanan</a>
                        <a class="nav-link" href="<?= base_url('customer') ?>" href="layout-sidenav-light.html">Penjualan</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Keuangan</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsfinance" aria-expanded="false" aria-controls="collapseLayoutscustomer">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Keuangan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsfinance" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('list-restaurant') ?>" href=" layout-static.html">Pendapatan</a>
                        <a class="nav-link" href="<?= base_url('customer') ?>" href="layout-sidenav-light.html">Pengeluaran</a>
                    </nav>
                </div>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Report
                </a>
                <a class="nav-link" href="<?= base_url('user') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                    Users/Employee
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Manager
        </div>
    </nav>
</div>