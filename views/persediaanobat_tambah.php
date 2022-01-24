<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Persediaan Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                               <div class="col-sm-9">
                                 <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Nama obat" required>
                              </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis_obat" class="col-sm-3 control-label">Jenis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="Inputkan Para Pihak yang Terlibat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_exp" class="col-sm-3 control-label">Tanggal Exp</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_exp" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=persediaanobat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Persediaan Obat
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
  $jenis=$_POST['jenis_obat'];
  $stok=$_POST['stok'];
  $tglexp=$_POST['tgl_exp'];
    //buat sql
    $sql="INSERT INTO tbl_persediaanobat VALUES ('','$nama','$jenis','$stok','$tglexp')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=persediaanobat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
