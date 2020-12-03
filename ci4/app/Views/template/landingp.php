<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Pelanggan Page</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <nav class="navbar navbar-expand-lg navbar-light bg-warning rounded border border-success">
                    <a class="navbar-brand" href="<?= base_url('/plg') ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item  mt-2 ml-5">Pelanggan : </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php if (!empty(session()->get('pelanggan'))) {
                                                                    echo session()->get('pelanggan');
                                                                } ?> <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item  mt-2 ml-5 mr-2">Email : </li>
                            <li class="nav-item  mt-2">
                                <?php if (!empty(session()->get('email'))) {
                                    echo session()->get('email');
                                } ?>
                            </li>

                            <li class="nav-item mt-2 ml-2 ">
                                <a href="<?= base_url('admin/loginp/logout') ?>">Logout</a>
                            </li>
                        </ul>
                        <ul class="ml-auto mr-4">
                            <li class="nav-item  mt-2 mr-auto d-flex justify-content-end">
                                <a href="<?= base_url('admin/keranjang/isi') ?>"><img class="" width="25px" src="<?= base_url('/icon/cart.svg') ?>"></a>
                        </ul>
                        </li>


                    </div>
                </nav>

            </div>
        </div>
        <div class=" row mt-2">

            <div class="col-12">
                <?= $this->renderSection('content2'); ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="text-center">Copyright - Arduino.smd@gmail.com</p>
            </div>
        </div>
    </div>

</body>

</html>