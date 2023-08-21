<?= $this->extend('admin/layouts/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>"">Dashboard</a></li>
                <li class=" breadcrumb-item active">Pesanan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Pemesanan
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
                                <th>Invoice</th>
                                <th>Nama Customer</th>
                                <th>Nama Produk</th>
                                <th>Unit Produk</th>
                                <th>Qty Produk</th>
                                <th>Harga Produk</th>
                                <th>Total Harga Produk</th>
                                <th>Subtotal Harga</th>
                                <th>Tanggal Input</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($daftar_pemesanan as $pemesanan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pemesanan->invoicePemesanan; ?></td>
                                    <td><?= $pemesanan->namaCustomer; ?></td>
                                    <td><?= $pemesanan->namaProduk; ?></td>
                                    <td><?= $pemesanan->unitProduk; ?></td>
                                    <td><?= $pemesanan->qtyProduk; ?></td>
                                    <td><?= $pemesanan->hargaProduk; ?></td>
                                    <td><?= $pemesanan->totalHargaProduk; ?></td>
                                    <td><?= $pemesanan->totalHargaPemesanan; ?></td>
                                    <td><?= $pemesanan->tanggalPemesanan; ?></td>
                                    <td width="15%" class="text-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="<?= base_url('pemesanan/edit/'); ?>" class="btn btn-success btn-sm me-1">
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
    <!-- Modal Tambah-->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="myForm" action="<?= base_url('pemesanan/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="invoicePemesanan">Invoice</label>
                            <input id="invoicePemesanan" name="invoicePemesanan" class="form-control" value="<?= $invoicePemesanan ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPemesanan">Pilih Tanggal Pemesanan</label>
                            <input type="date" name="tanggalPemesanan" id="tanggalPemesanan" class="form-control" required>
                        </div>

                        <td>
                            <div class="mb-3">
                                <label for="idCustomer">Nama Customer</label>
                                <select id="idCustomer" name="idCustomer" class="form-control" required>
                                    <option value="">--Pilih Customer--</option>
                                    <?php foreach ($daftar_customer as $customer) : ?>
                                        <option value="<?= $customer->idCustomer; ?>"><?= $customer->namaCustomer; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </td>
                        <div class="mb-3">
                            <label for="idProduk">Pilih Produk</label>
                            <select id="idProduk" name="idProduk" class="form-control">
                                <option value="">-- Pilih Nama Produk --</option>
                                <?php foreach ($daftar_produk as $produk) : ?>
                                    <option value="<?= $produk->idProduk; ?>" data-harga="<?= $produk->hargaProduk; ?>" data-unit="<?= $produk->unitProduk; ?>"><?= $produk->namaProduk; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="hargaProduk">Harga Produk</label>
                            <input type="number" id="hargaProduk" name="hargaProduk" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="unitProduk">Unit Produk</label>
                            <input type="text" id="unitProduk" name="unitProduk" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="qtyProduk">Qty</label>
                            <input type="number" name="qtyProduk" id="qtyProduk" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="totalHargaProduk">Total Harga</label>
                            <input type="number" name="totalHargaProduk" id="totalHargaProduk" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary btn-sm" id="konfirmasiButton" onclick="submitForm()">Konfirmasi</button>
                </div>
                </form>
                <!-- Move the hiddenInputs div here -->

            </div>
        </div>
    </div>

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
                            <p>Yakin pesanan dari <?= $pemesanan->namaCustomer; ?> akan dihapus?</p>
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
    <script>
        // Mengambil elemen dropdown, input harga/unit, dan input qty
        const idProdukDropdown = document.getElementById('idProduk');
        const hargaProdukInput = document.getElementById('hargaProduk');
        const unitProdukInput = document.getElementById('unitProduk');
        const qtyInput = document.getElementById('qtyProduk');
        const totalHargaInput = document.getElementById('totalHargaProduk');

        // Event listener saat pilihan dropdown berubah
        idProdukDropdown.addEventListener('change', function() {
            const selectedOption = idProdukDropdown.options[idProdukDropdown.selectedIndex];
            const selectedHarga = selectedOption.getAttribute('data-harga');
            const selectedUnit = selectedOption.getAttribute('data-unit');

            // Mengisi input harga dan unit sesuai dengan pilihan
            hargaProdukInput.value = selectedHarga;
            unitProdukInput.value = selectedUnit;

            // Menghitung total harga awal berdasarkan harga per unit dan qty
            const qty = parseFloat(qtyInput.value);
            const hargaProduk = parseFloat(selectedHarga);
            const totalHarga = qty * hargaProduk;

            // Mengisi input total harga dengan hasil perhitungan awal
            totalHargaInput.value = totalHarga.toFixed(2);
        });

        // Event listener saat nilai qty berubah
        qtyInput.addEventListener('input', function() {
            const qty = parseFloat(qtyInput.value);
            const hargaProduk = parseFloat(hargaProdukInput.value);
            const totalHarga = qty * hargaProduk; // Menghitung total harga berdasarkan qty dan harga per unit
            totalHargaInput.value = totalHarga.toFixed(2); // Menampilkan total harga dengan 2 desimal
        });
    </script>
</div>
<?= $this->endSection() ?>