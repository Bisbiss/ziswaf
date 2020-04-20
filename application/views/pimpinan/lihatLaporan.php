<section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <br>
                <div class="card">
                    <div class="card-header bg-warning">
                        <h3 class="card-title" style="float:left">Laporan Donasi</h3>  
                        <h3 class="card-title" style="float:right"><a href="<?php echo base_url('pimpinan/laporan') ?>" data-target="#tambah">
                        <i class="nav-icon fa fa-print"> Cetak Laporan</i></a></h3>  
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <th width="5%">No</th>
                                <th width="20%">Judul</th>
                                <th width="35%">Isi Laporan</th>
                                <th width="15%">Jumlah Uang</th>
                                <th width="15%">File Laporan</th>
                                <th width="20%">Waktu</th>
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
                                        <span class="badge badge-warning"><?php echo $data->jumlah ?></span>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('assets/laporan/'.$data->foto) ?>">File Laporan </a>
                                    </td>
                                    <td>
                                        <?php echo $data->waktu ?>
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