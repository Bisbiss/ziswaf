<!-- Just an image -->
<nav class="navbar bg-light">
	<div class="container">
	  <a class="navbar-brand" href="<?php echo base_url('admin') ?>">
	    <img src="<?php echo base_url('assets/dist/img/logo-menu.png') ?>" class="img-fluid" width="20%">
	  </a>

	  	<ul class="nav justify-content-end">
		  <li class="nav-item">
		    <a class="nav-link" href="<?php echo base_url('admin/donasi')?>">Kelola Donasi</a>
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
</nav>