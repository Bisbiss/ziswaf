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
                        <h3 class="card-title"><?php echo $data->judul ?></h3>
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
    </div>
</section>