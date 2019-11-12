  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
              <br>
                <div class="alert alert-info">Selamat Datang <?php echo $this->session->userdata('user') ?></div>
            </div>
        </div>

        <div class="row">
          <div class="col-md">
            <div class="jumbotron" style="background-image: url(<?php echo base_url('assets/dist/img/back.jpg')?>)">
              <h1 class="display-4 text-white">Selamat Datang</h1>
              <hr class="my-4">
              <p class="text-white">E-ZISWAF aplikasi untuk zakat infak sedekah dan wakaf online berbasis web.</p>
              <a class="btn btn-primary btn-lg" href="bantuan" role="button">Learn more</a>
            </div>
          </div>
        </div>

        <!-- Pembatas -->
        <div class="row">
          <div class="col-lg">
            <center>
              <br><br>
                <h3>Daftar Agenda</h3>
                <hr>
            </center>
          </div>
        </div>

        <!--Laporan  -->
        <div class="row">
          <?php foreach ($item as $item) { ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo base_url('assets/agenda/'.$item->foto)?>" class="card-img-top img-fluid" style="height:204px">
              <div class="card-body">
                <a href="<?php echo base_url('Home/agenda/'.$item->id_agenda)?>" class="card-text"><?php echo $item->judul?></a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>