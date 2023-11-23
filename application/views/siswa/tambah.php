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
  <div class="row justify-content-center">
    <div class="card mt-3 col-lg-6">
        <h3>Tambah Pemilih</h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <?= form_error('username', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemilih</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <?= form_error('waketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password">
                <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="NISN" class="form-label">NISN</label>
                <input type="number" class="form-control" id="NISN" name="NISN">
                <?= form_error('NISN', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <?= form_error('alamat', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>