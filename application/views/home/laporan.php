<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
                <br>
                <!-- PRODUCT LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Penyaluran Dana</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="products-list product-list-in-card">
                        <?php foreach ($laporan as $laporan){ ?>
                            <li class="item">
                                <div class="product-img">
                                <img src="<?php echo base_url('assets/laporan/'.$laporan->foto)?>" alt="Product Image" class="img-size-100">
                                </div>
                                <div class="product-info">
                                <a href="<?php echo base_url('Home/laporan_detail/'.$laporan->id_laporan)?>"><span class="product-title"><?php echo $laporan->judul ?> </span></a>
                                    <span class="badge badge-warning float-right"><?php echo $laporan->jumlah ?></span>
                                <span class="product-description">
                                    <span><?php echo $laporan->isi ?></span>
                                </span>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>