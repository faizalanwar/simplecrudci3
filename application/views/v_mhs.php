<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcreate">
    Tambah Data Mahasiswa
    </button>
    <br>
    <br>

    

    <h1>Ini Read</h1>
    <table border= 1px; cellspacing=0; cellpadding=15px; >
        <tr>
            <th>No</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
            
        <?php $i=1; ?>
        <?php foreach($mahasiswa as $mhs) :?>
        <tr>
            <td><?=$i ?>.</td>
            <td><?=$mhs['nrp'] ?></td>
            <td><?=$mhs['nama'] ?></td>            
            <td><?=$mhs['jurusan'] ?></td>
            <td><?=$mhs['kelas'] ?></td>
            <td><img src="./assets/img/<?= $mhs['foto'];?>"style="width: 65px; border:2px"></td> 
            <td>
                <a href="<?php echo base_url('zall/update_data/').$mhs['id'];?>"  class="btn btn-success"  > Edit </a>

                <a href="<?php echo base_url('zall/delete_data/').$mhs['id'];?>" 
                   onclick="return confirm('Apakah kamu yakin akan menghapus data?')" class="btn btn-danger">Delete </a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
    </table>

</div>

<!-- ---------------------------------------- Modal Create ----------------------------------------------------- -->
<div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modalcreateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalcreateTitle">Ini Form Create</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <span> Silahkan Isi Biodata Mahasiswa dibawah ini ..</span>
            <table class="table">
            <form action="<?= base_url();?>zall/tambah_aksi" method="post" enctype="multipart/form-data">
                <tr>
                    <td width="150px"><label for="nrp">NRP  </label></td>
                    <td> : <input type="number" name="nrp" autofocus required></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap  </label></td>
                    <td> : <input type="text" name="nama" required></td>
                </tr>
                <tr >
                    <td><label for="jurusan">Jurusan </label></td>
                    <td><input type="radio" name="jurusan" value="Teknik Informatika" required> Teknik Informatika<br>
                        <input type="radio" name="jurusan" value="Management Informatika" > Management Informatika<br>
                        <input type="radio" name="jurusan" value="Sistem Informasi" > Sistem Informasi<br>
                        <input type="radio" name="jurusan" value="Komputerisasi Akuntansi" > Komputerisasi Akuntansi<br>
                    </td>
                </tr>
                <tr>
                    <td>Kelas </td>
                    <td> : <select name="kelas" required style="width: 180px">
                                <option value="" selected disabled>Pilih Kelas </option>
                                <option value="TI1">TI1</option>
                                <option value="TI2">TI2 </option>
                                <option value="TI3">TI3</option>
                                <option value="SI">SI</option>
                                <option value="MI">MI </option>
                                <option value="KA">KA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gambar </td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </td>
                </tr>
                
            </form>
            </table>
        </div>
        </div>
    </div>
    </div>
    <br>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>