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
					<a data-toggle="modal" href="#myModal" class="btn btn-primary pull-right">Tambah Tugas</a>
				</div>
				<div class="panel panel-blank">
					<div class="panel-heading">
						<h3 class="panel-title">List Tugas</h3>
					</div>					
					<div class="panel-body">
						<div class="row">							
							<div class="col-md-6 col-lg-6">
								<div class="panel panel-dark panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">1. Integral
										<button type="button" class="btn btn-danger pull-right" style="margin: 10px 5px 0 0 !important;">Hapus</button>
										<button type="button" class="btn btn-success pull-right" style="margin: 10px 5px 0 0 !important;">Download</button>
										</h3>
									</div>
									<div class="panel-body">
										<p>Pembahasan Integral dalam mata pelajaran Matematika</p>
										<span class="pull-right">Update : 08 Juli 2015 03:14:23</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="panel panel-dark panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">2. Integral
										<button type="button" class="btn btn-danger pull-right" style="margin: 10px 5px 0 0 !important;">Hapus</button>
										<button type="button" class="btn btn-success pull-right" style="margin: 10px 5px 0 0 !important;">Download</button>
										</h3>
									</div>
									<div class="panel-body">
										<p>Pembahasan Integral dalam mata pelajaran Matematika</p>
										<span class="pull-right">Update : 08 Juli 2015 03:14:23</span>
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
						<h4 class="modal-title">Tambah Tugas</h4>
					</div>
					<div class="modal-body">
						<label>Judul Tugas</label>
						<input type="text" name="judul_materi" class="form-control mr" placeholder="Masukan Judul Materi">

						<label>Deskripsi</label>
						<textarea id="yellow-textarea" name="deskripsi" class="form-control yellow-editor" rows="2"></textarea>
						<br/>
						
						<label>File Tugas</label>
						<input type="file" name="fupload">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>		