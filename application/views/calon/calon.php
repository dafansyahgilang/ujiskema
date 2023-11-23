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
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url('auth/logout')?>">Logout <span class="sr-only"></span></a>
				</li>
			</ul>
		</div>
		</div>
	</nav>


 <div class="container">
 <div class="card mt-3">
  <div class="card-body">
  SELAMAT DATANG DI PEMILIHAN KETUA DAN WAKIL KETUA OSIS SMKN 1 BONDOWOSO 
  </div>
</div>
 </div>

<div class="card mt-3">

  <div class="container">
  <a href="<?= base_url('calon/tambah'); ?>" class="btn btn-primary mt-4">Tambah</a>
  </div>
  <div class="container">
    <div class="card-body">
      <div class="card">  
      
        <div class="card-body">
          <div class="row">
            <div class="card">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Ketos</th>
                    <th scope="col">Waketos</th>
                    <th scope="col">Image</th>
                    <th scope="col">Visi</th>
                    <th scope="col">Misi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($tb_kandidat as $k) : ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $k['nama_ketos'] ?></td>
                      <td><?= $k['nama_waketos'] ?></td>
                      <td><img src="<?= base_url('asset/img/')?><?=$k['image']?>" style="width: 50px;"></td>
                      <td><?= $k['visi'] ?></td>
                      <td><?= $k['misi'] ?></td>
                      <td>
                        <a href="<?= base_url('calon/edit/') ?><?= $k['id_kandidat'] ?>" class="btn btn-success">Edit</a>
                        <a href="<?= base_url('calon/hapus/') ?><?= $k['id_kandidat'] ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="d-flex justify-content-between">
          <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary mt-3">Tabel Pemilih</a>
            <a href="<?= base_url('hasil'); ?>" class="btn btn-secondary mt-3">Tabel Hasil</a>
            <a href="<?= base_url('kandidat'); ?>" class="btn btn-secondary mt-3">Tabel Kandidat</a>


          </div>
        </div>
      </div>
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








