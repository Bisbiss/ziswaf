<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md-8">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulir Donasi</h3>
                    </div>
                    <?php foreach($data as $data){ ?>
                    <div class="card-body">
                        <form role="form" action="<?php echo base_url('home/submit_donasi'); ?>" method="post">
                            <div class="form-group">
                                <label for="nama">Username</label>
                                <input type="text" class="form-control" value="<?php echo $data->username ?>" name="nama_lengkap" required id="nama" maxvalue=25 placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_donasi">Nama Donatur</label>
                                <input type="text" class="form-control" name="nama_donatur" required id="nama_donasi" maxvalue=25 placeholder="Masukan Nama Donatur">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" value="<?php echo $data->email ?>" name="email" disable id="email" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label for="zakat">Zakat Mal</label>
                                <input type="number" min="0" class="form-control" name="zakat" required id="zakat" placeholder="Masukan Jumlah Zakat Mal">
                            </div>
                            <div class="form-group">
                                <label for="zakat_profesi">Zakat Profesi</label>
                                <input type="number" min="0" class="form-control" name="zakat_profesi" required id="zakat_profesi" placeholder="Masukan Jumlah Zakat Profesi">
                            </div>
                            <div class="form-group">
                                <label for="infak">Infak</label>
                                <input type="number" min="0" class="form-control" name="infak" required id="infak" placeholder="Masukan Jumlah Infak">
                            </div>
                            <div class="form-group">
                                <label for="sedekah">Sedekah</label>
                                <input type="number" min="0" class="form-control" name="sedekah" required id="sedekah" placeholder="Masukan Jumlah Sedekah">
                            </div>
                            <div class="form-group">
                                <label for="wakaf">Wakaf</label>
                                <input type="number" min="0" class="form-control" name="wakaf" required id="wakaf" placeholder="Masukan Jumlah Wakaf">
                            </div>
                            <div class="form-group">
                                <label for="lainya">Lainya</label>
                                <input type="text" class="form-control" name="lainya" id="lainya" placeholder="Masukan Donasi Tambahan">
                            </div>
                            <div class="form-grup">
                                <input type="submit" class="btn btn-info form-control" value="Submit">
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-4">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-tittle">Kalkulator Zakat</h5>
                    </div>
                    <div class="card-body">
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, animi nihil? Rerum provident facere cupiditate reiciendis atque officiis, fugiat cumque veniam ipsum omnis voluptates a exercitationem quasi voluptatem recusandae perferendis?</span>
                        <div class="table">
                            <tr>
                                <td>Jumlah Harta</td>
                                <td><input type="text" class="harta"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Zakat</td>
                                <td><input type="text" value=0 class="jml_zakat"></td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>

<script>
document.getElemenByClass('harta'){
    
}
</script>