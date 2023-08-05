<!-- add_customer.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Add Customer</title>
</head>

<body>
    <h2>Add Customer</h2>
    <form action="<?= base_url('list-customer/add') ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="namaCustomer">Nama Customer</label>
            <input type="text" name="namaCustomer" id="namaCustomer" required>
        </div>
        <div>
            <label for="noCustomer">No Customer</label>
            <input type="text" name="noCustomer" id="noCustomer" required>
        </div>
        <div>
            <label for="emailCustomer">Email Customer</label>
            <input type="email" name="emailCustomer" id="emailCustomer" required>
        </div>
        <div>
            <label for="alamatCustomer">Alamat Customer</label>
            <textarea name="alamatCustomer" id="alamatCustomer" rows="4" required></textarea>
        </div>
        <div>
            <button type="submit">Add Customer</button>
        </div>
    </form>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
    <label for="exampleColorInput" class="form-label">Color picker</label>
    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
</body>

</html>