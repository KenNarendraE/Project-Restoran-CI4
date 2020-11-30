<?= $this->extend('template/landingp') ?>

<?= $this->section('content2') ?>

<?php
if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 4;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row">
    <div class="col">
        <h3 class="text-center"><?= $judul ?></h3>
    </div>
</div>

<div class="row mt-2 ml-1">
    <div class="col-4">
        <form action="<?= base_url('/admin/LandingPage/read') ?>" method="get">
            <?= view_cell('\App\Controllers\Admin\LandingPage::option') ?>
        </form>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <?php $no ?>
        <?php foreach ($menu as $key => $value) : ?>
            <div class="card" style="width: 15rem; float:left; margin:10px;">
                <img style="height:150px;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $value['menu'] ?></h5>
                    <p class="card-text"><?= number_format($value['harga']) ?></p>
                    <a class="btn btn-success" href="<?= base_url() ?>/admin/keranjang/isi/<?= $value['idmenu'] ?>" role="button">Beli</a>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</div>
<?= $pager->links('page', 'bootstrap') ?>
<?= $this->endSection(); ?>