<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cucian | Admin</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		 <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
			
			
		</style>
		<script type="text/javascript">
			  $(document).ready(function(){
    $('#masuk').datepicker({
        dateFormat: "d-m-yy",
        showOn:'both',
        changeYear:true,
        changeMonth:true,
        onSelect:function(selectedDate, inst){
            var date = $.datepicker.parseDate(inst.settings.dateFormat ||$.datepicker._defaults.dateFormat,selectedDate);
            var hari = 2; 
            date.setDate(date.getDate() + hari);
            $('#keluar').datepicker('option', 'minDate', date);
            $('#keluar').val($.datepicker.formatDate("d-m-yy", date));
        }
    });
    $('#keluar').datepicker({
        dateFormat:"d-m-yy",
        
       
    });
});
      

  
		</script>
    </head>
    <body>
        <!-- Content -->
		 <div class="container" style="margin-top:50px;">
    <div class="row mt-3">
        <div class="col">
        	<center>
          <a href="<?php echo site_url('admin/cucian')?>"  class='btn btn-primary btn-md'>Kiloan</a>  
          <a href="<?php echo base_url("admin/cuciansatuan"); ?>"  class='btn btn-primary btn-md'>Satuan</a>
        
        </center>
            <div class="card">
                <div class="card-body">

                    <form action="<?php echo base_url('admin/inkilo')?>" method="post">

                    <div class="judul">
                    	
                    		<h1>Cuci Kiloan</h1>
                    	
                    </div>
                    &nbsp
                   
                    <div class="form-group">
                            <label for="nohp">Kode Order</label>
                            <input type="text" name='kode_kiloan' class="form-control" value="<?= $kodeunik; ?>" readonly="Readonly">
                           

                        </div>
                  

                   <div class="form-group">
                            <label for="nohp">Nama</label>
                            <input type="text" class="form-control" id="nama"  name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>

                    <div class="form-group">
                            <label for="nohp">Alamat</label>
                            <input type="text" class="form-control" id="alamat"  name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                    <div class="form-group">
                            <label for="nohp">No Telepon</label>
                            <input type="text" class="form-control" id="nohp"  name="nohp">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Berat Kiloan</label>
                            
                            <input type="number"  step="0.01" class="form-control" id="berat"  name="berat" >
                            <small class="form-text text-danger"><?= form_error('berat') ?>.</small>
                        </div>
                        <div class="form-group" >
                            <label for="username"  >Tanggal Masuk</label>
                            <input class="form-control" name="masuk" type="text" id="masuk" onkeyup="sum();">
                            
                            <small class="form-text text-danger"><?= form_error('masuk') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Estimasi Tanggal Ambil (2 hari)</label>
                            <input class="form-control" name="ambil" type="text" id="keluar" readonly>
                            <small class="form-text text-danger"><?= form_error('ambil') ?>.</small>
                        </div>
                     
                        <center>
                        <button  type="submit" name="tambah" class="btn btn-primary">Pesan</button>
                        </center>
                    </form>
                </div>
               
            </div>
            	
        </div>
    </div>
</div>
    </body>
</html>
