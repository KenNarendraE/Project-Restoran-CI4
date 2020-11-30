
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


foreach ($menu as $key => $value) {
    if (is_numeric($key)) {
        echo '<br>';
        echo '<tr>';
        echo '<td>' . $value['menu'] . '</td>';
        echo '<td>' . $value['harga'] . '</td>';
        echo '<td><a href="?f=home&m=beli&tambah=' . $value['idmenu'] . '">[+]</a> &nbsp &nbsp' . $value['jumlah'] . '&nbsp &nbsp <a href="?f=home&m=beli&kurang=' . $value['idmenu'] . '"> [-]</a></td>';
        echo '<td>' . $value['harga'] * $value['jumlah'] . '</td>';
        echo '<td><a href="?f=home&m=beli&hapus=' . $value['idmenu'] . '">Hapus</a></td>';
        echo '</tr>';
        $total = $total + ($value['jumlah'] * $value['harga']);
    }
}
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

<?= $this->endSection() ?>