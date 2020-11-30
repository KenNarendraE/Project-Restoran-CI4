<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Buat Akun</title>
</head>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key . "=>" . $value;
            echo "<br>";
        }
        echo '</div>';
    }
    ?>
</div>

<div class="col-6 mt-5 mx-auto">
    <h3>Buat Akun</h3>
    <form action="<?= base_url('/Admin/UserP/insert') ?>" method="post">
        <div class="form-group">
            <label for="Keterangan">Nama Pelanggan</label>
            <input type="text" name="pelanggan" required class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Alamat</label>
            <input type="text" name="alamat" required class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">No Telpon</label>
            <input type="number" name="telp" required class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Email</label>
            <input type="email" name="email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="Keterangan">Password</label>
            <input type="password" name="password" required class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-danger">
        </div>
    </form>
</div>