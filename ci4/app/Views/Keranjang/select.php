<?= $this->extend('template/landingp') ?>

<?= $this->section('content2') ?>

<?php
global $db;

$total = 0;

global $total;

echo '<table class="table table-bordered w-70">

    <tr>
        <th>Menu</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Hapus</th>
    </tr>     
';

?>

<?php
foreach ($menu as $key => $value) {
    if (is_numeric($key)) { ?>
        <br>
        <tr>
            <td><?= $value['menu'] ?> </td>
            <td><?= $value['harga'] ?></td>
            <td>
                <div class="product_count d-flex">
                    <a class="mr-2" href=" <?= base_url('keranjang/tambah/' . $value['idmenu']) ?>">[+]</a>
                    <h5 class="mt-1">
                        <?= $value['jumlah'] ?>
                    </h5> <a class="ml-2" href="<?= base_url('keranjang/kurang/' . $value['idmenu']) ?>">[-]</a>
                </div>
            </td>
            <td><?= $value['harga'] * $value['jumlah'] ?></td>
            <td>
                <a href="<?= base_url('/keranjang/delete/' . $value['idmenu']) ?>">Hapus</a>
            </td>
        </tr>

<?php
        $total = $total + ($value['jumlah'] * $value['harga']);
    }
}

?>
<?php
//     echo '<tr>';
//     echo '<td>' . $r['menu'] . '</td>';
//     echo '<td>' . $r['harga'] . '</td>';
//     echo '<td><a href="?f=home&m=beli&tambah=' . $r['idmenu'] . '">[+]</a> &nbsp &nbsp' . $value . '&nbsp &nbsp <a href="?f=home&m=beli&kurang=' . $r['idmenu'] . '"> [-]</a></td>';
//     echo '<td>' . $r['harga'] * $value . '</td>';
//     echo '<td><a href="?f=home&m=beli&hapus=' . $r['idmenu'] . '">Hapus</a></td>';
//     echo '</tr>';
//     $total = $total + ($value * $r['harga']);
// 
?>
<?php if (!empty($total)) : ?>
    <form action="<?= base_url('admin/cekot') ?>" method="POST">
        <input type="hidden" name="total" value="<?= $total ?>">
        <button class="btn btn-primary" type="submit"> checkout <i class="fas fa-check-square"></i></button>
    </form>
<?php endif ?>

<?= $this->endSection() ?>