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
        <h3 class="mt-3"><span class="badge bg-secondary">From Edit Data</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="nama_ketos" class="form-label">Nama Ketos</label>
                <input type="text" class="form-control" id="nama_ketos" name="nama_ketos" value="<?= $tb_kandidat['nama_ketos']; ?>">
                <?= form_error('ketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="nama_waketos" class="form-label">Nama Waketos</label>
                <input type="text" class="form-control" id="nama_waketos" name="nama_waketos" value="<?= $tb_kandidat['nama_waketos']; ?>">
                <?= form_error('waketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= $tb_kandidat['image']; ?>">
                <?= form_error('image', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi" value="<?= $tb_kandidat['visi']; ?>">
                <?= form_error('visi', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="misi" name="misi" value="<?= $tb_kandidat['misi']; ?>">
                <?= form_error('misi', '<small class="text-danger" >', '</small>') ?>
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


