<?php
$jml_user = $this->db->query('SELECT COUNT(email) as jml FROM user where level=1')->row();
$zakat = $this->db->query('SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi FROM donasi where verifikasi=1')->row();
$jml = $this->db->query('SELECT COUNT(id_agenda) as jml_agenda FROM agenda')->row();
$jml_zakat = $zakat->jml_mal + $zakat->jml_profesi;
?>
<!-- <div class="content-wrapper"> -->
<section class="content">
  <div class="container-fluid">
    <div class="container">
      <!-- Salam -->
      <div class="row">
          <div class="col-md">
            <br>
            <div class="alert alert-warning"><marquee>Selamat Datang <?php echo $this->session->userdata('user') ?></marquee></div>
          </div>
      </div>

      <!-- Dewan Dakwah -->
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

      <!-- Info Sekilas -->
      <div class="row">
        <div class="container">
          <div class="col-md bg-white">
            <div class="row">
              <div class="col-md-4">
                <h3 class="text-center text-primary"><b><?php echo $jml_user->jml ?></b></h3>
                <h5 class="text-center text-grey" style="margin-top:-10px;"><b>DONATUR</b></h5>
              </div>
              <div class="col-md-4">
                <h3 class="text-center text-primary"><b><?php echo "Rp ".number_format($jml_zakat,2,',','.'); ?></b></h3>
                <h5 class="text-center text-grey" style="margin-top:-10px;"><b>JUMLAH ZAKAT</b></h5>
              </div>
              <div class="col-md-4">
                <h3 class="text-center text-primary"><b><?php echo $jml->jml_agenda ?></b></h3>
                <h5 class="text-center text-grey" style="margin-top:-10px;"><b>AGENDA DONASI</b></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>