<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card-info">
                    <div class="card-header">
                        <h3 class="card-title" style="float:left">Kelola Agenda</h3>  
                        <h3 class="card-title" style="float:right"><a href="#" data-target="#tambah">
                        <i class="nav-icon fa fa-plus-square"> Tambah Agenda</i></a></h3>  
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
                                        <a href="<?php echo base_url('assets/agenda/'.$data->foto) ?>">Lihat file </a>
                                    </td>
                                    <td>
                                        <a href="ubah/<?php echo $data->id_berita ?>"><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="hapus/<?php echo $data->id_berita ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
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