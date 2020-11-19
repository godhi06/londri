<!DOCTYPE html>
<html>
<head>
	
	<link href="<?php echo base_url('assets/css/bootstrap..css') ?>" rel="stylesheet">
     <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<style type="text/css">
	
	.form-group .row{
	margin-left: 400;
}

@media (max-width: 375px) {
	.form-group{
	margin-right: 200%;
}
}

</style>


</head>


		

		

<div class="container" style="margin-top:50px;">
    <div class="row mt-3">
        <div class="col">
        
            <div class="card">
                <div class="card-body">
               
                    <form>
                    
<?php
                    foreach ($kiloan as $e) {
                    ?>

		 <h1 style="text-align: center;font-size: 30px">Nota Transaksi Betawi Laundry</h1>
     <h1 style="text-align: center; font-size: 20px">Jalan Kalibata Selatan No.22 A</h1>
     <h1 style="text-align: center; font-size: 20px">0813 1926 4048</h1>
	
    &nbsp



					
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama : </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="nama" id="staticEmail" value="<?php echo $e->Nama  ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat : </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="alamat" id="staticEmail" value="<?php echo $e->Alamat  ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Telepon : </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="nohp" id="staticEmail" value="<?php echo $e->No_Hp  ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Terima : </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="terima" id="staticEmail" value="<?php echo $e->Tanggal_masuk  ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Selesai : </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="ambil" id="staticEmail" value="<?php echo $e->Tanggal_ambil  ?>">
    </div>
    
  </div>
  
  
                 
</form>

                </div>
            </div>
<a href="<?php echo base_url().'Londri/cetak'?>" button class="btn btn-primary pull-right" type="submit"><span class="glyphicon glyphicon-print"> Cetak Nota</span></a>

            <?php
                    }
                    ?>
            
            	
        </div>
    </div>
</div>
&nbsp




</html>