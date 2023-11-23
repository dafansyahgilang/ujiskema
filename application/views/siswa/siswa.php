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
		<a class="navbar-brand" href="">Home</a>
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

  <div class="container">
  <a href="<?= base_url('Siswa/tambah') ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-plus"></i> Tambah Data</a>
<div class="card mt-4 border-3 border-dark">
    <div class="card-body">
      <div class="row">
        
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Password</th>
                <th scope="col">NISN</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($tb_pemilih as $z) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $z['username'] ?></td>
                  <td><?= $z['nama'] ?></td>
                  <td><?= $z['password'] ?></td>
                  <td><?= $z['NISN'] ?></td>
                  <td><?= $z['alamat'] ?></td>
                  <td>
                    <a href="<?= base_url('siswa/edit/') ?><?= $z['id_pemilih'] ?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('siswa/hapus/') ?><?= $z['id_pemilih'] ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        
      </div>
      </div>
    </div>
    <a href="<?= base_url('admin'); ?>" class="btn btn-secondary mt-3">Tabel User</a>
    <a href="<?= base_url('calon'); ?>" class="btn btn-secondary mt-3">Tabel Calon</a>
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