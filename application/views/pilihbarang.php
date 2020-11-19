<head>
  <title>Daftar Cuci Satuan</title>
  <style type="text/css">

  </style>
  <script type="text/javascript">
    
 function goBack() {
        window.history.back();
    }
  </script>
</head>

<button onclick="goBack()">Kembali</button>

&nbsp
<br/>
<h6 style="font-size: 24pt; text-align: center;">Daftar Cuci Satuan</h6>
&nbsp

<a href="<?php echo base_url()?>Londri/tampil_cucian"  class ='btn btn-sm btn-primary'>Lihat Cucian</a>
</br>
<br><b> Keterangan : </b> 
<br>Masukkan Kuantitas ->Pilih Cuci -> Lihat Cucian.
<br>


<div class="container-fluid">
         <form method="post" action="<?php echo base_url();?>Londri/tambah" method="post" accept-charset="utf-8">
         </br>
 <button type="submit" class="btn btn-sm btn-success"><i ></i> Pilih Cuci</button>



    <div class="row">

    

                 <?php
                 $i=1;
    foreach ($barang as $b) {
?>

  <div class="col-md-3 " >
  
            <div class="card" >
           
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

</div>
&nbsp

