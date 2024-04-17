<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERPUS RPL| Register</title>
  <link rel="icon" type="images/x-icon" href="https://w7.pngwing.com/pngs/696/133/png-transparent-computer-icons-e-book-book-angle-rectangle-stack.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/css/adminlte.min.css'); ?>">
</head>
<body style="background-image: url(https://i.pinimg.com/564x/f0/41/b0/f041b0b1ef80ccd4c4515165a23d9e85.jpg); background-repeat: no-repeat; background-size: cover;" class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body bg-white">
      <p class="login-box-msg">Masukan data dengan lengkap</p>

      <form action="<?= urlTo('/login/registers'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="Email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Alamat" placeholder="Alamat" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="Password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="PasswordConfirm" class="form-control" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-0">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="<?= urlTo('/login'); ?>" class="text-dark">Sudah punya akun ?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- sweetalert2 -->
<script src="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- jQuery -->
<script src="<?= urlTo('/public/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= urlTo('/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= urlTo('/public/adminlte/js/adminlte.min.js'); ?>"></script>
<?php if (isset($_COOKIE['alert'])): ?>
  <?php $data = unserialize($_COOKIE['alert']); ?>
  <script>
    Swal.fire({
      title: "<?= $data[1]; ?>",
      icon: "<?= $data[0]; ?>",
      showConfirmButton: false,
      timer:2000
    });
  </script>
<?php endif ?>
</body>
</html>
