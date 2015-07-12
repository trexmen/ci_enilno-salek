<!-- main content -->
			<div class="page-heading">
				<h1 class="caption">Matematika IPA 1</h1>
				<i class="glyphicon glyphicon-cog"></i>
				<ul class="nav nav-tabs nav-tabs-info">
					<li class="active"><a href="<?php echo base_url('masukkelas');?>">List Materi</a></li>
					<li><a href="<?php echo base_url('tugas');?>">List Tugas</a></li>
					<li><a href="<?php echo base_url('pengumuman');?>">List Pengumuman</a></li>
					<li><a href="<?php echo base_url('siswa');?>">List Siswa</a></li>
				</ul>
			</div>
			
<div class="wrapper">
				<div class="col-md-12 col-lg-12">
					<a data-toggle="modal" href="#myModal" class="btn btn-primary pull-right">Tambah Pengumuman</a>
				</div>
				<div class="panel panel-blank">
					<div class="panel-heading">
						<h3 class="panel-title">List Pengumuman</h3>
					</div>					
					<div class="panel-body">
						<div class="row">							
								<div class="col-md-6 col-lg-6">
									<div class="media media-primary">
										<a href="#" class="pull-left">
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">1. Pengumpulan Tugas</h4></a>
											<span class="span-block">Jangan lupa tugas matematika minggu depan dikumpulkan..</span>
											<br/>
											<span class="pull-right">Update : 08 Juli 2015 03:15:19</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="media media-primary">
										<a href="#" class="pull-left">
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">2. Tugas Minggu Depan</h4></a>
											<span class="span-block">Untuk tugas minggu depan, sudah Bapak Upload.selamat mengerajakan...</span>
											<span class="pull-right">Update : 08 Juli 2015 03:15:19</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-6">
									<div class="media media-primary">
										<a href="#" class="pull-left">
											<img class="media-object img-circle img-avatar" src="<?php echo base_url();?>images/elang-th-02.jpg">
										</a>
										<div class="media-body">
											<a href="<?php echo base_url('masukkelas');?>"><h4 class="media-heading">3. Minggu Depan Diliburkan</h4></a>
											<span class="span-block">Minggu depan Bapak tidak masuk, jadi harap belajar mandiri..</span>
											<br/>
											<span class="pull-right">Update : 08 Juli 2015 03:15:19</span>
										</div>
									</div>
								</div>						
														
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
				<hr />
		
				
			</div>
		<!-- ./ main content -->

		<div id="myModal" class="modal modal-success fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Tambah Pengumuman</h4>
					</div>
					<div class="modal-body">
						<label>Judul Pengumuman</label>
						<input type="text" name="nama_kelas" class="form-control mr" placeholder="Masukan Judul Pengumuman">
						
						<label>Nama Kelas</label>
						<input type="text" name="nama_kelas" class="form-control mr" value="Matematika IPA 1">

						<label>Isi Pengumuman</label>
						<textarea id="yellow-textarea" name="yellow-textarea" class="form-control yellow-editor" rows="2"></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>		