<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kiloan | Admin</title>
        
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
		
		<h2>Daftar Pesanan Kiloan</h2>

		 <?php if (empty($kiloan)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						
						<th>Kode Order</th>
						<th>Layanan</th>
						<th>Username</th>

						<th>Nama</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Tanggal Masuk</th>
						<th>Tanggal Ambil</th>
						<th>status</th>
						<th>Total Berat Cucian (kg)</th>
						<th>Total Harga (Rp)</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
					foreach($kiloan as $f){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++; ?></td>
						<td class="align-middle "><?php echo $f['Kode_order']?></td>
						<td class="align-middle "><?php echo $f['jenis_layanan']?></td>
						<td class="align-middle "><?php echo $f['username']?></td>
						<td class="align-middle "><?php echo $f['nama']?></td>
						<td class="align-middle "><?php echo $f['Alamat'] ?></td>
						<td class="align-middle "><?php echo $f['No_Hp'] ?></td>
						<td class="align-middle "><?php  $tanggal = $f['Tanggal_masuk']; echo date("d-m-Y", strtotime($tanggal))   ; ?></td>
						<td class="align-middle "><?php  $tanggal = $f['Tanggal_ambil']; echo date("d-m-Y", strtotime($tanggal))   ; ?></td>
						<td class="align-middle "><?php echo $f['Status'] ?></td>
						<td class="align-middle "><?php echo $f['Total_berat_cucian'] ?> kg</td>
						<td class="align-middle ">Rp <?php echo $f['Harga']?></td>
						<td class="align-middle text-center">       
							<a href="<?php echo site_url('lihatkiloan/edit/'.$f['Id_Kiloan']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
						</td>
						<td class="align-middle text-center">          
							<a onclick="deleteConfirm('<?php echo site_url('lihatkiloan/hapus/'.$f['Id_Kiloan']) ?>')" href="#!" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>        
						</td> 						
					</tr>
				<?php } ?>
			</table>
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
