<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <center>
    <h3>Daftar Laporan</h3>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Laporan</th>
                <th>waktu</th>

                <th>Jumlah Uang</th>
                <th>Saldo</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $id = 0;
            $dana = $this->db->query("SELECT SUM(zakat_mal) AS jml_mal,SUM(zakat_profesi) AS jml_profesi, SUM(infak) AS jml_infak, SUM(sedekah) AS jml_sedekah, SUM(wakaf) AS jml_wakaf FROM donasi WHERE verifikasi=1")->row(); 
            $jml_zakat = $dana->jml_mal + $dana->jml_profesi + $dana->jml_infak + $dana->jml_sedekah + $dana->jml_wakaf;
            foreach ($data as $data):
            $id++;
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $data->judul ?></td>
                <td><?php echo $data->waktu ?></td>
                <td><?php echo $data->jumlah ?></td>
                <td><?php echo $jml_zakat-=$data->jumlah; ?></td>
            </tr>
            <?php
            endforeach;
            ?>
            <tr>
                <td colspan=4>Sisa Dana ZISWAF </td>
                <td><?php echo $jml_zakat ?></td>
            </tr>
        </tbody>
    </table>
    </center>
</body>
</html>