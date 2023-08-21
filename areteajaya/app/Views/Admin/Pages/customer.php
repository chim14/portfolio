<?= $this->extend('admin/layouts/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Customer</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Customer
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>No Tlp Customer</th>
                                <th>Email Customer</th>
                                <th>Alamat Customer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_customer as $customer) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $customer->namaCustomer; ?></td>
                                    <td><?= $customer->noCustomer; ?></td>
                                    <td><?= $customer->emailCustomer; ?></td>
                                    <td><?= $customer->alamatCustomer; ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editModal<?= $customer->idCustomer; ?>">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $customer->idCustomer; ?>">
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
                    <form action="<?= base_url('customer/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="namaCustomer">Nama Customer</label>
                            <input type="text" name="namaCustomer" id="namaCustomer" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="noCustomer">No Tlp Customer</label>
                            <input type="text" name="noCustomer" id="noCustomer" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailCustomer">Email Customer</label>
                            <input type="email" name="emailCustomer" id="emailCustomer" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatCustomer">Alamat Customer</label>
                            <textarea name="alamatCustomer" id="alamatCustomer" class="form-control" required></textarea>
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
    <!-- Edit Customer Modal -->
    <?php foreach ($daftar_customer as $customer) : ?>
        <div class="modal fade" id="editModal<?= $customer->idCustomer; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Edit Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('customer/update/' . $customer->idCustomer); ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="namaCustomer">Nama Customer</label>
                                <input type="text" name="namaCustomer" id="namaCustomer" class="form-control" value="<?= $customer->namaCustomer; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="noCustomer">No Tlp Customer</label>
                                <input type="text" name="noCustomer" id="noCustomer" class="form-control" value="<?= $customer->noCustomer; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailCustomer">Email Customer</label>
                                <input type="email" name="emailCustomer" id="emailCustomer" class="form-control" value="<?= $customer->emailCustomer; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamatCustomer">Alamat Customer</label>
                                <textarea name="alamatCustomer" id="alamatCustomer" class="form-control" required><?= $customer->alamatCustomer; ?></textarea>
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
    <!-- Delete Modal -->
    <?php foreach ($daftar_customer as $customer) : ?>
        <div class="modal fade" id="hapusModal<?= $customer->idCustomer; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('customer/hapus/' . $customer->idCustomer); ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Yakin data customer <?= $customer->namaCustomer; ?> akan dihapus?</p>
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