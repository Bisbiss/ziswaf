<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header bg-warning">
                        <h3 class="card-title" style="float:left">Kelola Laporan</h3>  
                        <h3 class="card-title" style="float:right"><a href="#" data-target="#tambah" data-toggle='modal'>
                        <i class="nav-icon fa fa-plus-square"> Tambah Laporan</i></a></h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="20%">Judul</th>
                                <th width="40%">Isi</th>
                                <th width="10%">Jumlah Uang</th>
                                <th width="10%">File</th>
                                <th width="15">Kelola</th>
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
                                        <?php echo $data->judul ?>
                                    </td>
                                    <td>
                                        <?php echo $data->isi ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger"><?php echo $data->jumlah ?></span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('assets/laporan/'.$data->foto) ?>">Lihat file </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('laporan/ubah/'.$data->id_laporan) ?>"><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="<?php echo base_url('laporan/hapus/'.$data->id_laporan) ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
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

    <div class="modal fade" id="tambah"  role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Tambah Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <?php echo form_open_multipart('laporan/tambah'); ?>
                <!-- <form role="form" method="POST" action =""> -->
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm" for="tipe">Judul Laporan</label>
                        <div class="col-sm">
                            <input type="text" name="judul" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm" for="tipe">Jumlah Uang</label>
                        <div class="col-sm">
                            <input type="number" name="jumlah" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm" for="tipe">Isi Laporan</label>
                        <div class="col-sm">
                            <textarea name="isi" class="form-control" cols="30" rows="7"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm" for="path">File</label>
                        <div class="col-sm">
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                </div>
                    
                <div class="modal-footer">
                    <input type ="submit" name ="submit" class="btn btn-warning" value="Submit"/>
                </div>  
                <?php form_close(); ?>
            </div>
        </div>
    </div>
  </section>