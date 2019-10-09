<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header">
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
                                        <a href="ubah/<?php echo $data->id_user?>"><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="hapus/<?php echo $data->id_user?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
                                    </td>
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