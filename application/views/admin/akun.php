<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header bg-danger">
                        <h3 class="card-title">Kelola Akun</h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="25%">Nama</th>
                                <th width="25%">Email</th>
                                <th width="30%">Password</th>
                                <th width="15%">Kelola</th>
                            </thead>

                            <tbody>
                                <?php
                                $id = 0;
                                foreach ($data as $data):
                                    $id++;
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $id; ?>
                                    </td>
                                    <td>
                                        <?php echo $data->username ?>
                                    </td>
                                    <td>
                                        <?php echo $data->email ?>
                                    </td>
                                    <td>
                                        <?php echo $data->pass ?>
                                    </td>
                                    <td>
                                        <a href="#" data-target="<?php echo '#ubah'.$data->username ?>" data-toggle='modal'><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="hapus/<?php echo $data->username ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
                                    </td>

                                    <!-- Form Ubah Akun -->
                                    <div class="modal fade" id="<?php echo 'ubah'.$data->username ?>"  role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h4 class="modal-title">Ubah Akun</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form role="form" action="<?php echo base_url('admin/ubah_akun'); ?>" method="post">
                                                    <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="inputUsername">Username</label>
                                                        <input type="text" class="form-control" value="<?php echo $data->username ?>" name="username" id="inputUsername" placeholder="Masukan Username" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="inputUsername">Email</label>
                                                        <input type="text" class="form-control" value="<?php echo $data->email ?>" name="email" id="inputUsername" placeholder="contoh@email.com" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" name="pass" required id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    </div>
                                                    <!-- /.modal-body -->

                                                    <div class="modal-footer">
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" style="float: right;">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>