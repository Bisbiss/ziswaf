<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="hold-transition login-page" id="login">

  <?php
    if (isset($_GET['pesan'])){
     $pesan = $_GET['pesan'];
        if($pesan=='false') {
        ?>
        <br>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <marquee><strong>Username atau Password Salah</strong></marquee>
        </div>
      <?php }
        else if ($pesan=='dibuat') {
        ?>
          <br>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
              <marquee><strong>Akun berhasil dibuat</strong></marquee>
          </div>
      <?php }else{

      }
    }
  ?>
  <!-- <div class="col-md-4"> -->
    <!-- general form elements -->
    <div class="card login-box">
      <div class="card-header">
        <img src="<?php echo base_url('assets/dist/img/logo.png') ?>" class="img-fluid">
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="<?php echo base_url('welcome/prosesLogin'); ?>" method="post">
        <div class="card-body"> 
          <div class="form-group">
            <label for="inputUsername">Email</label>
            <input type="text" class="form-control" name="email" id="inputUsername" placeholder="contoh@email.com" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" required id="exampleInputPassword1" placeholder="Password">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <hr>
          <a href="<?php echo base_url('welcome/daftar'); ?>" class="btn btn-danger">Daftar</a>
          <button type="submit" class="btn btn-info" style="float: right;">Login</button>
          <button type="reset" class="btn" style="float: right;">Reset</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  <!-- </div> -->
  <!--/.col (left) -->
</body>