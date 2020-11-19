	<!DOCTYPE html>
<html>
<head>
 <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style type="text/css">
  .navbar-inverse{
background-color:  #4A93FF;
}

.button{
    width: 100%;
    height: 50px;
  }

  


.right{
  position: relative;
    float: right;
    display: block;
  }

#kanan {
    position: relative;
    width: 570px;
    background-color: #FFFF00;
    float: left;
}

nav{
 position:absolute;
    
 
    width:100%; 
}
  
  </style>

 </head>



<body>
 
<nav class="navbar navbar-expand-lg navbar-light navbar-inverse ">
      
  <a class="navbar-brand text-white" href="<?php echo base_url('londri') ?>">
  <h1 style="font-size: 40px;">Betawi Laundry</h1>
  </a>
  <button class="navbar-toggler right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  


  <div class="button">
  
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active ">
    <a class="nav-link text-white" href="<?php echo site_url('londri/pembayaran/'.$username)?>">Cara Transaksi</a>
    </li>
    <li class="nav-item active ">
    <a class="nav-link text-white" href="<?php echo site_url('londri/pemesanan/'.$username)?>">Pesanan kiloan</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link text-white" href="<?php echo site_url('londri/satuan/'.$username)?>">Pesanan satuan</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link text-white" href="<?php echo base_url("Login/logout"); ?>">Logout</a>
    </li>

    
  </ul>
  </div>
</div>
  

</nav>

</body>

</html>