<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulir Ubah Agenda Donasi</h3>
                    </div>
                    <?php echo form_open_multipart('agenda/proses_ubah'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label col-sm" for="tipe">Judul Agenda</label>
                            <div class="col-sm">
                                <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>" required>
                            </div>
                        </div>
                        <input type="hidden" name="id_agenda" value="<?php echo $id_agenda ?>">
                        <div class="form-group">
                            <label class="control-label col-sm" for="tipe">Isi Agenda</label>
                            <div class="col-sm">
                                <textarea name="isi" class="form-control" cols="30" rows="7" required><?php echo $isi ?></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm" for="path">File</label>
                            <div class="col-sm">
                                <input type="file" name="file" class="form-control" value="<?php echo $foto ?>">
                            </div>
                        </div>
                    </div>
                        
                    <div class="card-footer">
                        <input type ="submit" name ="submit" class="btn btn-primary" value="Submit"/>
                    </div>  
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>