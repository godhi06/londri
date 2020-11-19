
<head>
  <title>Daftar Cuci Satuan</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  
  <script>
    function goBack() {
        window.history.back();
    }
  </script>
</head>

<body>

<button onclick="goBack()">Kembali</button>

<br/>

<h2 style="font-size: 24pt; text-align: center;">Daftar Cuci Satuan</h2>
</br>
</br>  
<form action="<?php echo base_url()?>Londri/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
<?php
  if ($cart = $this->cart->contents())
    {
 ?>
 <div style="overflow-x:auto;">
<table class="table">
<tr id= "main_heading">
<td width="2%">No</td>
<td width="33%">Item</td>
<td width="17%">Harga</td>
<td width="8%">Qty</td>
<td width="20%">Jumlah</td>
<td width="10%">Hapus</td>
</tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
$grand_total = 0;
$sum=0;
$i = 1;

$min = 0;

foreach ($cart as $barang):
$grand_total = $grand_total + $barang['subtotal'];
$sum = $sum + $barang['qty'];
$max = $barang['qty'];
?>
<input type="hidden" name="cart[<?php echo $barang['id'];?>][id]" value="<?php echo $barang['id'];?>" />
<input type="hidden" name="cart[<?php echo $barang['id'];?>][rowid]" value="<?php echo $barang['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $barang['id'];?>][name]" value="<?php echo $barang['name'];?>" />
<input type="hidden" name="cart[<?php echo $barang['id'];?>][price]" value="<?php echo $barang['price'];?>" />

<input type="hidden" name="cart[<?php echo $barang['id'];?>][qty]" value="<?php echo $barang['qty'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $barang['name']; ?></td>
<td><?php echo ($barang['price']); ?></td>
<td><input type="number" class="form-control input-sm" name="cart[<?php echo $barang['id'];?>][qty]" value="<?php echo $barang['qty'];?>" min="1" 
</td>
<td><?php echo ($barang['subtotal']) ?></td>
<td><a href="<?php echo base_url()?>Londri/hapus/<?php echo $barang['rowid'];?>" class="btn btn-sm btn-danger">hapus<i class="glyphicon glyphicon-remove"></i></a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="3"><b>Total Cucian: Rp <?php echo($grand_total); ?></b>
 <br/>
 <b>Total Satuan: <?php echo ($sum); ?></b>
</td>

<td colspan="4" align="right">
<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
<button class='btn btn-sm btn-success'  type="submit">Update</button>
<a href="<?php echo site_url('londri/check_out/'.$username)?>"  class ='btn btn-sm btn-primary'>Check Out</a>
</tr>

</table>
<?php
    }
  else
    {
      echo "<h3>Keranjang Cucian masih kosong</h3>"; 
    } 
?>
</form>
</div>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
        <form method="post" action="<?php echo base_url()?>londri/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
      Anda yakin mau mengosongkan Shopping Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" id="btn-delete" class="btn btn-sm btn-default">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->

</body>