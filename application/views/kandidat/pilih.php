<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
  </head>
  <body>
  <div class="row justify-content-center">
    <div class="card mt-3 col-lg-6">
        <h3 class="mt-3"><span class="badge bg-secondary">From Edit Data</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="id_kandidat" class="form-label">Nama Kandidat</label>
                <select class="form-control" id="id_kandidat" name="id_kandidat">
                    <option value="<?= $tb_kandidat['id_kandidat']; ?>" ><?= $tb_kandidat['nama_ketos'] ?></option>
                </select>
                <?= form_error('id_kandidat', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="id_pemilih" class="form-label">Nama Pemilih</label>
                <select class="form-control" id="id_pemilih" name="id_pemilih">
                    <option value="<?= $tb_user['id_pemilih']; ?>" ><?= $tb_user['username'] ?></option>
                </select>
                <?= form_error('id_pemilih', '<small class="text-danger" >', '</small>') ?>
            </div>
            Apakah Data Diatas Udah Benar? <br><button type="submit" class="btn btn-primary">Benar</button>
            <a href="<?= base_url('kandidat'); ?>" class="btn btn-secondary ">Kandidat</a>
           
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