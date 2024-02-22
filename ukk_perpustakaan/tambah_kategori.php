<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
<div class="container">
<div class="card">
<div class="card-header"><h2>Tambah Kategori</h2></div>
<div class="card-body">
<div class="row">
<div class="md-12">
<div class="row form-group">
<form method="POST">
<?php
if(isset($_POST['submit'])){
    $kategori = $_POST['kategori'];

    $query = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES('$kategori')");

    if($query){
        echo '<script>alert("Data berhasil ditambah!"); location.href="?page=kategori";</script>';
    }else{
        echo '<script>alert("Data gagal ditambah!"); location.href="?page=tambah_kategori";</script>';
    }
}
?>
<div class="col-md-2">Nama Kategori</div>
<div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
<div class="form-group">
<button type="submit" id="submit" class="btn btn-primary bottom-center">Tambah</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</table>