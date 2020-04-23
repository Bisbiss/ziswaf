<!-- Navigasi -->
<nav class="navbar navbar-expand-lg bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?php echo base_url('home') ?>">
			<img src="<?php echo base_url('assets/dist/img/brand.png') ?>" class="img-fluid">
		</a>
	  	<button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="nav align-left">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/donasi') ?>">ZISWAF</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/laporan') ?>">Laporan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/profil') ?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('home/bantuan') ?>">Bantuan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('welcome/logout')?> ">Keluar</a>
				</li>
			</ul>
		</div>
	</div>
</nav>