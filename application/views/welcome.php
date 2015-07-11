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
		<nav class="navbar navbar-primary navbar-heading" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1c">
					<span class="sr-only">Toggle navigation</span>
					<i class="glyphicon glyphicon-align-justify"></i>
				</button>
				<a class="navbar-brand" href="#">Kelas Online - SMKN 2 SUBANG</a>
			</div>

			<div class="collapse navbar-collapse navbar-ex1c">			
				<ul class="nav navbar-nav">				
					<li class="active"><a href="index.html">Dashboard</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">CSS <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="typography.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Typography</span></a>
							</li>
							<li>
								<a href="css-tables.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Tables</span></a>
							</li>
							<li>
								<a href="css-forms.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Forms</span></a>
							</li>
							<li>
								<a href="css-buttons.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Buttons & Dropdowns</span></a>
							</li>
							<li>
								<a href="css-images.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Images</span></a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Components <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="glyphicons.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Glyphicons</span></a>
							</li>
							<li>
								<a href="navs.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Navs</span></a>
							</li>
							<li>
								<a href="navbar.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Navbar</span></a>
							</li>
							<li>
								<a href="breadcrumbs.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Breadcrumbs & Pagination</span></a>
							</li>
							<li>
								<a href="label-alerts.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Label, Badges, Alerts, Progress Bars</span></a>
							</li>
							<li>
								<a href="containers.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Containers</span></a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Plugins <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="modal.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Modal</span></a>
							</li>
							<li>
								<a href="tooltip-popover.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Tooltip, popover</span></a>
							</li>
							<li>
								<a href="collapse.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Collapse</span></a>
							</li>
							<li>
								<a href="charts.html"><i class="glyphicon glyphicon-list-alt rm"></i><span>Charts & Map</span></a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- navbar form -->
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-danger">Search</button>
				</form>	
				<!-- ./ navbar form -->
			</div>
		</nav>
		<!-- ./ top navbar -->
		

		
		<!-- main content -->
		<section class="main-content" style="position: inherit !important; padding-top: 0px !important;">
			<div class="page-heading">
				<h1 class="caption">Dashboard</h1>
				<i class="glyphicon glyphicon-cog"></i>
				<ul class="nav nav-tabs nav-tabs-info">
					<li class="active"><a href="index.html">Dashboard</a></li>
					<li><a href="index-2.html">Tugas Sekolah</a></li>
					<li><a href="index-3.html">Jadwal Pelajaran</a></li>
				</ul>
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
								<h3 class="panel-title">Mata Pelajaran Saya</h3>
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
								<h3 class="panel-title">List Guru Saya</h3>
							</div>
							<div class="panel-body">
							
								<!-- hexagon group -->
								<div class="hexagon-group" style="float:none;display:block;width:275px;margin:15px auto 0 auto;">
									<div class="group-top">
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Elang Aro" style="background-image: url(images/elang-th-01.jpg);">
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Aurelius St. Aaron, S.Kom." style="background-image: url(images/elang-th-02.jpg);">
												</a>
											 </div>
										 </div>
									</div>
									<div class="group-middle">
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Dheeva Agung" style="background-image: url(images/jeun-th-01.jpg);">
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm hexagon-danger">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="MORE">
													<i class="glyphicon glyphicon-share-alt"></i>
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Calista Aurelia" style="background-image: url(images/jeun-elang-th-01.jpg);">
												</a>
											 </div>
										 </div>
									</div>
									<div class="group-bottom">
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Tarkiman, S.Kom." style="background-image: url(images/elang-th-03.jpg);">
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Princess Jeun" style="background-image: url(images/jeun-th-02.jpg);">
												</a>
											 </div>
										 </div>
									</div>
								</div>
								<!-- ./ hexagon group -->
								<div class="clearfix"></div>
							</div>
						</div>
						
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title">Aktifitas KBM</h3>
							</div>
							<div class="panel-body">
								<!-- line chart -->
								<canvas id="line-canvas" height="250" width="360"></canvas>
								<!-- ./ line chart -->
							</div>
						</div>
						
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title">Last Checkin</h3>
							</div>
							<div class="panel-body">
								<div class="thumbnail thumbnail-inverse thumbnail-custom-2" style="margin:0;">
									<div class="caption">
										<a class="avatar-wrap" href="#">
											<img src="<?php echo base_url();?>images/elang-th-02.jpg" alt="Angga Setiyadi, S.Kom." class="img-circle img-avatar">
										</a>
										<h3 class="heading-alt2">UNAIR Surabaya</h3>
										<span class="author">Sept, 03 2013</span>
										<div class="clearfix"></div>
									</div>
									<div class="img-wrapper">
										<div id="check-in-map" style="width:100%;height:250px;"></div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="panel panel-blank">
							<div class="panel-heading">
								<h3 class="panel-title">Blog visitors by location</h3>
							</div>
							<div class="panel-body">
								<div id="map-wrapper1" style="width:100%; height:245px;"></div>
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