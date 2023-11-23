<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <title>Admin</title>
</head>

<body style="background-color: gainsboro;">

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:mediumslateblue;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pemilih Kewatos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('auth/logout') ?>">Logout <span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card mt-3">
      <div class="card-body">
        <h4 align="center">SELAMAT DATANG DI PEMILIHAN KETUA DAN WAKIL KETUA OSIS SMKN 1 BONDOWOSO</h4>
      </div>
    </div>

    <div class="card-responsive mt-4 border-3 border-dark ">
      <div class="card-body">
      </div>
      <div class="container">
        <div class="card mt-4 bordered-3 border-dark">

          <div class="card-body">
              <h4 align="center">Data Admin</h4>
            <a href="<?= base_url('Admin/tambah_user') ?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="row">
              <table class="table mt-4 table-hover table-bordered">

                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php $no = 1;
                foreach ($user as $ssw) : ?>
                  <tbody>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $ssw['username'] ?></td>
                      <td><?= $ssw['email'] ?></td>
                      <td><?= $ssw['password'] ?></td>
                      <td>
                        <a href="<?= base_url('admin/edit/') ?><?= $ssw['id_user'];  ?>" class="btn btn-success btn-sm">Edit<i class="fas fa-trash"></i></a>
                        <a href="<?= base_url('Admin/hapus/') ?><?= $ssw['id_user'];  ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">hapus<i class="fas fa-trash"></i></a>
                      </td>
                    </tr>

                  </tbody>
                <?php endforeach ?>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
    <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary mt-3">Tabel Pemilih</a>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>