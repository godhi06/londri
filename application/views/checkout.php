<head>
    <title>Konfirmasi Pemesanan</title>
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  <link rel="stylesheet" href="/resources/demos/style.css">
  

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


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

 function goBack() {
        window.history.back();
    }
</script>
</head>

<body>

<button onclick="goBack()">Kembali</button>


  <div class="container" style="margin-top:50px;">
    <div class="row mt-3">
        <div class="col">
        
            <div class="card">
                <div class="card-body">


<h2 style="text-align: center">Konfirmasi Pemesanan</h2>


<?php
$grand_total = 0;
$sum=0;
$i = 1;

$min = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
				$grand_total = $grand_total + $item['subtotal'];
                $sum = $sum + $item['qty'];
			}
		echo "<h4>Total harga: Rp.".($grand_total)."</h4>";
        echo "<h4>Total Kuantitas: ".($sum)."</h4>";	
?>


<form class="form-horizontal" action="<?php echo base_url('Londri/insatu/'.$username)?>" method="post" name="frmCO" id="frmCO">
<?php foreach($profil as $s){ ?>
    <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Kode Order</label>
            <div class="col-xs-9">
                <input type="text" name='kode_satuan' class="form-control" value="<?= $kodeunik; ?>" readonly>
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Username</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="username" id="email" value="<?php echo $s->username; ?> "  readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama </label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $s->nama_lengkap; ?> "  readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $s->alamat; ?> "  readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">No Telepon</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telp" id="telp" value="<?php echo $s->no_telepon; ?> "  readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Total Kuantitas</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="kuantitas" id="telp" value="<?php echo ($sum); ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Total Harga</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="harga" id="telp" value="<?php echo ($grand_total); ?>" readonly="readonly">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Tanggal Masuk</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="masuk" id="masuk" onkeyup="sum();">
                <small class="form-text text-danger"><?= form_error('masuk') ?>.</small>
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Estimasi Tanggal Ambil (2 hari)</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="ambil" id="keluar" readonly>
                <small class="form-text text-danger"><?= form_error('ambil') ?>.</small>
            </div>
        </div>
        
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit"  class="btn btn-primary">Pesan</button>
            </div>
        </div>
        <?php
                } ?>
    </form>
    <?php
	}
	else
		{
			echo "<h5>Shopping Cart masih kosong</h5>";	
		}
	?>
</div>
</div>
</div>
</div>
</div>
&nbsp
</body>