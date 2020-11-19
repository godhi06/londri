<script type="text/javascript">
        function goBack() {
        window.history.back();
    }
    </script>
<body>
    <button onclick="goBack()">Kembali</button>


<div class="container" style="margin-top:100px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Registrasi Betawi Laundry
                </div> 
                <div class="card-body">
                    <form action="<?php echo base_url('Registrasi/daftar')?>" method="post">
                         <div class="form-group">
                            <label for="nama">Id Pelanggan</label>
                            <input type="text" name='id_pelanggan' class="form-control" value="<?= $kodeunik; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('id_pelanggan') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>

                        <div class="form-group">
                    <label for="alamat">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="input_jeniskelamin" id="perempuan" value="perempuan" <?php echo set_radio('jeniskelamin', 'perempuan'); ?> >

                                    Perempuan

                                     
                                </label>
                                <small class="form-text text-danger"><?= form_error('perempuan') ?>.</small>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="input_jeniskelamin" id="laki" value="laki-laki"  <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>>
                                    Laki-Laki
                                     
                                </label>
                                <small class="form-text text-danger"><?= form_error('laki-laki') ?>.</small>
                            </div>
                        </div>
                    </div>
                </div> 

                        <div class="form-group">
                            <label for="nohp">No Telepon</label>
                            <input type="text" class="form-control" id="nohp" name="nohp">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                        </div>
                        
                        
                        <button href="<?php base_url(); ?>londri" type="submit" name="tambah" class="btn btn-primary float-right">Regis</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
&nbsp
</body>