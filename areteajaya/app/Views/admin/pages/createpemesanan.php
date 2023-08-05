<?= $this->extend('admin/layout/header') ?>
<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Produk</li>
            </ol>
        </div>
    </main>
</div>