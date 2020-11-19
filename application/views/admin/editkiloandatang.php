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
		<?php
			
		 foreach($kiloan as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'Lihatkiloan/updatedatang'; ?>" enctype="multipart/form-data" method="post">      
							  
								<div class="form-group">                       
				<label>ID kiloan</label>
					<input type="text" class="form-control" id="id" name="id" value="<?php echo $d->Id_Kiloan  ?>" readonly="readonly" />                  
			</div>       

			<div class="form-group">                       
				<label>Alamat</label>
					<input type="text" class="form-control" id="id" name="alamat" value="<?php echo $d->Alamat  ?>" readonly="readonly" />  
			</div>   
			<div class="form-group">                       
				<label>No HP</label>
					<input type="text" class="form-control" id="id" name="no_hp" value="<?php echo $d->No_Hp  ?>" readonly="readonly" />  
			</div>   
			<div class="form-group">                       
				<label>Tanggal_Masuk</label>
					<input type="text" class="form-control" id="id" name="tanggal_masuk" value="<?php echo $d->Tanggal_masuk  ?>" readonly="readonly" />  
			</div>    
			<div class="form-group">                       
				<label>Tanggal_Ambil</label>
					<input type="text" class="form-control" id="id" name="tanggal_ambil" value="<?php echo $d->Tanggal_ambil  ?>" readonly="readonly" />  
			</div>
			<div class="form-group">                       
				<label>Status</label>
					<select id="tipe" name="tipe" class="form-control" required>
						<option value="">-- Pilih Status--</option>
											<option><?php echo $d->Status ?></option>
											
											<option value="Sedang di jemput">-- Sedang di jemput --</option>

											<option value="Sedang di proses">-- Sedang di proses --</option>

											<option value="Sedang di antar">-- Sedang di antar --</option>                                
											<option value="Selesai">-- Selesai --</option>
										</select>  
			</div>   
			<div class="form-group">                       
				<label>Total_Berat_Cucian</label>
					<input type="number" step="0.01" class="form-control" id="id" name="total_berat_cucian" value="<?php echo $d->Total_berat_cucian  ?>" />  
			</div> 
			                                  
			                      
			
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	