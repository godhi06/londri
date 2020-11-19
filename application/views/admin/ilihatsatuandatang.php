<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pesanan Satuan Datang | Admin</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("assets/js/configsatuandatang.js"); ?>"></script> <!-- Load file process.js -->

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
		    <script>   
		     var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js    </script>
    </head>
    <body>
        <!-- Content -->
<div class="card text-right">	
<input type="text" id="keyword">
<button type="button" id="btn-search">Search</button>
<a href="<?php echo base_url('admin/tampilsatuandatang'); ?>">Reset</a>
<br>
</div>

<div id="view">
  <?php $this->load->view('admin/lihatsatuandatang', array('kiloan'=>$satuan)); // Load file view.php dan kirim data siswanya ?>
</div>


    </body>
</html>
