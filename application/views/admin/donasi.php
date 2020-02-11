<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title" style="float:left">Kelola Donasi</h3>  
                        <h3 class="card-title" style="float:right"><a href="<?php echo base_url('admin/tambah_donasi') ?>" data-target="#tambah">
                        <i class="nav-icon fa fa-plus-square"> Tambah Donasi</i></a></h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="18%">Nama</th>
                                <th width="18%">Email</th>
                                <th width="30%">Donasi</th>
                                <th width="15%">Kelola</th>
                                <th width="14%">Status</th>
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
                                        <?php echo $data->nama ?>
                                    </td>
                                    <td>
                                        <?php echo $data->email ?>
                                    </td>
                                    <td>
                                        <span>Zakat Mal :</span><?php echo $data->zakat_mal ?> <br>
                                        <span>Zakat Profesi :</span><?php echo $data->zakat_profesi ?> <br>
                                        <span>Infak :</span><?php echo $data->infak ?> <br>
                                        <span>Sedekah :</span><?php echo $data->sedekah ?> <br>
                                        <span>Wakaf :</span><?php echo $data->wakaf ?> <br>
                                        <span>Lainya</span><?php echo $data->lainya ?> 
                                    </td>
                                    <td>
                                        <?php if($data->verifikasi==1){
                                            
                                        }else{ ?>
                                            <a href="<?php echo base_url('donasi/ubah/'.$data->id_donasi) ?>"><i class="fa fa-edit"></i>Ubah</a>
                                            <a href="<?php echo base_url('donasi/hapus/'.$data->id_donasi) ?>" style="color:red">Hapus<i class="fa fa-trash"></i></a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if($data->verifikasi==1){?>
                                            <span class="badge badge-success">Terverifikasi</span>
                                        <?php } else{ ?>
                                            <span class="badge badge-danger">Belum Terverifkasi</span>
                                            <a href="<?php echo base_url('Donasi/verifikasi/'.$data->id_donasi) ?>">
                                            <span class="badge badge-info">Verifikasi Data</span></a>
                                        <?php } ?>   
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