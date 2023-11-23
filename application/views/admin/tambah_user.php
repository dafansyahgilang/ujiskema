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
  <div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Silahkan isi Data yang mau Ditambah
                </div>
                <div class="card-body ">
                    <form action="" method="post">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="100">
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="100">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" maxlength="100">
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3" name="tambah">Tambah Data</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>



