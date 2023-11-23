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
        <div>Detail Kandidat <?= $tb_kandidat['id_kandidat'] ?></div>
    </div>
    <div class="container">

        <div class="card-body">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('asset/img/'); ?><?= $tb_kandidat['image']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama Ketos : <?= $tb_kandidat['nama_ketos'] ?></h5>
                            <h5 class="card-title">Nama Waketos : <?= $tb_kandidat['nama_waketos'] ?></h5>
                            <p class="card-text">Visi : <?= $tb_kandidat['visi'] ?></p>
                            <p class="card-text">Misi : <?= $tb_kandidat['misi'] ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('kandidat'); ?>" class="btn btn-secondary">Kembali</a>
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

