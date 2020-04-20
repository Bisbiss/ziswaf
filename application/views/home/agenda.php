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
                        <h3 class="card-title text-center"><?php echo $data->judul ?></h3>
                    </div>

                    <div class="card-body">
                        <center>
                        <img src="<?php echo base_url('assets/agenda/'.$data->foto) ?>" class="img-fluid"> <br>
                        <button class="btn btn-info"><a href="#" class="text-light" data-target="#donasi" data-toggle='modal'>Donasi Sekarang</a>
                        </button>
                        </center>
                        <hr>
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
                        <h5 class="text-center">Donasi</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md">
                                <p class="text-center">Silahkan lakukan pembayaran dengan cara kirimkan uang berjumlah <b> sesuai donasi yang akan anda berikan ke Kode Bank BNI Syariah (427)
                                    0868359086 atas nama Bisri Mustofa.</b> <br>
                                </p>
                                <h5 class="text-center"><b>Untuk donasi berupa barang, silahkan hubungi ke WA = +6285155318891 atau klik <a href="https://api.whatsapp.com/send?phone=6285155318891&text=Assalamualikum">Disini</a></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->

    </div>
</section>