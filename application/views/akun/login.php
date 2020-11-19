<head>
  <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
     <link href="<?php echo base_url('assets/js/jquery-ui.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
    #card-1 {
    
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 359px;
    margin: 0.1rem auto 8.4rem auto;
    width: 333px;
}

@media (max-width: 414) {
    .geser{
      margin-right: -390px; 
    }
    
  }

#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 1px;
      padding-bottom: 23px;
      padding-top: 13px;
}
</style>
  
  <script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  });


</script>
</head>


<body>
&nbsp
<marquee bgcolor='#157FFB' style="color: white";>Selamat Datang di Betawi laundry </marquee>
&nbsp


<center>
<div class="container-fluid "  style="float: center;">
  <div style="margin-left: 6px ;">
      <div class="row">
      <div class="col-md-6"  >
        <div class ="geser"  >

        <div class="container">
        <div id="card1"   >
    
  
        <div class="card-body">
        <form class="form-horizontal" action="<?php echo base_url('Londri/hasil'); ?>" method="get">
    
                <h3><label>Cek Status Pesanan</label></h3><br/>
                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Masukkan Kode order" required style="width: 35%;"><br/>

                <button type="submit" class="btn btn-primary op">Submit</button>
            </form>
                <br/>
                <br/>
               
            </div>
        </div>
      </div>
    </div>
  </div>


      

      
      
<div class="col-md-6">

   
<div style="margin-right: 600px; ">
  <div style="margin-right: 370px;">
  <div style="margin-right: 600px;">
          <div id="card-1" >
    <div id="card-content">
      <div id="card-title">
<center>

<h1>Login</h1>
</center>
&nbsp
<center>

<center><strong><?php echo $this->session->flashdata('sukses'); ?></strong></center>
<form action="<?php echo base_url('Login/validasi') ?>" method="post">
   
    <input style="width: 75%; height: 12.92%" type="text" placeholder="Username" name="username" required>
    <br/><br/>
    
    <input style="width: 75%; height: 12.92%" class="form-password" type="password" placeholder="Password" name="password" required>
    <br/><br/>

      <input type="checkbox" class="form-checkbox"> Show password
      <br/>
    <button  class="btn2" style="width: 65%; height: 10%; background-color: #36a9e1;" type="submit">Login</button>
</form>
    
  </center>
    <p align="center">
      Belum Memiliki Akun ?
      <a id="regeistBtn" class="register-lnk" href="<?php echo base_url('registrasi') ?>"> Daftar Sekarang</a>
    </p>
    <!-- <center><font size="4px" weight="bold">&copy Betawi Laundry 2019 by Eva Dwi Meliani</font></center> -->
</div>
 </div>
</div>
</div>
</div>
 </div>
 </div>
 </div>
 </div>
</center>




</body>

