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
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
		<div class="container">
    <a class="navbar-brand" href="#">KPO</a>
    </div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('log/logout')?>">Logout <span class="sr-only"></span></a>
				</li>
			</ul>
		</div>
   
	</nav>
    <div class="container">

        <div class="card-body">
            <div class="card">
                <div class="card-header">
                   <h5>Selamat datang : <?= $tb_pemilih['username']; ?></h5>
                </div>
                <div class="card-body">
                    <h4>Selamat Datang Di aplikasi Pemilihan Ketos Dan Waketos</h4>

                </div>
            </div>
            
          

            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($tb_kandidat as $k) : ?>
                    <div class="col-sm-4">
                        <div class="card mt-3">
                            <div class="card-header">
                                Kandidat <?= $i; ?>
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('asset/img/'); ?><?= $k['image']; ?>" class="card-img-top" alt="...">
                                <div class="d-flex justify-content-around mt-2">
                                    <h4 class="card-title"><?= $k['nama_ketos']; ?></h4>
                                    <h4><?= $k['nama_waketos']; ?></h4>
                                </div>
                                <div class="d-flex justify-content-between">
                            
                                        <a href="<?= base_url('kandidat/pilih/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-primary">Pilih Kandidat ini</a>
                                        <a href="<?= base_url('kandidat/detail/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-success">Detail Kandidat</a>

                                  

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
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