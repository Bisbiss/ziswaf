<!-- <div class="content-wrapper"> -->
<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
              <br>
                <div class="alert alert-primary">Selamat Datang <?php echo $this->session->userdata('user') ?></div>
            </div>
        </div>
        <div class="row">
          <?php
          $donasi = $this->db->query("select * from donasi")->num_rows();
          ?>
          <div class="col-lg-3 col-6">
            <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?php echo $donasi ?></h3>

                  <p>Kelola Donasi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="<?php echo base_url('admin/donasi')?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>

          <?php
          $agenda = $this->db->query("select * from berita")->num_rows();
          ?>
          <div class="col-lg-3 col-6">
            <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $agenda ?></h3>

                  <p>Kelola Agenda</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo base_url('admin/agenda')?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
          <?php
          $laporan = $this->db->query("select * from laporan")->num_rows();
          ?>
          <div class="col-lg-3 col-6">
            <!-- small card -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $laporan ?></h3>

                  <p>Kelola Laporan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-folder-open"></i>
                </div>
                <a href="<?php echo base_url('admin/laporan')?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>

          <?php
          $akun = $this->db->query("select * from user")->num_rows();
          ?>
          <div class="col-lg-3 col-6">
            <!-- small card -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $akun ?></h3>

                  <p>Kelola Akun</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url('admin/akun')?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>