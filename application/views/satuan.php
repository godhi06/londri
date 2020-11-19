<!DOCTYPE html>
<html>
<head>
    <title>Input Cucian Satuan</title>
  <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  <link rel="stylesheet" href="/resources/demos/style.css">
  

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script>
  $(function(){
    var pickerOpts = {
        dateFormat: "d-m-yy"
    };  
    $("#masuk").datepicker(pickerOpts);
});

  $( function() {
    var pickerOpts = {
        dateFormat: "d-m-yy"
    };  
    $( "#keluar" ).datepicker(pickerOpts);
  } );

  function goBack() {
        window.history.back();
    }
  </script>

<style type="text/css">
	.judul{
		height: 50px;
		width:100%;
		background: #D7D2D2;
		text-align: center;
	}




</style>

</head>
<body>
&nbsp

<button onclick="goBack()">Kembali</button>


  <div class="container" style="margin-top:50px;">
    <div class="row mt-3">
        <div class="col">
        
            <div class="card">
                <div class="card-body">

                    <form action="<?php echo base_url('admin/tambah')?>" method="post">

                    <div class="judul">
                    	
                    		<h1>Cuci Satuan</h1>
                    	
                    </div>
                    &nbsp


<?php
    if ($cart = $this->cart->contents())
        {
            ?>
 
                    <table class="table">

                    

<tr id= "main_heading">
<td width="2%">No</td>
<td width="33%">Barang</td>
<td width="27%">Harga</td>
<td width="8%">Kuantitas</td>
<td width="20%">Jumlah</td>
<td width="10%">Hapus</td>
</tr>


<?php
// Create form and send all values in "shopping/update_cart" function.

$i = 1;

foreach ($barang as $b ) :
 

?>
<input type="hidden" name="cart[<?php echo $b['Id_barang'];?>][kuantitas]" value="<?php echo $b['kuantitas'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td>Rp. <?php echo $b['Nama_barang']; ?></td>
<td>Rp. <?php echo number_format($b['Harga_barang'], 0,",","."); ?></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $b['Id_barang'];?>][qty]" value="<?php echo $b['qty'];?>" /></td>
</tr>

<?php endforeach; ?>



</table>
<?php
                    }
                    ?>


<td colspan="3"><b>Order Total:</b></td>
<br/>
<td colspan="3"><b>Total Harga: </b></td>



                    <div class="form-group">
                            <label for="nohp">Nama</label>
                            <input type="text" class="form-control" id="nohp" name="nama">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>

                    <div class="form-group">
                            <label for="nohp">Alamat</label>
                            <input type="text" class="form-control" id="nohp" name="alamat">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                    <div class="form-group">
                            <label for="nohp">No Telepon</label>
                            <input type="text" class="form-control" id="nohp" name="nohp">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group" >
                            <label for="username"  >Tanggal Masuk</label>
                            <input class="form-control" name="masuk" type="text" id="masuk">
                            
                            <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Tanggal Ambil</label>
                            <input class="form-control" name="ambil" type="text" id="keluar">
                            <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                        </div>

                        
                     
                       
                     



                        <center>
                        <button href="<?php base_url(); ?>Londri/tambah" type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                        </center>
                    </form>
                </div>
            </div>
            	
        </div>
    </div>
</div>
&nbsp

</body>
</html>