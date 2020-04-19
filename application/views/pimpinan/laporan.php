<!DOCTYPE html>
<html>
<head>
	<title>Laporan ZISWAF</title>
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
    <h3>DAFTAR ZISWAF</h3>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Donatur</th>
                <th>Email</th>
                <th>Zakal Mal</th>
                <th>Zakal Profesi</th>
                <th>Infak</th>
                <th>Sedekah</th>
                <th>Wakaf</th>
                <th>Lainya</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $id = 0;
            $total_ziswaf = 0;
            foreach ($data as $data):
            $id++;
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $data->nama ?></td>
                <td><?php echo $data->email ?></td>
                <td><?php echo $data->zakat_mal ?></td>
                <td><?php echo $data->zakat_profesi ?> </td>
                <td><?php echo $data->infak ?> </td>
                <td><?php echo $data->sedekah ?> </td>
                <td><?php echo $data->wakaf ?> </td>
                <td><?php echo $data->lainya ?> </td>
                <?php
                    $total_ziswaf += $data->zakat_mal + $data->zakat_profesi + $data->infak + $data->sedekah + $data->wakaf;
                ?>
            </tr>
            <?php
            endforeach;
            ?>
            <tr>
                <td colspan=8>Jumlah ZISWAF </td>
                <td><?php echo $total_ziswaf ?></td>
            </tr>
        </tbody>
    </table>
    </center>
</body>
</html>