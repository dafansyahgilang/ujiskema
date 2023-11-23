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
    <div class="card-body">
      
   
   
    
      <div class="row">
        <div class="card">
          <table class="table table-hover">
            <thead>
            <tr>
        <th> <p><?= $data1;?></p></th>
        <th> <p><?= $data2;?></p></th>
        <th><p><?= $data3;?></p></th>
        <th></th>
        <th></th>
      </tr>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Kandidat</th>
                <th scope="col">Nama Pemilih</th>
                <th scope="col">Jam</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($hasil as $h) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $h['nama_ketos'] ?></td>
                  <td><?= $h['nama'] ?></td>
                  <td><?= $h['tanggal_jam'] ?></td>
                  <td>
                    <a href="<?= base_url('hasil/detail/') ?><?= $h['id_hasil'] ?>" class="btn btn-warning">Detail</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          
        </div>
      </div>
      <a href="<?= base_url('calon'); ?>" class="btn btn-secondary mt-3">Calon</a>
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