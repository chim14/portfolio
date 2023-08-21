<?= $this->extend('admin/layouts/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Pengeluaran</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Pengeluaran
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                    <!-- Notifikasi berhasil tambah pengeluaran -->
                    <?php if (session('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengeluaran</th>
                                <th>Type Pengeluaran</th>
                                <th>Jumlah Pengeluaran</th>
                                <th>Tanggal Pengeluaran</th>
                                <th>Catatan Pengeluaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_pengeluaran as $pengeluaran) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pengeluaran->namaPengeluaran; ?></td>
                                    <td><?= $pengeluaran->typePengeluaran; ?></td>
                                    <td><?= $pengeluaran->jumlahPengeluaran; ?></td>
                                    <td><?= $pengeluaran->tanggalPengeluaran; ?></td>
                                    <td><?= $pengeluaran->notePengeluaran; ?></td>

                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $pengeluaran->idPengeluaran; ?>">
                                                <i class="fas fa-edit"></i> Ubah
                                            </button>
                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $pengeluaran->idPengeluaran; ?>">
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
    <!-- Modal Tambah-->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah pengeluaran Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pengeluaran/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="namaPengeluaran">Nama Pengeluaran</label>
                            <input type="text" name="namaPengeluaran" id="typePengeluaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="typePengeluaran">Type Pengeluaran</label>
                            <input type="text" name="typePengeluaran" id="namaPengeluaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahPengeluaran">Jumlah Pengeluaran</label>
                            <input type="text" name="jumlahPengeluaran" id="jumlahPengeluaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPengeluaran">Tanggal Pengeluaran</label>
                            <input type="date" name="tanggalPengeluaran" id="tanggalPengeluaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="notePengeluaran">Catatan Pengeluaran</label>
                            <textarea name="notePengeluaran" id="notePengeluaran" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Ubah-->
    <?php foreach ($daftar_pengeluaran as $pengeluaran) : ?>
        <div class="modal fade" id="ubahModal<?= $pengeluaran->idPengeluaran; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Ubah pengeluaran Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pengeluaran/ubah/' . $pengeluaran->idPengeluaran) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="namaPengeluaran">Nama Pengeluaran</label>
                                <input type="text" name="namaPengeluaran" id="namaPengeluaran" class="form-control" value="<?= $pengeluaran->namaPengeluaran; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="typePengeluaran">Type Pengeluaran</label>
                                <input type="text" name="typePengeluaran" id="namaPengeluaran" class="form-control" value="<?= $pengeluaran->typePengeluaran; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlahPengeluaran">Jumlah Pengeluaran</label>
                                <input type="text" name="jumlahPengeluaran" id="jumlahPengeluaran" class="form-control" value="<?= $pengeluaran->jumlahPengeluaran; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggalPengeluaran">Tanggal Pengeluaran</label>
                                <input type="date" name="tanggalPengeluaran" id="tanggalPengeluaran" class="form-control" value="<?= $pengeluaran->tanggalPengeluaran; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="notePengeluaran">Catatan Pengeluaran</label>
                                <textarea name="notePengeluaran" id="notePengeluaran" class="form-control" value="<?= $pengeluaran->notePengeluaran; ?>" required></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Modal Hapus-->
    <?php foreach ($daftar_pengeluaran as $pengeluaran) : ?>
        <div class="modal fade" id="hapusModal<?= $pengeluaran->idPengeluaran; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus pengeluaran Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pengeluaran/hapus/' . $pengeluaran->idPengeluaran) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Yakin Data Pengeluaran : <?= $pengeluaran->namaPengeluaran ?>, Akan dihapus?</p>
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
</div>
<?= $this->endSection() ?>