<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profil | Admin</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
      }


#cobaaja{
      position: relative;
      width: 300px;
      height: 300px;
      background: #e80909;
      transform: rotate(45deg);
      box-shadow: 50px 50px 150px rgba(249, 209, 209,.5);
      animation: animate 1s linear infinite;
    }


 #cobaaja:before
    {
      content: '';
      position: absolute;
      top:-150px;
      background: #e80909;
      width: 300px;
      height: 150px;
      border-top-right-radius: 150px;
      border-top-left-radius: 150px;
    }
 
    #cobaaja:after
    {
      content: '';
      position: absolute;
      left:-150px;
      background: #e80909;
      width: 150px;
      height: 300px;
      border-bottom-left-radius: 150px;
      border-top-left-radius: 150px;
    }
 

      
      
    </style>
</head>

<body>


<div class="card">
  <div class="judul">
                      
                        <h3>Profil  Admin</h3>
                      
                    </div>
<?php     
      foreach($pesan as $f){ 
          ?>
        
          <table class="table">
              <tr>
                <th scope="col">Nama </th>
                <td><h5 class="card-title"><?php echo $f->Nama_admin ?></td>
              </tr>
              <tr>
                <th scope="col">Username </th>
                <td><h5 class="card-title"><?php echo $f->Username ?></h5></td>
              </tr>
               <tr>
                <th scope="col">No Telepon </th>
                <td><h5 class="card-title"><?php echo $f->no_telepon ?></h5></td>
              </tr>
               <tr>
                <th scope="col">Alamat </th>
                <td><h5 class="card-title"><?php echo $f->alamat ?></h5></td>
              </tr>
              <tr>
                <th scope="col">Status </th>
                <td><h5 class="card-title"><?php echo $f->status ?></h5></td>
              </tr>
             
               
              
          </table>
        </div>
    <?php } ?>

    </body>