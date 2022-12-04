<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body>
    <section class="d-flex align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card shadow">
                        <div class="card-header">
                            Form Register
                        </div>
                        <div class="card-body">
                            <?php 
				// if($this->session->flashdata('error') !='')
				// {
				// 	echo '<div class="alert alert-danger" role="alert">';
				// 	echo $this->session->flashdata('error');
				// 	echo '</div>';
				// }
				?>
                            <form method="post" action="<?php echo base_url('register/proses'); ?>">
                                <div class="form-group mb-3">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Nama Lengkap">
                                    <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Enter Username">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm w-100 mb-3">Register</button>
                                Have already an account? <a href="<?= base_url('login') ?>">Login here</a>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
</script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js'
    integrity='sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V' crossorigin='anonymous'>
</script>

</html>