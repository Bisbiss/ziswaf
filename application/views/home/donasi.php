<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md-8">
            <br>
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Formulir Donasi</h3>
                    </div>
                    <?php foreach($data as $data){ ?>
                    <div class="card-body">
                        <center>
                        <span>Hanya menerima zakat, infak, sedekah dan wakaf (ZISWAF) berupa Uang. <br>
                        untuk zakat, infak, sedekah dan wakaf (ZISWAF) selain uang bisa mengisi kolom isian Lainya <br>
                        Terimakasih</span>
                        </center>
                        <hr>
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
                    <div class="card-header bg-primary">
                        <h5 class="card-tittle">Kalkulator Zakat</h5>
                    </div>
                    <div class="card-body">
                        <p>Nisab untuk zakat mal adalah harta yang disimpan selama 1 tahun setara nilainya dengan 85 gram Emas</p>
                        <form>
                            <div class="form-group">
                                <label>Jumlah Harta</label>
                                <input type="number" class="form-control" id="mal">
                                <button class="btn btn-info form-control" min=0 onclick="hitungMal()" type="button">Hitung</button>
                            </div>
                            <div class="form-group">
                                <label>Zakat Mal</label>
                                <input type="text" class="form-control" id="zmal" value="0" readonly>
                            </div>
                        </form>
                        <hr>
                        <p>Nisab untuk zakat profesi adalah pendapatan selama 1 tahun setara nilainya dengan 522 KG Emas</p>
                        <form>
                            <div class="form-group">
                                <label>Jumlah Pendapatan</label>
                                <input type="number" class="form-control" min=0 id="profesi">
                                <button class="btn btn-info form-control" onclick="hitungProfesi()" type="button">Hitung</button>
                            </div>
                            <div class="form-group">
                                <label>Zakat Profesi</label>
                                <input type="text" class="form-control" id="zprof" value="0" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>

<script>
function hitungMal(){
    let hartaMal = parseInt(document.getElementById("mal").value);
    let zakatMal;
    let hargaEmas = 700000;
    
    if (hartaMal >= (hargaEmas*85)) {
        zakatMal = hartaMal*(2.5/100);
    } else {
        zakatMal = 'Tidak memenuhi minimum satu nisab';
    }
    // console.log(zakatMal);
    zmal.value = zakatMal;
}

function hitungProfesi(){
    let hartaProfesi = parseInt(document.getElementById("profesi").value);
    let zakatProfesi;
    let hargaBeras = 9000;
    
    if (hartaProfesi >= (hargaBeras*522)) {
        zakatProfesi = hartaProfesi*(2.5/100);
    } else {
        zakatProfesi = 'Tidak memenuhi minimum satu nisab';
    }
    zprof.value = zakatProfesi;
}
</script>