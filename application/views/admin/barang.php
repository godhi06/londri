<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Barang | Admin</title>
        
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

		<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success pull-right">            
		<span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
		
		<h3>Data Barang</h3>
		
            <?php if (empty($barang)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
            
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						
						<th>Nama Barang</th>
						<th>Harga Barang</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					  <?php 
						$no = 1;
					foreach($barang as $f){ 
					?>
					<tr>

						<td class="align-middle text-center"><?php echo $no++; ?></td>
						<td class="align-middle "><?php echo $f->Nama_barang ?></td>
						<td class="align-middle "><?php echo $f->Harga_barang ?></td>
					
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('barang/edit/'.$f->Id_barang) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('barang/hapus/'.$f->Id_barang) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
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
						<h4 class="modal-title">Tambah Barang<span id="modal-title"></span></h4>                
					</div>                
					<div class="modal-body">
						<form action="<?php echo base_url('barang/input'); ?>" enctype="multipart/form-data" method="post">
						              
								                     
								<div class="form-group">                            
									<label>Nama Barang</label>                            
										<input type="text" class="form-control" id="jdl" name="namabarang" placeholder="nama barang" required>                        
								</div>                        
								<div class="md-form">
								  <label for="isi">Harga Barang</label>
									<div class="form-group shadow-textarea">
									<input class="form-control z-depth-1" name="harga"  type="number" placeholder="harga barang"></textarea>
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

	
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
    </body>
</html>
