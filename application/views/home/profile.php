<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
        <?php foreach($data as $data){ ?>
            <div class="col-md">
                <br>
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white"
                    style="background: url(<?php echo base_url('./assets/dist/img/photo1.png') ?>) center center;">
                    <h3 class="widget-user-username"><?php echo $data->username ?></h3>
                    <h5 class="widget-user-desc"><?php echo $data->email ?></h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="<?php echo base_url('./assets/dist/img/bisbis.jpeg') ?>" alt="User Avatar">
                </div>
                <div class="card-footer">
                <?php 
                $dana = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi FROM donasi WHERE email = '$data->email' && verifikasi=1")->row(); 
                $jml_zakat = $dana->jml_mal + $dana->jml_profesi;
                $donasi = $this->db->query("SELECT SUM(infak) AS jml_infak,SUM(sedekah) AS jml_sedekah,SUM(wakaf) AS jml_wakaf FROM donasi WHERE email = '$data->email' && verifikasi=1")->row(); 
                $jml_donasi = $donasi->jml_infak + $donasi->jml_sedekah;
                ?>
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                            <span class="description-text">TOTAL ZAKAT</span>
                            <h5 class="description-header"><?php echo "Rp ".number_format($jml_zakat,2,',','.'); ?></h5>
                            <br>
                            <a href="">Riwayat Zakat</a>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                            <span class="description-text">TOTAL DONASI</span> 
                            <h5 class="description-header"><?php echo "Rp ".number_format($jml_donasi,2,',','.'); ?></h5>
                            <br>
                            <a href="">Riwayat Donasi</a>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        </div>
                    <!-- /.row -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-sm">
                            <h4 class="text-center">جَزَاكَ اللَّهُ خَيْرًا</h4>
                            <h5 class="text-center">(Semoga Allah membalasmu dengan kebaikan)</h5>
                            <hr>
                            <p>Dari Abu Hurairah Radhiallohu’anhu, dia bercerita bahwa Rasululloh Sholallohu’alaihi wa sallam bersabda: 
                                “Tidak sehari pun (berlalu) manakala pagi muncul mendatangi umat manusia melainkan pada waktu itu dua 
                                Malaikat turun, lalu salah satu dari keduanya berdoa: ‘Ya Alloh, berikanlah ganti kepada orang
                                 yang mengingakkan hartanya.’ Sedangkan Malaikat yang satunya lagi berdo’a: ‘Ya Alloh, berikanlah 
                                 kebinasaan kepada orang yang kikir.'” (Muttafaq ‘alaih)</p>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.widget-user -->
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
</section>