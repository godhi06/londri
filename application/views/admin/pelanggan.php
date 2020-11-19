<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pelanggan| Admin</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
			
			.navbar {
				padding: 15px 10px;
				background: #fff;
				border: none;
				border-radius: 0;
				margin-bottom: 40px;
				box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
			}
		</style>
    </head>
    <body>
        <!-- Content -->
		
		<h3>Data Pelanggan</h3>

		<?php if (empty($pelanggan)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th>Nama </th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Nomor Telepon</th>
					</tr>
					<?php 
						$no = 1;
					foreach($pelanggan as $f){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++; ?></td>
						
						<td class="align-middle "><?php echo $f->nama_lengkap ?></td>
						<td class="align-middle "><?php echo $f->jenis_kelamin ?></td>
					
						<td class="align-middle "><?php echo $f->alamat ?></td>
						<td class="align-middle "><?php echo $f->no_telepon ?></td>
						 						
					</tr>
					<?php } ?>
							</table>
		</div>
		<div id="form-modal" class="modal fade">        
			<div class="modal-dialog">            
				<div class="modal-content">                
					<div class="modal-header">                    
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                    
						<h4 class="modal-title">Tambah Barang<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body">
						<div id="pesan" class="alert alert-danger"></div>                    
							<form action="<?php echo base_url('barang/input'); ?>" enctype="multipart/form-data" method="post">                           
								<div class="form-group">                            
									<label>Nama Barang</label>                            
										<input type="text" class="form-control" id="jdl" name="namabarang" placeholder="Judul Prosedur" required>                        
								</div>                        
								<div class="md-form">
								  <label for="isi">Harga Barang</label>
									<div class="form-group shadow-textarea">
									<textarea class="form-control z-depth-1" name="harga" id="exampleFormControlTextarea6" rows="3" placeholder="Proses prosedurnya"></textarea>
									</div>
								</div>                      
								</br>
								<div style="text-align: right;">
									<button type="submit" class="btn btn-primary" id="btn-simpan">Submit</button> 
								</div>
							</form>                
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
</div>

	
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
    </body>
</html>
