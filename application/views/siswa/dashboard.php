		<!-- main content -->
			<div class="page-heading">
				<h1 class="caption">Dashboard</h1>
				<i class="glyphicon glyphicon-cog"></i>
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
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Elang Aro" style="background-image: url(<?php echo base_url();?>images/elang-th-01.jpg);">
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Seraphiel" style="background-image: url(<?php echo base_url();?>images/elang-th-02.jpg);">
												</a>
											 </div>
										 </div>
									</div>
									<div class="group-middle">
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Dheeva Agung" style="background-image: url(<?php echo base_url();?>images/jeun-th-01.jpg);">
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
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Calista Aurelia" style="background-image: url(<?php echo base_url();?>images/jeun-elang-th-01.jpg);">
												</a>
											 </div>
										 </div>
									</div>
									<div class="group-bottom">
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="left" title="Peter Elang" style="background-image: url(<?php echo base_url();?>images/elang-th-03.jpg);">
												</a>
											 </div>
										 </div>
										<div class="hexagon hexagon-sm">
											<div class="hexagon-wrap">
												<a href="#" class="hexagon-inner toolTip" data-toggle="tooltip" data-placement="right" title="Princess Jeun" style="background-image: url(<?php echo base_url();?>images/jeun-th-02.jpg);">
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
								<h3 class="panel-title">Grafik Nilai Siswa</h3>
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
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">Matematika IPA 1</h4></a>
											<span class="span-block">Mata Pelajaran  : Matematika</span>
											<span class="span-block">Jumlah Siswa    : 30 Siswa</span>
											<span class="span-block">Jumlah Materi   : 12 Materi</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="media media-primary">
										<a href="#" class="pull-left">
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">Matematika IPA 5</h4></a>
											<span class="span-block">Mata Pelajaran  : Matematika</span>
											<span class="span-block">Jumlah Siswa    : 29 Siswa</span>
											<span class="span-block">Jumlah Materi   : 12 Materi</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="media media-primary">
										<a href="#" class="pull-left">
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">Matematika IPS 3</h4></a>
											<span class="span-block">Mata Pelajaran  : Matematika</span>
											<span class="span-block">Jumlah Siswa    : 25 Siswa</span>
											<span class="span-block">Jumlah Materi   : 12 Materi</span>
										</div>
									</div>
								</div>
						</div>
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
										<img class="media-object" src="<?php echo base_url();?>images/jeun-th-02.jpg">
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
										<img class="media-object" src="<?php echo base_url();?>images/jeun-elang-01.jpg">
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
										<img class="media-object" src="<?php echo base_url();?>images/elang-th-02.jpg">
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
				
			</div>
		<!-- ./ main content -->