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
								<h3 class="panel-title">Buat Pengumuman</h3>
							</div>
							<div class="panel-body">

								<label>Judul Pengumuman</label>
								<input type="text" name="nama_kelas" class="form-control mr" placeholder="Masukan Judul Pengumuman">
								
								<label>Nama Kelas</label>
								<select class="form-control mr">
									<option>Matematika IPA 1</option>
									<option>Matematika IPA 2</option>
									<option>Matematika IPA 3</option>
									<option>Matematika IPS 1</option>
									<option>Matematika IPS 2</option>
								</select>

								<label>Isi Pengumuman</label>
								<textarea id="yellow-textarea" name="yellow-textarea" class="form-control yellow-editor" rows="2"></textarea>
								<br/>

								<button type="button" class="btn btn-success btn-sm">Simpan</button>
								<button type="button" class="btn btn-danger btn-sm">Batal</button>
						
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
				
			</div>
		<!-- ./ main content -->