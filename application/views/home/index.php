<?php $laporan = $this->db->query("SELECT * FROM laporan")->result();?>
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

      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>

        <?php 
        $no =1;
        foreach ($item as $item){ ?>
        <div class="carousel-inner">
          <?php if($no == 1){ ?>
          <div class="carousel-item active">
          <?php } else {?>
          <div class="carousel-item">
          <?php } ?>
            <center><img src="<?php echo base_url('assets/agenda/'.$item->foto)?>" class="img-fluid"></center>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $item->judul ?></h5>
              <p><?php echo $item->isi ?></p>
            </div>
          </div>
          <?php $no++;
           } ?>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
    </div>

        <!-- Pembatas -->
        <div class="row">
          <div class="col-lg">
            <center>
              <br><br>
                <h3>Daftar Laporan</h3>
                <hr>
            </center>
          </div>
        </div>

        <!--Laporan  -->
        <div class="row">
          <?php foreach ($laporan as $laporan) { ?>
          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo base_url('assets/laporan/'.$laporan->foto)?>" class="card-img-top img-fluid" style="height:204px">
              <div class="card-body">
                <p class="card-text"><?php echo $laporan->judul?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>