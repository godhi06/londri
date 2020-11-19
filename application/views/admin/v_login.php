<!DOCTYPE html>
<html>
	<head>
		<title>Login | Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">
		<style>
			body {
				background-color: #C0E1FF;
				background-repeat: no-repeat;
			}
		</style>
        <script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-control').attr('type','text');
      }else{
        $('.form-control').attr('type','password');
      }
    });
  });
</script>
	</head>


    <div style="width: 350px; background: white; margin: 80px auto; padding: 30px 20px; border-radius: 6px;">
        <h2 style="text-align: center; font-style: bold;">Betawi Laundry</h4>
        <h5 style="text-align: center; margin-bottom: 20px;">Login - Admin</h5>
        <center><strong><?php echo $this->session->flashdata('sukses'); ?></strong></center>
        <form action="<?php echo base_url("Login_admin/validasi"); ?>" method="POST">
            <div class="form-group">
                <label>Username</label><br/>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required><br/>

                <label>Password</label><br/>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>


      <input type="checkbox" class="form-checkbox"> Show password
      <br/><br/>

                <button  class="btn2" style="width: 100%; background-color: #36a9e1;" type="submit">Login</button>

                <br/>
                <br/>

            </div>
            <center><font size="4px" weight="bold">&copy Betawi Laundry 2019 by Eva Dwi Meliani</font></center>
        </form>
    </div>
    </html>