<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Obat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                               <div class="col-sm-9">
                                 <select name="nama_obat" class="form-control" >
                                 <?php
                                      $Ambil = mysqli_query($koneksi, "SELECT * FROM tbl_persediaanobat");
                                      while ($data = mysqli_fetch_array($Ambil)) { ?>
                                         <option value="<?= $data['idobat'] ?>">
                                                        <?= $data['nama_obat'] ?>
                                             
                                         </option> 
                                        <?php
                                            }
                                        ?>

                                 </select>
                                      
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=obatkeluar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama=$_POST['nama_obat'];
  $jumlah=$_POST['jumlah'];
  $tanggal=$_POST['tanggal'];

    $sql="INSERT INTO tbl_obatkeluar VALUES ('','$nama','$jumlah','$tanggal')";

    $sel = mysqli_query($koneksi, "SELECT * FROM tbl_persediaanobat WHERE idobat='$nama'");
    $dat = mysqli_fetch_array($sel);
    $stok = $dat['stok'];
    $stokbaru = $stok - $jumlah;

    $sql2="UPDATE tbl_persediaanobat SET stok='$stokbaru' WHERE idobat ='$nama'"; 

    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    $query2=  mysqli_query($koneksi, $sql2) or die ("SQL Simpan Arsip Error");

    // $nama= mysqli_query($koneksi,"SELECT * FROM tbl_obatmasuk WHERE idobat = '$nama'");

    // $data= mysqli_fetch_array($nama);

    // $persediaanawal = $data['stok'];
    // $sisa           = $persediaanawal + $jumlah;
    // $id             = $data['idobat'];

    // mysqli_query($koneksi, "UPDATE tbl_persediaanobat SET stok = '$sisa' WHERE idobat = $id'");



    if ($query){
        echo "<script>window.location.assign('?page=obatkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }

    if ($query2){
        echo "<script>window.location.assign('?page=obatkeluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
