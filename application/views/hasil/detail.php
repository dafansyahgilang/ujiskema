<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="card bg-light mt-3">
    <div class="card-header">
        <div>Detail Pemilihan <?= $hasil['id_hasil'] ?></div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="card mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                Detail Kandidat
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('asset/img/'); ?><?= $hasil['image']; ?>" class="img-fluid rounded-start" alt="...">
                                <h5 class="card-title">Nama Ketos : <?= $hasil['nama_ketos'] ?></h5>
                                <h5 class="card-title">Nama Waketos : <?= $hasil['nama_waketos'] ?></h5>
                                <p class="card-text">Visi : <?= $hasil['visi'] ?></p>
                                <p class="card-text">Misi : <?= $hasil['misi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                        <div class="card-header">
                            Detail Pemilih
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nama Pemilih : <?= $hasil['nama'] ?></h5>
                            <p class="card-text">NISN : <?= $hasil['NISN'] ?></p>
                            <p class="card-text">Alamat : <?= $hasil['alamat'] ?></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('hasil'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>