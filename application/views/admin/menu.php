<!-- Navigasi -->
<nav class="navbar navbar-expand-lg bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url('admin') ?>">
			<img src="<?php echo base_url('assets/dist/img/logo-menu.png') ?>" class="img-fluid" width="20%">
		</a>
	  	<button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/donasi')?>">Kelola ZISWAF</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/agenda')?>">Kelola Agenda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/laporan')?>">Kelola Laporan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/akun')?>">Kelola Akun</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('welcome/logout')?> ">Keluar</a>
				</li>
			</ul>
		</div>
	</div>
</nav>