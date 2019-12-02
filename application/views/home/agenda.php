<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
            <br>
            <?php foreach ($item as $data ){ ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="float:left"><?php echo $data->judul ?></h3>
                        <h3 class="card-title" style="float:right">
                        <a href="#" data-target="#donasi" data-toggle='modal'>Donasi Sekarang</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <center>
                        <img src="<?php echo base_url('assets/agenda/'.$data->foto) ?>">
                        </center>
                        <p><?php echo $data->isi ?></p>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="donasi"  role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="card-body">
                        <h5 class="text-center">Pilih Metode Pembayaran :</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 outer">
                                <div class="callout callout-info">
                                    <center>
                                    <h4>GOPAY</h4>
                                    <img src="<?php echo base_url("assets/dist/img/gopay.jpeg")?>" height="250px" class="bayar">
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4 outer">
                                <div class="callout callout bayar">
                                    <center>
                                    <h4>OVO</h4>
                                    <img src="<?php echo base_url("assets/dist/img/ovo.jpeg")?>" height="250px" class="bayar">
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4 outer">
                                <div class="callout callout-danger bayar">
                                    <center>
                                    <h4>Transfer BANK</h4>
                                    <img src="<?php echo base_url("assets/dist/img/bank_transfer.png")?>" class="bayar" height="250px">
                                    </center>
                                </div>
                            </div>
                            <div class="col-md">
                                <p class="text-center">Silahkan pilih metode pembayaran yang ada, untuk metode pembayaran Gopay dan OVO silahkan Scan Qrcode yang
                                    disediakan dan masukan nominal transfer <b> sesuai donasi yang akan anda berikan Atas Nama Bisri Mustofa </b>.
                                    Untuk Metode pembayaran Bank Transfer silahkan kirimkan uang berjumlah <b> sesuai donasi yang akan anda berikan ke Kode Bank BNI Syariah (427)
                                    0868359086 atas nama Bisri Mustofa.</b> <br>
                                </p>
                                <h5 class="text-center"><b>Untuk donasi berupa barang, silahkan hubungi ke WA = +6285840267616 atau klik <a href="https://api.whatsapp.com/send?phone=6285840267616&text=Assalamualikum">Disini</a></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->

    </div>
</section>