<!DOCTYPE html>
<html>
<head>
    <title>Input Cuci Kiloan</title>
  <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script>
  
        /*$(function(){
    var pickerOpts = {
        dateFormat: "d-m-yy"
    };  
    $("#taro").datepicker(pickerOpts);
});*/

$(document).ready(function(){
	$('#taro').datepicker({
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
      





 function goBack() {
        window.history.back();
    }

  

  </script>

<style type="text/css">
	.judul{
		height: 50px;
		width:100%;
		background: #4A93FF;
		text-align: center;
	}




</style>

</head>
<body>
    
<button onclick="goBack()">Kembali</button>

&nbsp
<br/>
<br/>



  <div class="container" style="margin-top:50px;">
    <div class="row mt-3">
        <div class="col">
        
            <div class="card">
                <div class="card-body">

                    <form action="<?php echo base_url('Londri/inkilo/'.$username)?>" method="post">

                    <div class="judul">
                    	
                    		<h1>Cuci Kiloan</h1>
                    	
                    </div>
                    &nbsp
                    <?php foreach($profil as $s){ ?>
                    <div class="form-group">
                            <label for="nohp">Kode Order</label>
                            <input type="text" name='kode_kiloan' class="form-control" value="<?= $kodeunik; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('kode_kiloan') ?>.</small>
                        </div>
                    <div class="form-group">
                            <label for="nohp">Username</label>
                            <input type="text" class="form-control" id="nama" value="<?php echo $s->username; ?> " name="username"  readonly="readonly">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>

                    <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama </label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $s->nama_lengkap; ?> "  readonly="readonly">
            </div>
        </div>

                    <div class="form-group">
                            <label for="nohp">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="<?php echo $s->alamat; ?> " name="alamat" readonly="readonly">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                    <div class="form-group">
                            <label for="nohp">No Telepon</label>
                            <input type="text" class="form-control" id="nohp" value="<?php echo $s->no_telepon; ?> " name="nohp" readonly="readonly">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Berat Kiloan</label>
                            
                            <input type="number"  step="0.01" class="form-control" id="berat"  name="berat"  >
                            <small class="form-text text-danger"><?= form_error('berat') ?>.</small>
                        </div>
                        <div class="form-group" >
                            <label for="username"  >Tanggal Masuk</label>
                            <input class="form-control" name="masuk" type="text"  id="taro" onkeyup="sum();">
                            
                            <small class="form-text text-danger"><?= form_error('masuk') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Estimasi Tanggal Ambil (2 hari)</label>
                            <input class="form-control" name="ambil" type="text"  id="keluar" readonly>
                            <small class="form-text text-danger"><?= form_error('ambil') ?>.</small>
                        </div>
                     
                        <center>
                        <button  type="submit" name="tambah" class="btn btn-primary">Pesan</button>
                        </center>
                    </form>
                </div>
                <?php
                } ?>
            </div>
            	
        </div>
    </div>
</div>
&nbsp
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</body>
</html>