<html>
<head>
    <title>Cetak PDF</title>
    <style type="text/css">
    .form-group {
    margin-left: 250;
}

.table {
    margin-left: 250;
}


.card{
    
      border:3px solid #000000;
      border-radius: 50px;
      width:720px;
      height: 400px;
      align-self: center;
      border-radius: 50px;
    }

@media (max-width: 375px) {
    .form-group{
    margin-right: 200%;
}</style>
</head>
<body>


<div class="container" >
    <div class="row mt-3">
        <div class="col">

            <div class="card">
            
                <h1 style="text-align: center; font-size: 30px; line-height: 3px;">Nota Transaksi Betawi Laundry</h1>
                <h2 style="text-align: center;font-size: 20px margin-top:2px; line-height: 3px;">Jalan Kalibata Selatan No.22 A</h2>
                <h2 style="text-align: center;font-size: 20px; ">0813 1926 4048</h2>

<br/>
<br/>

<table align="center" border="1" style="width:100%: ">
  <?php
                    foreach ($pesan as $e) {
                    ?>
  <tr>
    <th   style="font-size: 15px; ">Kode Order</th>
    <td  style="font-size: 15px;"> <?php echo $e->Kode_order; ?> </td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Nama</th>
    <td style="font-size: 15px;"><?php echo $e->nama; ?> </td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Alamat</th>
    <td style="font-size: 15px;"><?php echo $e->Alamat  ?></td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Nomor Telepon</th>
    <td style="font-size: 15px;"> <?php echo $e->No_Hp  ?></td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Tanggal Masuk</th>
    <td style="font-size: 15px;"> <?php echo $e->Tanggal_masuk  ?></td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Tanggal Selesai</th>
    <td style="font-size: 15px;"><?php echo $e->Tanggal_ambil  ?></td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Total Berat</th>
    <td style="font-size: 15px;"><?php echo $e->Total_berat_cucian  ?> kg</td>
  </tr>
  <tr>
    <th style="font-size: 15px;">Total Harga</th>
    <td style="font-size: 15px;">Rp <?php echo $e->Harga  ?></td>
  </tr>
   <?php
                    }
                    ?>
</table>

        </div>
        </div>
    </div>
</div>
</body>
</html>