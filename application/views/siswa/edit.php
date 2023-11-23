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
  <div class="container">

<div class="row mt-3">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
            Edit Data
            </div>
            <div class="card-body">
                <form action="" method="post">
                    
                    <div class="form-group">
                        <label for="username">Ussername</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $tb_pemilih['username']; ?>">
                        <small class="form-text text-danger"><?= form_error('username'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" class="form-control" id="nama" name="nama" value="<?= $tb_pemilih['nama']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= $tb_pemilih['password']; ?>">
                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="NISN">NISN</label>
                        <input type="text" class="form-control" id="NISN" name="NISN" value="<?= $tb_pemilih['NISN']; ?>">
                        <small class="form-text text-danger"><?= form_error('NISN'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tb_pemilih['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-3" name="tambah">Ganti Data</button>
                </form>
            </div>

        </div>
    </div>

</div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>