<!DOCTYPE html>
<html>
	<head>
		<title>Kelas Online - SMKN 2 Subang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/styles.css" rel="stylesheet" media="screen">
		<link href="assets/css/aurora/layout-1.css" rel="stylesheet" media="screen">
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

				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-danger">Search</button>
				</form>				
			</div>
		</nav>
		<!-- ./ top navbar -->
		
		<!-- left sidebar -->
		<section class="sidebar">
			<div class="sidebar-heading hidden-xs hidden-sm">
				<div class="hex-wrapper">
					<div class="hexagon hexagon-sm">
						<div class="hexagon-wrap">
							<a href="#" class="hexagon-inner" style="background-image: url(images/elang-th-02.jpg);"></a>
						</div>
					</div>
					<h3 class="sidebar-title">Tarkiman, S.Kom.</h3>
					<small>Siswa</small>
					<a href="#" class="btn btn-success btn-sm">profile</a> 
					<a href="#" class="btn btn-primary btn-sm">settings</a> 
				</div>
				<div class="clearfix"></div>
			</div>
			
			<!-- sidebar main menu -->
			<div class="list-group list-group-info list-group-menu">
				<a href="#" class="list-group-item">
					<i class="glyphicon glyphicon-home rm"></i><span>Beranda</span>
				</a>
				<a href="#" class="list-group-item">
					<i class="glyphicon glyphicon-pushpin rm"></i><span>Ambil Kelas Baru</span>
				</a>
				<a href="#" class="list-group-item">
					<i class="glyphicon glyphicon-user rm"></i><span>Ubah Data & Password</span>
				</a>
				<a href="#" class="list-group-item">
					<i class="glyphicon glyphicon-off rm"></i><span>Log Out</span>
				</a>
			</div>
			<!-- ./ sidebar main menu -->
			
			<!-- sidebar other menu -->
			<div class="list-group list-group-danger hidden-xs hidden-sm">
				<div class="list-group-heading">
					<span class="title">Online friends</span>
				</div>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online busy"></i>
					<img src="images/jeun-th-01.jpg" alt="Geunevere" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Geunevere</h4>
					<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
				</a>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online available"></i>
					<img src="images/elang-th-01.jpg" alt="Elang" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Elang</h4>
					<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
				</a>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online away"></i>
					<img src="images/jeun-elang-th-01.jpg" alt="Seraphiel" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Seraphiel</h4>
					<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
				</a>
			</div>
			<!-- ./ sidebar other menu -->
			
		</section>
		<!-- ./ left sidebar -->
		
		<!-- main content -->
		<section class="main-content">
			<div class="page-heading">
				<h1 class="caption">Dashboard</h1>
				<i class="glyphicon glyphicon-cog"></i>
				<ul class="nav nav-tabs nav-tabs-warning-alt">
					<li class="active"><a href="index.html">Beranda</a></li>
					<li><a href="index-2.html">List Tugas</a></li>
					<li><a href="index-3.html">Jadwal Kelas</a></li>
				</ul>
			</div>
			<div class="wrapper">
			
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="panel panel-transparent panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Guru Pengajar</h3>
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
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Seraphiel" style="background-image: url(images/elang-th-02.jpg);">
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
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Peter Elang" style="background-image: url(images/elang-th-03.jpg);">
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
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="panel panel-transparent panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Grafik Aktifitas</h3>
							</div>
							<div class="panel-body">
								<!-- line chart -->
								<canvas id="line-canvas" height="260" width="300"></canvas>
								<!-- ./ line chart -->
							</div>
						</div>
					</div>
				</div>
			
				<div class="panel panel-transparent panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">List Kelas</h3>
					</div>
					<div class="panel-body">
						<div class="row media-group">
							<div class="col-md-6 col-lg-6">
								<div class="media media-primary">
									<a href="#" class="pull-left">
										<img class="media-object img-circle img-avatar" src="images/elang-th-01.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Cras sit amet nibh libero</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">Cras sit amet nibh libero, in gravida nulla...</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media media-danger">
									<a href="#" class="pull-left">
										<img class="media-object img-circle img-avatar" src="images/elang-th-02.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Nullam id dolor id</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">Cras sit amet nibh libero, in gravida nulla...</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media media-info">
									<a href="#" class="pull-left">
										<img class="media-object img-circle img-avatar" src="images/elang-th-03.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Duis mollis, est non luctus</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">Cras sit amet nibh libero, in gravida nulla...</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media media-info">
									<a href="#" class="pull-left">
										<img class="media-object img-circle img-avatar" src="images/jeun-th-02.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Cras sit amet nibh libero</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">Cras sit amet nibh libero, in gravida nulla...</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="panel panel-dark panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Blog visitors by location</h3>
					</div>
					<div class="panel-body">
						<div id="map-wrapper1" style="width:100%; height:280px;"></div>
					</div>
				</div>
				
				<div class="panel panel-transparent panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Blog Posts</h3>
					</div>
					<div class="panel-body">
						<div class="row media-group media-group-alt">
							<div class="col-md-6 col-lg-6">
								<div class="media">
									<a class="media-object-wrapper" href="#">
										<img class="media-object" src="images/jeun-th-02.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Cras sit amet nibh libero</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media media-danger">
									<a class="media-object-wrapper" href="#">
										<img class="media-object" src="images/jeun-elang-01.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Nullam id dolor id</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
										<span class="badge">12</span> comments.
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media">
									<a class="media-object-wrapper" href="#">
										<img class="media-object" src="images/elang-th-02.jpg">
									</a>
									<div class="media-body">
										<a href="#"><h4 class="media-heading">Duis mollis, est non luctus</h4></a>
										<span class="span-block">September, 09 2012</span>
										<span class="span-block">In: <a href="#"><span class="label label-info">Tips & tricks</span></a></span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="media">
									<a class="media-object-wrapper" href="#">
										<img class="media-object" src="images/jeun-elang-03.jpg">
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
				
			</div>
		</section>
		<!-- ./ main content -->

		<script src="assets/bootstrap/js/jquery.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/masonry.pkgd.min.js"></script>
		<script src="assets/js/jquery.nice-file-input.js"></script>
		<script src="assets/js/selectize.min.js"></script>
		<script src="assets/js/jquery.icheck.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/pikaday.js"></script>
		<script src="assets/js/pikaday.jquery.js"></script>
		<script src="assets/js/spectrum.js"></script>
		<script src="assets/js/jquery.fs.stepper.min.js"></script>
		<script src="assets/js/jquery.texteditor.js"></script>
		<script src="assets/js/jquery.nouislider.min.js"></script>
		<script src="assets/js/Chart.js"></script>
		<script src="assets/js/leaflet/leaflet.js"></script>
		<script src="assets/js/loader.js"></script>
		<script src="assets/js/samples.js"></script>
	</body>
</html>