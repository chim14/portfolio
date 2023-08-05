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
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produk
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
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
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Kategori Produk</th>
                                <th>Unit Produk</th>
                                <th>Harga Produk</th>
                                <th>Tanggal Input</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_produk as $produk) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $produk->kodeProduk; ?></td>
                                    <td><?= $produk->namaProduk; ?></td>
                                    <td><?= $produk->slugKategori; ?></td>
                                    <td><?= $produk->unitProduk; ?></td>
                                    <td><?= $produk->hargaProduk; ?></td>
                                    <td><?= date('d-m-Y H:i', strtotime($produk->tanggalInputProduk)); ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $produk->idProduk; ?>">
                                                <i class="fas fa-edit"></i> Ubah
                                            </button>
                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $produk->idProduk; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('produk/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="kodeProduk">Kode Produk</label>
                            <input type="text" name="kodeProduk" id="kodeProduk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="namaProduk">Nama Produk</label>
                            <input type="text" name="namaProduk" id="namaProduk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="slugKategori">Kategori Produk</label>
                            <select name="slugKategori" id="slugKategori" class="form-control">
                                <option value="">--pilih kategori produk--</option>
                                <?php foreach ($kategori_produk as $kategori) : ?>
                                    <option value="<?= $kategori->slugKategori; ?>"><?= $kategori->namaKategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="unitProduk">Unit Produk</label>
                            <input type="text" name="unitProduk" id="unitProduk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk">Harga Produk</label>
                            <input type="text" name="hargaProduk" id="hargaProduk" class="form-control" required>
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
    <!-- fungsi untuk get data dari interface -->
    <?php foreach ($daftar_produk as $produk) : ?>
        <div class="modal fade" id="ubahModal<?= $produk->idProduk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Ubah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('produk/ubah/' . $produk->idProduk) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="put">
                            <div class="mb-3">
                                <label for="kodeProduk">Kode Produk</label>
                                <input type="varchar" name="kodeProduk" id="kodeProduk" class="form-control" value="<?= $produk->kodeProduk; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaProduk">Nama Produk</label>
                                <input type="varchar" name="namaProduk" id="namaProduk" class="form-control" value="<?= $produk->namaProduk; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="slugKategori">Kategori Produk</label>
                                <select name="slugKategori" id="slugKategori" class="form-control">
                                    <option value="">--pilih kategori produk--</option>
                                    <?php foreach ($kategori_produk as $kategori) : ?>
                                        <option value="<?= $kategori->slugKategori; ?>" <?= ($kategori->slugKategori === $produk->slugKategori) ? 'selected' : ''; ?>><?= $kategori->namaKategori; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="unitProduk">Unit Produk</label>
                                <input type="varchar" name="unitProduk" id="unitProduk" class="form-control" value="<?= $produk->unitProduk; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="hargaProduk">Harga Produk</label>
                                <input type="int" name="hargaProduk" id="hargaProduk" class="form-control" value="<?= $produk->hargaProduk; ?>" required>
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
    <?php foreach ($daftar_produk as $produk) : ?>
        <div class="modal fade" id="hapusModal<?= $produk->idProduk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus Kategori Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('produk/hapus/' . $produk->idProduk) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Yakin Data Kategori Produk : <?= $produk->namaProduk ?>, Akan dihapus?</p>
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