<head>
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Satuan| Admin</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
      }
      
      .card{
        border-radius: 2px;
      }
      
    </style>
</head>
<body>
&nbsp
<br/>
<center>
          <a href="<?php echo site_url('admin/cucian')?>"  class='btn btn-primary btn-md'>Kiloan</a>  
          <a href="<?php echo base_url("admin/cuciansatuan"); ?>"  class='btn btn-primary btn-md'>Satuan</a>
        
        </center>
        &nbsp
<h6 style="font-size: 24pt; text-align: center;">Daftar Cuci Satuan</h6>
&nbsp
<div class='Card'>
<a href="<?php echo base_url()?>admin/tampil_cucian"  class ='btn btn-sm btn-primary' >Lihat Cucian</a>
<br/>
</div>
&nbsp


<div class="container-fluid">
         <form method="post" action="<?php echo base_url();?>admin/tambah" method="post" accept-charset="utf-8">
 <button type="submit" class="btn btn-sm btn-success"><i ></i> Pilih Cuci</button>
 <br/>
 <br/>
    <div class="row">
    

                 <?php
                 $i=1;
    foreach ($barang as $b) {
?>

  <div class="col-md-2 " >
  
            <div class="card">
           
                <div class="card border-primary mb-6" style="max-width: 50rem;">
                <div class="card-body text-primary">
                  <h4 class="card-title">
                    
                    <a href="#"><?php echo $b['Nama_barang'];?></a>
                  </h4>
                  <h5>Rp. <?php echo ($b['Harga_barang']);?></h5>
                  <h5>Kuantitas : </h5>
                   
                <!-- <div class="card-footer ">  -->
                
                  <input type="hidden" name="id[]" value="<?php echo $b['Id_barang']; ?>" />
                  <input type="hidden" name="nama[]" value="<?php echo $b['Nama_barang']; ?>" />
                  <input type="hidden" name="harga[]" value="<?php echo $b['Harga_barang']; ?>" />
                  <input type="number" name="qty[]" min="1" />
                 
                </div>
                </div>
                
                <!-- </div> -->
            </div>
                &nbsp
  </div>

            <?php
    }
?>

                </form>
</div>


</body>

