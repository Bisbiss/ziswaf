  <section class="content">
    <div class="container-fluid">
      <!-- <div class="container"> -->
        <!-- Pesan Selamat Datang -->
        <div class="row">
          <div class="container">
            <div class="col-md">
              <br>
                <div class="alert alert-info"><marquee>Selamat Datang <?php echo $this->session->userdata('user') ?></marquee></div>
            </div>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-md">
            <div class="jumbotron" style="background-image: url(<?php echo base_url('assets/dist/img/back.jpg')?>)">
              <h1 class="display-4 text-white">Selamat Datang</h1>
              <hr class="my-4">
              <p class="text-white">E-ZISWAF aplikasi untuk zakat infak sedekah dan wakaf online berbasis web.</p>
              <a class="btn btn-primary btn-lg" href="home/bantuan" role="button">Learn more</a>
            </div>
          </div>
        </div> -->

        <!-- Dewan Dakwah -->
        <div class="container">
          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo base_url('assets/dist/img/Dewan dawah.jpg') ?>">
                  </div>
                  <div class="col-md-6">
                    <br>
                    <h3 class="text-center">Dewan Da'wah Islamiyah Indonesia</h3>
                    <hr>
                    <p class="text-center"><span>Jl. Sutan Jamil No.28, Gedong Meneng, Rajabasa </span><br>
                    <span> Kota Bandar Lampung </span><br>
                    <span class="text-muted"> Lampung 35145
                      Telp. (0721) 772893</span></p>
                    <center>
                    <a href="https://dewandakwahlampung.com/" class="text-success"><i class="fa fa-chrome"></i> Website</a>
                    &nbsp;|&nbsp;<a href="https://www.youtube.com/channel/UCqmEVJh4_suaTfsW9xkt8UA" class="text-danger"><i class="fa fa-youtube-play"> Channel Youtube</i></a>
                    &nbsp;|&nbsp;<a href="https://www.instagram.com/dewandakwah_lampung" style="color:#605ca8"><i class="fa fa-instagram"> Instagram</i></a>
                    &nbsp;|&nbsp;<a href="https://www.facebook.com/dewandakwahislamiyahindonesia.lampung" class="text-primary"><i class="fa fa-facebook"></i> Facebook</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pembatas -->
        <div class="row">
          <div class="col-lg">
            <center>
                <h3> <b>Daftar Agenda Donasi</b></h3>
                <hr>
            </center>
          </div>
        </div>

        <!--Agenda  -->
        <div class="container">
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
      <!-- </div> -->
    </div>
  </section>