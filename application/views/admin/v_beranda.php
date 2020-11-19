<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<html lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Beranda | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/admin/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/admin/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
		</style>
    </head>
    <body>
        <!-- Content -->
		<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">            
		<span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
		<h2>Daftar Draft Informasi</h2>&nbsp
		<center> </center>
		<div class="table-responsive">
			<table class="table table-bordered" cellspacing="0">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">ID Informasi</th>
						<th class="text-center">Judul</th>
						<th class="text-center">Tipe</th>
						<th class="text-center">Gambar</th>
						<th class="text-center">Isi</th>
						<th class="text-center">Status</th>
						<th class="text-center">Tanggal Terbit</th>
						<th class="text-center">Jam Terbit</th>
						<th colspan="4" class="text-center"><span class="glyphicon glyphicon-cog"> Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($informasi2 as $i){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++ ?></td>
						<td class="align-middle"><?php echo $i['Id_Informasi'] ?></td>
						<td class="align-middle"><?php echo $i['Judul'] ?></td>
						<td class="align-middle"><?php echo $i['Tipe'] ?></td>
						<td class="align-middle"><?php echo '<img src="' . base_url().'assets/upload/' . $i['Gambar'] . '"  height="100" width="100"/>'; ?></td>
						<td class="align-middle"><?php echo $i['Isi'] ?></td>
						<td class="align-middle"><?php echo $i['Status'] ?></td>
						<td class="align-middle"><?php echo $i['Tgl_Terbit'] ?></td>
						<td class="align-middle"><?php echo $i['Jam_Terbit'] ?></td>
						<td class="align-middle text-center">   
							<a href="<?php echo site_url('info/edit/'.$i['Id_Informasi']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">   
							<a href="<?php echo base_url().'info/posting/'.$i['Id_Informasi'] ?>" button class="btn btn-md btn-primary" type="submit"><span class="glyphicon glyphicon-globe">Posting</button></a>
						</td>
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('info/hapus/'.$i['Id_Informasi']) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>
						</td>
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('info/hapus_gambar/'.$i['Id_Informasi']) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus_Gambar</a>
						</td>						
					</tr>
					<?php } ?>
			</table>
		</div>
		<h2>Daftar Posting Informasi</h2>&nbsp
		<center> </center>
		<div class="table-responsive">
			<table class="table table-bordered" cellspacing="0">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">ID Informasi</th>
						<th class="text-center">Judul</th>
						<th class="text-center">Tipe</th>
						<th class="text-center">Gambar</th>
						<th class="text-center">Isi</th>
						<th class="text-center">Status</th>
						<th class="text-center">Tanggal Terbit</th>
						<th class="text-center">Jam Terbit</th>
						<th colspan="4" class="text-center"><span class="glyphicon glyphicon-cog"> Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($informasi as $i){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++ ?></td>
						<td class="align-middle"><?php echo $i['Id_Informasi'] ?></td>
						<td class="align-middle"><?php echo $i['Judul'] ?></td>
						<td class="align-middle"><?php echo $i['Tipe'] ?></td>
						<td class="align-middle"><?php echo '<img src="' . base_url().'assets/upload/' . $i['Gambar'] . '"  height="100" width="100"/>'; ?></td>
						<td class="align-middle"><?php echo $i['Isi'] ?></td>
						<td class="align-middle"><?php echo $i['Status'] ?></td>
						<td class="align-middle"><?php echo $i['Tgl_Terbit'] ?></td>
						<td class="align-middle"><?php echo $i['Jam_Terbit'] ?></td>
						<td class="align-middle text-center">   
							<a href="<?php echo site_url('info/edit/'.$i['Id_Informasi']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">   
							<a href="<?php echo base_url().'info/draft/'.$i['Id_Informasi'] ?>" button class="btn btn-md btn-primary" type="submit"><span class="glyphicon glyphicon-minus-sign">Draft</button></a>
						</td>
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('info/hapus/'.$i['Id_Informasi']) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>
						</td>
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('info/hapus_gambar/'.$i['Id_Informasi']) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus_Gambar</a>
						</td>						
					</tr>
					<?php } ?>
			</table>
		</div>
		<div id="form-modal" class="modal fade">        
			<div class="modal-dialog">            
				<div class="modal-content">                
					<div class="modal-header">                    
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                    
						<h4 class="modal-title">Tambah Draft Informasi<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body"> 
							<form action="<?php echo base_url('info/do_upload'); ?>" enctype="multipart/form-data" method="post">                        
								<div class="form-group">                            
									<label>ID Informasi</label>
										<input type="text" class="form-control" id="id_info" name="id_info" value="Inf<?php date_default_timezone_set('Asia/Jakarta'); echo date('hisdmy')?><?php echo $no++ ?>" readonly="readonly" />                  
								</div>                        
								<div class="form-group">                            
									<label>Judul</label>                            
										<input type="text" class="form-control" id="judul" name="jdl" placeholder="Judul Informasi" required>                        
								</div>                    
								<div class="form-group">                            
									<label>Tipe Informasi</label>                            
										<select id="tipe" name="tipe" class="form-control" required>                                
											<option value="">-- Pilih Tipe Informasi--</option>                                
											<option value="Penting">-- Penting --</option>                                
											<option value="Biasa">-- Biasa --</option>
										</select>                         
								</div>                        
								<div class="form-group">                            
									<label for="gmbr">Gambar</label>                            
										<input type="file" id="gmbr" name="gmbr" placeholder="Gambar">                  
								</div>
								<div class="md-form">
								  <label for="isi">Isi</label>
									<div class="form-group shadow-textarea">
									<textarea class="form-control z-depth-1" name="isi" id="exampleFormControlTextarea6" rows="3" placeholder="Tulis isi berita disini"></textarea>
								</div></br>
								<div style="text-align: right;">
									<button type="submit" class="btn btn-primary" id="btn-simpan">Submit</button>    
								</div>
							</form>              
					</div>
				</div>            
			</div>       
		</div>
    </div>
	
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h2 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin menghapus ini?</h2>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span>
			</button>
		  </div>
		  <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
		  <div class="modal-footer">
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
		  </div>
		</div>
	  </div>
	</div>
</div>


	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify();
	});
	</script>

	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
	
	</body>
</html>
