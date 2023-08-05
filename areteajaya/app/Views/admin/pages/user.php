<?= $this->extend('admin/layout/header') ?>
<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    User
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                    <!-- Notifikasi berhasil tambah user -->
                    <?php if (session('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('success'); ?>
                        </div>
                    <?php endif; ?>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Posisi User</th>
                                <th>Email User</th>
                                <th>Password User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_user as $user) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $user->namaUser; ?></td>
                                    <td><?= $user->posisiUser; ?></td>
                                    <td><?= $user->emailUser; ?></td>
                                    <td><?= $user->passwordUser; ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $user->idUser; ?>">
                                                <i class="fas fa-edit"></i> Ubah
                                            </button>
                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $user->idUser; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="namaUser">Nama User</label>
                            <input type="text" name="namaUser" id="namaUser" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="posisiUser">Posisi User</label>
                            <input type="text" name="posisiUser" id="posisiUser" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailUser">Email User</label>
                            <input type="text" name="emailUser" id="emailUser" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordUser">Password User</label>
                            <input type="text" name="passwordUser" id="passwordUser" class="form-control" required>
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
    <?php foreach ($daftar_user as $user) : ?>
        <div class="modal fade" id="editModal<?= $user->idUser; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('user/ubah/' . $user->idUser) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="namaUser">Nama User</label>
                                <input type="text" name="namaUser" id="namaUser" class="form-control" value="<?= $user->namaUser; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="posisiUser">Posisi User</label>
                                <input type="text" name="posisiUser" id="posisiUser" class="form-control" value="<?= $user->posisiUser; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailUser">Email User</label>
                                <input type="text" name="emailUser" id="emailUser" class="form-control" value="<?= $user->emailUser; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordUser">Password User</label>
                                <input type="text" name="passwordUser" id="passwordUser" class="form-control" value="<?= $user->passwordUser; ?>" required>
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
    <?php foreach ($daftar_user as $user) : ?>
        <div class="modal fade" id="hapusModal<?= $user->idUser; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('user/hapus/' . $user->idUser) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <p>Yakin Data User : <?= $user->namaUser ?>, Akan dihapus?</p>
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