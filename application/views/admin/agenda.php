<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
            <br>
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title" style="float:left">Kelola Agenda</h3>  
                        <h3 class="card-title" style="float:right"><a href="#" data-target="#tambah" data-toggle='modal'>
                        <i class="nav-icon fa fa-plus-square">Tambah Agenda</i></a></h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="25%">Judul</th>
                                <th width="40%">Isi</th>
                                <th width="15%">File</th>
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
                                        <a href="<?php echo base_url('assets/agenda/'.$data->foto) ?>"><i class="fa fa-file-image-o"> Lihat file </i></a>
                                        <!-- <br><a href=""><i class="fa fa-edit"> Ubah File</i></a> -->
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('agenda/ubah/'.$data->id_agenda) ?>" ><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="<?php echo base_url('agenda/hapus/'.$data->id_agenda) ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
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

<!-- Tambah Data -->
<div class="modal fade" id="tambah"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Tambah Agenda</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php echo form_open_multipart('agenda/tambah'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label col-sm" for="tipe">Judul Agenda</label>
                    <div class="col-sm">
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm" for="tipe">Isi Agenda</label>
                    <div class="col-sm">
                        <textarea name="isi" class="form-control" cols="30" rows="7" required></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm" for="path">File</label>
                    <div class="col-sm">
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
            </div>
                
            <div class="modal-footer">
                <input type ="submit" name ="submit" class="btn btn-primary" value="Submit"/>
            </div>  
            <?php form_close(); ?>
        </div>
    </div>
</div>
