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

					<div class="list-group list-group-primary">
						<div class="list-group-heading">
							<span class="title">List Siswa
								<form class="navbar-form navbar-right" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Masukan keyword">
									</div>
									<button type="submit" class="btn btn-primary">Search</button>
								</form>
							</span>
						</div>
						<a class="list-group-item custom-1" href="#">
							<img src="images/jeun-th-01.jpg" alt="Geunevere" class="img-circle img-avatar pull-left mr">
							<h4 class="user-id">Geunevere</h4>
							<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
						</a>
						<a class="list-group-item custom-1" href="#">
							<img src="images/elang-th-01.jpg" alt="Elang" class="img-circle img-avatar pull-left mr">
							<h4 class="user-id">Elang</h4>
							<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
						</a>
						<a class="list-group-item custom-1" href="#">
							<img src="images/jeun-elang-th-01.jpg" alt="Seraphiel" class="img-circle img-avatar pull-left mr">
							<h4 class="user-id">Seraphiel</h4>
							<small class="online-status">Lorem ipsum dolor sit amet adipiscing</small>
						</a>
					</div>

				</div>				
			</div>
		<!-- ./ main content -->

		<div id="myModal" class="modal modal-success fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Tambah Materi</h4>
					</div>
					<div class="modal-body">
						<label>Judul Materi</label>
						<input type="text" name="judul_materi" class="form-control mr" placeholder="Masukan Judul Materi">

						<label>Deskripsi</label>
						<textarea id="yellow-textarea" name="deskripsi" class="form-control yellow-editor" rows="2"></textarea>
						<br/>
						
						<label>File Materi</label>
						<input type="file" name="fupload">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>		