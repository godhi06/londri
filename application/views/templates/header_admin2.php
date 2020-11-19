<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/admin/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    </head>
</html>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#">
            <h3 style="text-align: center; color: white;">Betawi Laundry</h3>
            </a>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin'?>">Beranda</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/cucian'?>">Input Cucian</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/barang'?>">Data barang</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/pelanggan'?>">Data Pelanggan</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/tampilkiloan'?>">Pesanan Kiloan-Website</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/tampilsatuan'?>">Pesanan Satuan-Website</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/tampilkiloandatang'?>">Pesanan Kiloan-Datang Langsung</a>
            </li>
            <li>
                <a style="color: white;" href="<?php echo base_url().'admin/tampilsatuandatang'?>">Pesanan Satuan-Datang Langsung</a>
            </li>
        </ul>
        <ul class="list-unstyled bawah">
            <li><a style="color: white;" href="<?php echo base_url().'login_admin/logout'?>" class="logout">Logout</a></li>
        </ul>
    </nav>
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Menu</span>
                            </button>
                    </div>
                        <center><h3>Selamat datang <?php echo $this->session->userdata("Username"); ?></h3></center>
                    </div>
            </nav>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    
        
                