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

      <!-- Grafik -->
      <div class="row">
        <div class="col-md">
          <br>
          <div class="card">
            <div class="card-header no-border">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Sales</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">$18,230.00</span>
                  <span>Sales Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fa fa-arrow-up"></i> 33.1%
                  </span>
                  <span class="text-muted">Since last month</span>
                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="200"></canvas>
              </div>

              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fa fa-square text-primary"></i> This year
                </span>

                <span>
                  <i class="fa fa-square text-gray"></i> Last year
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  var salesChart  = new Chart($salesChart, {
    type   : 'bar',
    data   : {
      labels  : ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data           : [1000, 2000, 3000, 2500, 2700, 2500, 3000]
        },
        {
          backgroundColor: '#ced4da',
          borderColor    : '#ced4da',
          data           : [700, 1700, 2700, 2000, 1800, 1500, 2000]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value, index, values) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }
              return '$' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })

  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type                : 'line',
        data                : [100, 120, 170, 167, 180, 177, 160],
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : [60, 80, 70, 67, 80, 77, 100],
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
})
</script>