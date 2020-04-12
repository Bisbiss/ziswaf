<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulir Ubah Akun</h3>
                    </div>
                    <?php echo form_open_multipart('admin/ubah_akun'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label col-sm" for="tipe">Username</label>
                            <div class="col-sm">
                                <input type="text" name="username" class="form-control" value="<?php echo $data->username ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm" for="tipe">Email</label>
                            <div class="col-sm">
                                <input type="text" name="email" class="form-control" value="<?php echo $data->email ?>" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm" for="path">Password</label>
                            <div class="col-sm">
                                <input type="text" name="pass" class="form-control" placeholder="Masukan passowrd baru" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm" for="path">Jenis Akun</label>
                                <select class="form-control form-control-md" name="level" id="level">
                                    <option value="3" <?php if($data->level==3){ echo "selected"; } ?>>Administrator</option>
                                    <option value="2" <?php if($data->level==2){ echo "selected"; } ?>>Pimpinan</option>
                                    <option value="1" <?php if($data->level==1){ echo "selected"; } ?>>Donatur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        
                    <div class="card-footer">
                        <input type ="submit" name ="submit" class="btn btn-primary form-control" value="Submit"/>
                    </div>  
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>