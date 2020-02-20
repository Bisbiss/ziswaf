<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title" style="float:left">Kelola Donasi</h3>  
                        <h3 class="card-title" style="float:right"><a href="<?php echo base_url('pimpinan/laporan_pdf') ?>" data-target="#tambah">
                        <i class="nav-icon fa fa-print"> Cetak Laporan</i></a></h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="20%">Nama</th>
                                <th width="20%">Email</th>
                                <th width="20%">Detail Donasi</th>
                                <th width="20%">Jenis Donasi</th>
                                <th width="15%">Status</th>
                            </thead>

                            <tbody>
                                <?php
                                $id = 0;
                                foreach ($data as $data):
                                    $id++;
                                ?>
                                <tr><center>  
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
                                        <a href="#">Detail Donasi</a>
                                    </td>
                                    <td>
                                        <?php if($data->verifikasi==1){?>
                                            <span class="badge badge-success">Ziswaf</span>
                                        <?php } else{ ?>
                                            <span class="badge badge-danger">Donasi Agenda</span>
                                        <?php } ?>   
                                    </td>
                                    <td>
                                        <?php if($data->verifikasi==1){?>
                                            <span class="badge badge-success">Terverifikasi</span>
                                        <?php } else{ ?>
                                            <span class="badge badge-danger">Belum Terverifikasi</span>
                                        <?php } ?>   
                                    </td>
                                    </center>
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