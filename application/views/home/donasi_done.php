<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="text-center">Pembayaran Donasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- Car Body -->
                    <?php
                    // var_dump($data);
                    $jumlah = $data->zakat_mal + $data->zakat_profesi + $data->infak +$data->sedekah + $data->wakaf;
                    ?>
                    <div class="card-body">
                        <h5 class="text-center">Pilih Metode Pembayaran :</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 outer">
                                <div class="callout callout-info">
                                    <center>
                                    <h4>GOPAY</h4>
                                    <img src="<?php echo base_url("assets/dist/img/gopay.jpeg")?>" class="img-fluid">
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-6 outer">
                                <div class="callout callout">
                                    <center>
                                    <h4>OVO</h4>
                                    <img src="<?php echo base_url("assets/dist/img/ovo.jpeg")?>" class="img-fluid">
                                    </center>
                                </div>
                            </div>
                            <div class="col-md">
                                <p class="text-center">Silahkan pilih metode pembayaran yang ada, untuk metode pembayaran Gopay dan OVO silahkan Scan Qrcode yang
                                    disediakan dan masukan nominal transfer <b> <?php echo $jumlah; ?> rupiah Atas Nama Dewan Dakwah Lampung </b>.
                                    Untuk Metode pembayaran Bank Transfer silahkan kirimkan uang berjumlah <b> <?php echo $jumlah; ?> rupiah ke Kode Bank BNI Syariah (427)
                                    0868359086 atas nama Bisri Mustofa.</b> <br>
                                </p>
                                <h5 class="text-center"><b>Untuk konfirmasi silahkan kirim bukti transfer ke WA = +6285840267616 atau klik <a href="https://api.whatsapp.com/send?phone=6285840267616&text=Konfirmasi pembayaran atas nama <?php echo $data->nama ?> sejumlah <?php echo $jumlah ?>">Disini</a></b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

