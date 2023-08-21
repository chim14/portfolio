<?= $this->extend('admin/layouts/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Pendapatan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Pendapatan
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                    <!-- Notifikasi berhasil tambah pendapatan -->
                    <?php if (session('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Invoice</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah Pemesanan</th>
                                <th>Tanggal Pendapatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_pendapatan as $pendapatan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pendapatan->invoicePemesanan; ?></td>
                                    <td><?= $pendapatan->namaCustomer; ?></td>
                                    <td><?= $pendapatan->jumlahPendapatan; ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($pendapatan->tanggalPemesanan)); ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="<?= base_url('admin/' . $pendapatan->idPendapatan); ?>" class="btn btn-info btn-sm me-1">detail</a>
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
    <?= $this->endSection() ?>