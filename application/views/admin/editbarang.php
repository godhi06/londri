<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Umum | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
	</br></br>
		<?php foreach($barang as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'Barang/update'; ?>" enctype="multipart/form-data" method="post">      
							    
								<div class="form-group">                       
				<label>ID barang</label>
					<input type="text" class="form-control" id="id" name="id" value="<?php echo $d->Id_barang  ?>" readonly="readonly" />                  
			</div>                                        
			<div class="form-group">                            
				<label>Nama Barang</label>                            
					<input type="text" class="form-control" id="jdl" name="namabarang" value="<?php echo $d->Nama_barang ?>" required>                        
			</div>                        
			<div class="form-group">                           
				<label>Harga Barang</label>
					<input type="text"class="form-control" id="ktrngn" name="harga" value="<?php echo $d->Harga_barang ?>" required>                  
			</div>                        
			
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	