<div class="modal fade" id="modalEditCenter" tabindex="-1" role="dialog" aria-labelledby="modalEditCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalEditCenterTitle">Ini Form Create</h5>
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