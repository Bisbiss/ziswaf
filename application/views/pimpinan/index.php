<?php
$jml_user = $this->db->query('SELECT COUNT(email) as jml FROM user where level=1')->row();
$jml = $this->db->query('SELECT COUNT(id_agenda) as jml_agenda FROM agenda')->row();
$dana = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1")->row(); 
$jml_zakat = $dana->jml_mal + $dana->jml_profesi + $dana->jml_infak + $dana->jml_sedekah + $dana->jml_wakaf;
?>
<!-- <div class="content-wrapper"> -->
<section class="content">
  <div class="container-fluid">
    <div class="container">
      <!-- Salam -->
      <div class="row">
          <div class="col-md">
            <br>
            <div class="alert alert-warning"><marquee> <span class="text-white">Selamat Datang <?php echo $this->session->userdata('user') ?> </span></marquee></div>
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
                <h5 class="text-center text-grey" style="margin-top:-10px;"><b>JUMLAH ZISWAF</b></h5>
              </div>
              <div class="col-md-4">
                <h3 class="text-center text-primary"><b><?php echo $jml->jml_agenda ?></b></h3>
                <h5 class="text-center text-grey" style="margin-top:-10px;"><b>AGENDA DONASI</b></h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Grafik -->
      <div class="row">
        <div class="col-md">
          <br>
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Laporan Keuangan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul','Agu','Sep','Okt','Nov','Des'],
        datasets: [
          {
            label: 'Ziswaf',
            backgroundColor: 'rgb(4, 122, 4)',
            borderColor: 'rgb(4, 122, 4)',
            data: [
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-01-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-02-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-03-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-04-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-05-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-06-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-07-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-08-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-09-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-10-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-11-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1 && waktu LIKE '%-12-%'")->row();
                echo $data->jml_mal+$data->jml_profesi+$data->jml_infak+$data->jml_sedekah+$data->jml_wakaf;
              ?>

            ]
        },
        {
            label: 'Pengeluaran',
            backgroundColor: 'rgb(48, 48, 48)',
            borderColor: 'rgb(48, 48, 48)',
            data: [
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-01-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-02-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-03-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-04-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-05-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-06-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-07-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-08-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-09-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-10-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-11-%'")->row();
                echo $data->jml;
              ?>,
              <?php
                $data = $this->db->query("SELECT SUM(jumlah) AS jml FROM laporan WHERE waktu LIKE '%-12-%'")->row();
                echo $data->jml;
              ?>

            ]
        },
        ]
    },

    

    // Configuration options go here
    options: {}
});


</script>