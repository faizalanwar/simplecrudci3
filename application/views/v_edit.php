<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

</head>
<body>
    
<div class="container">
    <br>
    <h1>Ini Update</h1>
    <br>
    <?php foreach($mahasiswa as $mhs) :?>
        <form action="<?= base_url('zall/update/').$mhs->id;?>" method="post" enctype="multipart/form-data">
            <table>  
            <tr>
                <td width="150px"><label for="nrp">NRP  </label></td>
                <td> : 
                <input type="number" name="id" autofocus required value="<?= $mhs->id; ?>" hidden>    
                <input type="number" name="nrp" autofocus required value="<?= $mhs->nrp; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Lengkap  </label></td>
                <td> : <input type="text" name="nama" value="<?= $mhs->nama; ?>"required></td>
            </tr>
            <tr >
                <td><label for="jurusan">Jurusan </label></td>
                <td>
                    <input type="radio" name="jurusan" value="Teknik Informatika" required
                        <?php if($mhs->jurusan =="Teknik Informatika") echo"checked" ?> required> Teknik Informatika<br>
                    <input type="radio" name="jurusan" value="Management Informatika" 
                        <?php if($mhs->jurusan =="Management Informatika")echo"checked"?> required> Management Informatika<br>
                    <input type="radio" name="jurusan" value="Sistem Informasi" 
                        <?php if($mhs->jurusan =="Sistem Informasi")echo"checked"?> required > Sistem Informasi<br>
                    <input type="radio" name="jurusan" value="Komputerisasi Akuntansi"
                        <?php if($mhs->jurusan =="Komputerisasi Akuntansi")echo"checked"?> required> Komputerisasi Akuntansi<br>
                </td>
            </tr>
            <tr>
                <td>Kelas </td>
                <td> : <select name="kelas" required>
                            <option value=""<?php if(
                                                    ($mhs->kelas !== "TI1") ||
                                                    ($mhs->kelas !== "TI2") ||
                                                    ($mhs->kelas !== "TI3") ||
                                                    ($mhs->kelas !== "SI") ||
                                                    ($mhs->kelas !== "MI") ||
                                                    ($mhs->kelas !== "KA") )echo"selected" ?> disabled>Pilih Kelas </option>
                            <option value="TI1"<?php if($mhs->kelas=="TI1") echo"selected" ?>>TI1</option>
                            <option value="TI2"<?php if($mhs->kelas=="TI2") echo"selected" ?>>TI2 </option>
                            <option value="TI3"<?php if($mhs->kelas=="TI3") echo"selected" ?>>TI3</option>
                            <option value="SI"<?php if($mhs->kelas=="SI") echo"selected" ?>>SI</option>
                            <option value="MI"<?php if($mhs->kelas=="MI") echo"selected" ?>>MI </option>
                            <option value="KA"<?php if($mhs->kelas=="KA") echo"selected" ?>>KA</option>
                    </select>
                </td>
            </tr>
        
            <tr>
                <td><label for="gambar">Gambar </label>
                </td>
                <td> : <img src="<?= base_url('/assets/img/').$mhs->foto?>" style="border:2 px solid #000 ; width:100px">
                        <input type="file" name="foto" > 
                </td>
            </tr>
            <tr >
                <td height='100px'><a href="<?= base_url('/zall')?>"><button type="button" class="btn btn-danger">Batal!</button></a></td>
                <td><button type="submit" name="submit"  class="btn btn-primary">Ubah Data!</button></td>
            </tr>
            </table>     
        </form>
    <?php endforeach;?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>