<?php 
if ($this->session->userdata('nama') == null) {
redirect('login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjam</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-primary" href="<?= base_url('perpus') ?>">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav  ">
                    <a class="btn btn-success me-4" aria-current="page" href="<?= base_url('perpus') ?>">Home</a>
                    <a class="btn btn-success me-4" href="<?= base_url('perpus/create') ?>">Pinjam Buku</a>
                    <a class="btn btn-danger" href="<?= base_url('login/logout') ?>">LogOut</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="d-flex justify-content-center align-items-center " style="height: 90vh;">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card shadow-lg ">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h4 class="fw-bold text-primary">Formulir Pinjam Buku</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-5">

                            <form action="<?= base_url('perpus/store') ?>" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label fw-bold">Nama
                                                Lengkap</label>
                                            <input type="text" class="form-control" required name="nama"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label fw-bold">Nik</label>
                                            <input type="number" name="nik" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label fw-bold">Nama Buku</label>
                                            <input type="text" name="nama_buku" required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label fw-bold">Kode Buku</label>
                                            <input type="number" required name="kode_buku" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12"><button type="submit" class="btn btn-primary">Submit</button></div>
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