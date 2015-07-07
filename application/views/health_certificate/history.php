<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="Laborator.co" />

	<title>Web Application Health Request</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/entypo/css/entypo.css"id="style-resource-2">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/entypo/css/animation.css" id="style-resource-3">	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/neon.css" id="style-resource-5">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" id="style-resource-6">	
	<script>
		//initial max/min attributes should be done serverside.
		$(document).ready(function(){			
			$('#date-from, #date-to').prop('min', function(){
				return new Date().toJSON().split('T')[0];
			});	
		});
		webshim.setOptions('forms', {
			lazyCustomMessages: true,
			addValidators: true
		});
		webshim.setOptions('forms-ext', {
			replaceUI: 'auto',
			types: 'date',
			date: {
				startView: 2,
				size: 2,
				classes: 'hide-spinbtns'
			}
		});
		
		//start polyfilling
		webshim.polyfill('forms forms-ext');			
	</script>
</head>
<body>
	<div class='row'>
		<div class='panel panel-primary'>		
			<div class='panel-heading' style='background-color: #0FB0CB;'>
				<div class='panel-title'>
					<strong>					
					<i class='entypo-archive'></i>Histori Permohonan Penerbitan HC
					</strong>
				</div>
				<div class='panel-options'>					
					<ul class="list-inline links-list pull-right">											
						<li>Selamat Datang,<?php echo $this->session->userdata('username');?></li>		
						<li class="sep"></li>
						<li>						
							<a href="<?php echo base_url("auth/logout");?>">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>										
				</div>
			</div>
			<div class='panel-body'>			
				<div class='panel-heading'>
					<div class='panel-title'>								
							List Data Permohonan Penerbitan HC
					</div>
					<div class='panel-options'>						
						 <a href="<?php echo base_url('health_certificate/request');?>" data-toggle='tooltip' data-placement='top' data-original-title='Tambah Permohonan Penerbitan HC'>Tambah Data Permohonan<i class='entypo-plus-squared'></i></a>
					</div>
				</div>
				<table class='table table-bordered table-responsive' id='mytable'>
					<thead>
						<tr>
							<th>No</th>							
							<th>Produk</th>
							<th>Nama UPI</th>							
							<th>Tanggal Pengajuan</th>
							<th>Tanggal Pengiriman</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>	
						<?php
						$no = 1;
						foreach ( $health_certificate->result() as $value ) {
							?>									
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $value->product_name;?></td>
								<td><?php echo $value->name_upi;?></td>
								<td><?php echo tgl_indo($value->created_date);?></td>
								<td><?php echo tgl_indo($value->delivery_date);?></td>
								<td><?php if($value->approve=="0") echo "Belum Diproses"; 
									else if($value->approve=="1") echo "Ditolak";
									else if($value->approve=="2") echo "Diterima";
									?>
								</td>
								<td width='5%'>
									<center>									
										<a href="<?php echo base_url("health_certificate/approve")."/".$value->health_certificate_id;?>" data-toggle='tooltip' data-placement='top' data-original-title='Lihat data permohonan'> 
											<i class='entypo-eye'></i>
										</a>
									</center>
								</td>
							</tr>
							<?php
							$no ++;
						}
						?>						
					</tbody>
					<tfoot>
						<tr>
							<th>No</th>							
							<th>Produk</th>
							<th>Nama UPI</th>							
							<th>Tanggal Pengajuan</th>
							<th>Tanggal Pengiriman</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>
				<span class="validate-has-error"><?php if(isset($message)) echo $message ; ?></span>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>assets/js/gsap/main-gsap.js" id="script-resource-1"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" id="script-resource-3"></script>
<script src="<?php echo base_url();?>assets/js/joinable.js" id="script-resource-4"></script>
<script src="<?php echo base_url();?>assets/js/resizeable.js" id="script-resource-5"></script>
<script src="<?php echo base_url();?>assets/js/neon-api.js" id="script-resource-6"></script>
<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-7"></script>
<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-8"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js" id="script-resource-7"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js" id="script-resource-7"></script>
<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url();?>assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-10"></script>
<script src="<?php echo base_url();?>assets/js/rickshaw/rickshaw.min.js" id="script-resource-11"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js" id="script-resource-7"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js" id="script-resource-8"></script>
<script src="<?php echo base_url();?>assets/js/select2/select2.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-tagsinput.min.js" id="script-resource-8"></script>
<script src="<?php echo base_url();?>assets/js/typeahead.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url();?>assets/js/selectboxit/jquery.selectBoxIt.min.js" id="script-resource-10"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mousewheel-3.0.4.pack.js" id="script-resource-10"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js" id="script-resource-11"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js" id="script-resource-12"></script>
<script src="<?php echo base_url();?>assets/js/raphael-min.js" id="script-resource-12"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js" id="script-resource-13"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker/moment.min.js" id="script-resource-14"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker/daterangepicker.js" id="script-resource-15"></script>
<script src="<?php echo base_url();?>assets/js/fileinput.js" id="script-resource-7"></script>
<script src="<?php echo base_url();?>assets/js/jquery.multi-select.js" id="script-resource-16"></script>
<script src="<?php echo base_url();?>assets/js/morris.min.js" id="script-resource-13"></script>
<script src="<?php echo base_url();?>assets/js/toastr.js" id="script-resource-14"></script>
<script src="<?php echo base_url();?>assets/js/neon-chat.js" id="script-resource-15"></script>
<script src="<?php echo base_url();?>assets/js/neon-custom.js" id="script-resource-16"></script>
<script src="<?php echo base_url();?>assets/js/neon-demo.js" id="script-resource-17"></script>
</body>
</html>