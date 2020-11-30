<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mt-5 col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <div class="col">
                            <?php
                            if (!empty($info)) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $info;
                                echo '</div>';
                            }
                            ?>
                            <h5 class="card-title text-center">Login Pelanggan</h5>
                            <form action="<?= base_url('/admin/loginp') ?>" method="post" class="form-signin">
                                <div class="form-label-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>


                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                <hr class="my-4">

                                <div class="form-group">
                                    <a href="<?= base_url("admin/userp/create") ?>">Tidak Punya Akun?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>