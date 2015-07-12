<!DOCTYPE html>
<html>
	<head>
		<title>Kelas Online - SMKN 2 Subang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>assets/css/aurora/layout-1.css" rel="stylesheet" media="screen">
	</head>
	<body>
		
		<!-- top navbar -->
		<nav class="navbar navbar-success navbar-heading" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1c">
					<span class="sr-only">Toggle navigation</span>
					<i class="glyphicon glyphicon-align-justify"></i>
				</button>
				<a class="navbar-brand" href="#">Kelas Online - SMKN 2 Subang</a>
			</div>

			<div class="collapse navbar-collapse navbar-ex1c">			
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url('home');?>">Halaman Utama</a></li>
					<li class="dropdown">
						<a href="<?php echo base_url('listguru');?>" >List Guru</a>
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url('listsiswa');?>">List Siswa</a>
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url('listmateri');?>">List Materi</a>
					</li>
				</ul>

				<!-- <form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Masukan keyword">
					</div>
					<button type="submit" class="btn btn-danger">Search</button>
				</form>	 -->			
			</div>
		</nav>
		<!-- ./ top navbar -->
		
		<!-- left sidebar -->
		<section class="sidebar">
		<?php echo $_sidebar;?> 
		</section>
		<!-- ./ left sidebar -->
		
		<!-- main content -->
		<section class="main-content">
		<?php echo $_content;?> 
		</section>
		<!-- ./ main content -->

		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/masonry.pkgd.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.nice-file-input.js"></script>
		<script src="<?php echo base_url();?>assets/js/selectize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.icheck.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/pikaday.js"></script>
		<script src="<?php echo base_url();?>assets/js/pikaday.jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/spectrum.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.fs.stepper.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.texteditor.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.nouislider.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/Chart.js"></script>
		<script src="<?php echo base_url();?>assets/js/leaflet/leaflet.js"></script>
		<script src="<?php echo base_url();?>assets/js/loader.js"></script>
		<script src="<?php echo base_url();?>assets/js/samples.js"></script>
	</body>
</html>