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
                    $jumlah = $data->zakat_mal + $data->zakat_profesi + $data->infak+$data->sedekah + $data->wakaf;
                    ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <p class="text-center">Silahkan lakukan pembayaran dengan cara kirimkan uang berjumlah <b> <?php echo $jumlah; ?> rupiah ke Kode Bank BNI Syariah (427)
                                    0868359086 atas nama Bisri Mustofa.</b> <br>
                                </p>
                                <h5 class="text-center"><b>Untuk konfirmasi silahkan kirim bukti transfer ke WA = +6285155318891 atau klik <a href="https://api.whatsapp.com/send?phone=6285155318891&text=Konfirmasi pembayaran atas nama <?php echo $data->nama ?> sejumlah <?php echo $jumlah ?>">Disini</a></b></h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

