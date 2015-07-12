		<!-- left sidebar -->

			<div class="sidebar-heading hidden-xs hidden-sm">
				<div class="hex-wrapper">
					<div class="hexagon hexagon-sm">
						<div class="hexagon-wrap">
							<a href="#" class="hexagon-inner" style="background-image: url(<?php echo base_url();?>images/elang-th-02.jpg);"></a>
						</div>
					</div>
					<h3 class="sidebar-title">Tarkiman, S.Kom.</h3>
					<small>Guru</small>
					<a href="#" class="btn btn-success btn-sm">profile</a> 
					<a href="#" class="btn btn-primary btn-sm">settings</a> 
				</div>
				<div class="clearfix"></div>
			</div>
			
			<!-- sidebar main menu -->
			<div class="list-group list-group-info list-group-menu">
				<a href="<?php echo base_url('home');?>" class="list-group-item">
					<i class="glyphicon glyphicon-home rm"></i><span>Ruang Guru</span>
				</a>
				<a href="<?php echo base_url('buatkelas');?>" class="list-group-item">
					<i class="glyphicon glyphicon-pushpin rm"></i><span>Buat Kelas Baru</span>
				</a>
				<a href="<?php echo base_url('acount');?>" class="list-group-item">
					<i class="glyphicon glyphicon-user rm"></i><span>Ubah Data & Password</span>
				</a>
				<a href="<?php echo base_url("auth/logout");?>" class="list-group-item">
					<i class="glyphicon glyphicon-off rm"></i><span>Log Out</span>
				</a>
			</div>
			<!-- ./ sidebar main menu -->
			
			<!-- sidebar other menu -->
			<div class="list-group list-group-danger hidden-xs hidden-sm">
				<div class="list-group-heading">
					<span class="title">Pesan Masuk</span>
				</div>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online busy"></i>
					<img src="<?php echo base_url();?>images/jeun-th-01.jpg" alt="Geunevere" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Angga Setiyadi, S.Kom</h4>
					<small class="online-status">Test Pesan</small>
				</a>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online available"></i>
					<img src="<?php echo base_url();?>images/elang-th-01.jpg" alt="Elang" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Edi Yulianto, S.Kom.</h4>
					<small class="online-status">Assalamu'alaykum</small>
				</a>
				<a class="list-group-item custom-1" href="#">
					<i class="pull-right glyphicon glyphicon-record online away"></i>
					<img src="<?php echo base_url();?>images/jeun-elang-th-01.jpg" alt="Seraphiel" class="img-circle img-avatar pull-left mr">
					<h4 class="user-id">Aurelius Aaron, S.E.</h4>
					<small class="online-status">Siang Mas...</small>
				</a>
			</div>
			<!-- ./ sidebar other menu -->
			
		<!-- ./ left sidebar -->