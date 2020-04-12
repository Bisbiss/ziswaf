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
                                <th width="35%">Nama</th>
                                <th width="35%">Email</th>
                                <th width="20%">Kelola</th>
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
                                        <a href="data_akun/<?php echo $data->username ?>"><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="hapus/<?php echo $data->username ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
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