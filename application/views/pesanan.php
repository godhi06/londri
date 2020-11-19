<head>
    <title>Detail Pesanan Kiloan</title>
    <style type="text/css">

        body{
        height: 100%;
       
   
    }
        .footer{
        background: #4a93FF;
     
        width: 100%; 
        
        bottom: 0px;
       
    }





        body{
        height: 100%;
    }

.containter{
    min-height: 100%;
   
}

 .kuy{
    background: #2076F6;
        height:50px;
    line-height:50px;

        
    }

   .widget-social.pc_alignleft{
    text-align: left;
   }

   .widget-social{
    display: table;
    width: 100%;
   }



    </style>
    <script type="text/javascript">
        function goBack() {
        window.history.back();
    }
    </script>
</head>

<body>

<button onclick="goBack()">Kembali</button>


<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Lihat Pesanan</h3>
            <div style="overflow-x:auto;">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE ORDER</th>
                        <th class="text-center" scope="col">USERNAME</th>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">ALAMAT</th>
                        <th class="text-center" scope="col">NO TELEPON</th>
                        <th class="text-center" scope="col">TANGGAL MASUK</th>
                        
                        <th class="text-center" scope="col">TANGGAL AMBIL</th>
                        <th class="text-center" scope="col">STATUS</th>
                        <th class="text-center" scope="col">TOTAL CUCI KILOAN</th>
                        <th class="text-center" scope="col">TOTAL HARGA</th>
                        
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($pesan as $d) {
                    ?>
                    
                    <tr>
                        <td class="text-center"><?php echo $d->Kode_order; ?> </td>
                        <td class="text-center"><?php echo $d->username; ?> </td>
                        <td class="text-center"><?php echo $d->nama; ?> </td>
                        <td class="text-center"><?php echo $d->Alamat; ?></td>
                        <td class="text-center"><?php echo $d->No_Hp; ?></td>
                        <td class="text-center"><?php  $tanggal = $d->Tanggal_masuk; echo date("d-m-Y", strtotime($tanggal))   ; ?></td>
                        
  
                        <td class="text-center"><?php  $tanggal = $d->Tanggal_ambil; echo date("d-m-Y", strtotime($tanggal))   ; ?></td>
                        </td>
                        <td class="text-center"><?php echo $d->Status; ?></td>
                        <td class="text-center"><?php echo $d->Total_berat_cucian; ?> Kg</td>
                        <td class="text-center">Rp <?php echo $d->Harga; ?></td>

                        <td class="text-center">
                            <!-- <a href="<?php echo $this->session->userdata("username"); ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a> -->
                            
                            <a href="<?php echo base_url('londri/cetak/'.$d->Id_Kiloan) ?>" class="badge badge-success float-center" ?>Lihat Nota</a>
                        </td>


                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            </div>
            
        </div>
        </div>
    </div>
&nbsp


</body>


    <div  class="footer " >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->

        <h5 class="text-uppercase"  align="justify" style="color:#ffffff">HUBUNGI KAMI</h5>
       
        <dl>
                        <dd><p align="justify" style="color:#ffffff">Jl. Kalibata Selatan No.22 A Jakarta Selatan</p></dd>    
                        <dd><p align="justify" style="color:#ffffff">Tlp. 0813 1926 4048</p></dd>     
                        
                    </dl>


        </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      
      <!-- Grid column -->

     

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
   


        <div class="col kuy">
                    
                    <center><small style="color:#ffffff">&copy;Betawi Laundry 2019 by Eva Dwi Meliani
                    </center>
        </div>
   

    </div>

