<?= $this->extend('admin/layout/header') ?>
<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Pesanan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Customer
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <a href="<?= base_url('pemesanan/create'); ?>" class="btn btn-primary btn-sm mb-2">
                        <i class="fas fa-plus"></i> Tambah
                    </a>
                    <!-- Notifikasi berhasil tambah produk -->
                    <?php if (session('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Nama Produk</th>
                                <th>Unit Produk</th>
                                <th>Qty Produk</th>
                                <th>Harga Produk</th>
                                <th>Total Harga Produk</th>
                                <th>Subtotal Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_pemesanan as $pemesanan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pemesanan->idCustomer; ?></td>
                                    <td><?= $pemesanan->idProduk; ?></td>
                                    <td><?= $pemesanan->unitProduk; ?></td>
                                    <td><?= $pemesanan->hargaProduk; ?></td>
                                    <td><?= $pemesanan->totalHargaProduk; ?></td>
                                    <td><?= $pemesanan->totalHargaPemesanan; ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($pemesanan->tanggalPemesanan)); ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="<?= base_url('pemesanan/edit'); ?>" class="btn btn-success btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $pemesanan->idPemesanan; ?>">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Delete Modal -->
    <?php foreach ($daftar_pemesanan as $pemesanan) : ?>
        <div class="modal fade" id="hapusModal<?= $pemesanan->idPemesanan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pemesanan/hapus/' . $pemesanan->idPemesanan); ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Yakin pesanan dari <?= $pemesanan->idCustomer; ?> akan dihapus?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= $this->endSection() ?>