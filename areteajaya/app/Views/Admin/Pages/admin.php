<?= $this->extend('admin/layouts/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->password_hash; ?></td>
                            <td width="15%" class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info btn-sm me-1">detail</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $user->userid; ?>">Hapus
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
<!-- Delete Modal -->
<?php foreach ($users as $user) : ?>
    <div class=" modal fade" id="hapusModal<?= $user->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('customer/hapus/' . $user->userid); ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <p>Yakin data user <?= $user->username; ?> akan dihapus?</p>
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
<?= $this->endSection(); ?>