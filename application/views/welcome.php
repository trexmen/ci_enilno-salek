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
		

		
		<!-- main content -->
		<section class="main-content" style="position: inherit !important; padding-top: 0px !important;">
			<div class="page-heading">
				<h1 class="caption">Dashboard</h1>
				<i class="glyphicon glyphicon-cog"></i>
			</div>
			
			<div class="wrapper">			
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title">Log In</h3>
							</div>
							<div class="panel-body">
								<div class="media-group">
									<div class="media media-danger first" style=" height: 100% !important; padding-top: 40px !important;">
										

										<div class="panel-body">
											<?php $v =& $this->form_validation?>
											
											<?php if(validation_errors()){ ?>
												<div class="alert alert-danger" >					
											     	<?php echo validation_errors(); ?>
												</div>
											<?php }
												else if (isset($message)){ ?>
												<div class="alert alert-danger" >					
											     	<?php echo $message; ?>
												</div>
											<?php } ?>
											<form method="post" action="<?php echo base_url('auth/login');?>" class="form-horizontal" role="form">
												<div class="form-group">
													<div class="col-md-10 col-lg-10">
														<input type="text" class="form-control" name="username" id="username" placeholder="Username">
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-10 col-lg-10">
														<input type="password" class="form-control" name="password" id="password" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-10 col-lg-10">
														<button type="submit" class="btn btn-primary">Sign in</button>
													</div>
												</div>
											</form>
										</div>


									</div>							
									
								</div>
							</div>
						</div>
						
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title">Pengumuman Kelas Online</h3>
							</div>
							<div class="panel-body">
								<div class="media-group media-group-alt">
									<div class="media first">
										<a class="media-object-wrapper" href="#">
											<img class="media-object" src="<?php echo base_url();?>images/jeun-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="#"><h4 class="media-heading">Cras sit amet nibh libero</h4></a>
											<span class="span-block">September, 09 2012</span>
											<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
										</div>
									</div>
									
									<div class="media">
										<a class="media-object-wrapper" href="#">
											<img class="media-object" src="<?php echo base_url();?>images/jeun-elang-01.jpg">
										</a>
										<div class="media-body">
											<a href="#"><h4 class="media-heading">Nullam id dolor id</h4></a>
											<span class="span-block">September, 09 2012</span>
											<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
											<span class="badge">12</span> comments.
										</div>
									</div>
									
									<div class="media">
										<a class="media-object-wrapper" href="#">
											<img class="media-object" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="#"><h4 class="media-heading">Duis mollis, est non luctus</h4></a>
											<span class="span-block">September, 09 2012</span>
											<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
										</div>
									</div>
									
									<div class="media">
										<a class="media-object-wrapper" href="#">
											<img class="media-object" src="<?php echo base_url();?>images/jeun-elang-03.jpg">
										</a>
										<div class="media-body">
											<a href="#"><h4 class="media-heading">Cras sit amet nibh libero</h4></a>
											<span class="span-block">September, 09 2012</span>
											<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
					
					<div class="col-md-6 col-lg-6">
					
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title"></h3>
							</div>
							<div class="panel-body">
							
								
								<div class="clearfix"></div>
							</div>
						</div>
						
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title"></h3>
							</div>
							<div class="panel-body">
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
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