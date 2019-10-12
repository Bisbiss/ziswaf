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

        <!--Galery Agenda  -->
        <div class="row">
          <div class="col-md">
            <center>
            <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <?php foreach ($agenda as $agenda){ $no_agenda = 0; ?>
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $no_agenda ?>" class="<?php if($no_agenda==0){echo "active";}?>"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item <?php if($no_agenda==0){ echo "active";}?>">
                    <img src="<?php echo base_url('assets/agenda/'.$agenda->foto)?>" class="d-block w-75 img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                      <h3><?php echo $agenda->judul; $no_agenda++; ?></h3>
                    </div>
                  </div>
                </div>
                <?php } ?>
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
            </center>
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