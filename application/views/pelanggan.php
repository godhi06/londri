

<div class="container-fluid">
<div class="row mt-5">
        <div class="col">
            <h3 class="text-center">profil</h3>
            <div style="overflow-x:auto;">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">jenis kelamin</th>
                        <th class="text-center" scope="col">alamat</th>
                        <th class="text-center" scope="col">nomor telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelanggan as $p) : ?>
                    <tr>
                        <td class="text-center"><?= $p['nama_lengkap']; ?></td>
                        <td class="text-center"><?= $p['jenis_kelamin']; ?></td>
                        <td class="text-center"><?= $p['alamat']; ?></td>
                        <td class="text-center"><?= $p['no_telepon']; ?></td>
                        
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </div>
            
        </div>
        </div>
    </div>
