<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	</head>
	<script type="text/javascript">
        function goBack() {
        window.history.back();
    }
    </script>
	<body>
		<button onclick="goBack()">Kembali</button>
 
	<div class="container">
	<h3>Hasil Pencarian</h3>
	<hr>
 
		<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Lihat Pesanan</h3>
            <div style="overflow-x:auto;">
            	<?php if (empty($order)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE ORDER</th>
                        <!-- <th class="text-center" scope="col">USERNAME</th> -->
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">ALAMAT</th>
                        <th class="text-center" scope="col">NO HP</th>
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
                    foreach ($order as $d) {
                    ?>
                    
                    <tr>
                        <td class="text-center"><?php echo $d->Kode_order ?> </td>
                        <!-- <td class="text-center"><?php echo $d->username ?> </td> -->
                        <td class="text-center"><?php echo $d->nama ?>  </td>
                        <td class="text-center"><?php echo $d->Alamat ?></td>
                        <td class="text-center"><?php echo $d->No_Hp ?></td>
                        <td class="text-center"><?php echo $d->Tanggal_masuk ?></td>
                        <td class="text-center"><?php echo $d->Tanggal_ambil ?></td>
                        </td>
                        <td class="text-center"><?php echo $d->Status ?></td>
                        <td class="text-center"><?php echo $d->Total_berat_cucian ?> Kg</td>
                        <td class="text-center">Rp <?php echo $d->Harga ?></td>

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
             <h5><b>Keterangan :</b></h5>
             
             - Sedang di jemput : Sedang perjalanan menjemput cucian ke lokasi pelanggan.
             <br>
             - Sedang di antar : Sedang perjalanan menuju lokasi pelanggan.
            </div>
            
        </div>
        </div>
    </div>

 
	</div>
	</body>
</html>