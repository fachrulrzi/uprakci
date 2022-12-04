<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-primary" href="#">Perpustakaan</a>
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
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="card p-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Kode Buku</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Waktu Minjam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no= 1;
                          foreach ($peminjam as $p):
                          ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p->nama; ?></td>
                                <td><?= $p->nik; ?></td>
                                <td><?= $p->kode_buku; ?></td>
                                <td><?= $p->nama_buku; ?></td>
                                <td><?= $p->waktu_minjam; ?></td>
                                <td class="d-flex justify-content-evenly">
                                    <a href="<?= base_url('perpus/edit/'.$p->id) ?>"
                                        class="btn btn-sm btn-success">Edit</a>
                                    <a href="<?= base_url('perpus/destroy/'.$p->id) ?>"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>

                            <?php
                          endforeach;
                          ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
</script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js'
    integrity='sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V' crossorigin='anonymous'>
</script>

</html>