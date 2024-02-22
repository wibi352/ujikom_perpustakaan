<h1 class="mt-4">Kategori Buku</h1>
<div class="row">
<div class="md-12">
 <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
 
  <tr>
          <th>No</th>
          <th>Nama</th>
          <th>kategori</th>
          <th>start date</th>

     </tr>
<tr>
     <tr>
          <th>01</th>
          <td>wibi</td>
          <td>novel</td>
          <td>22/02/2024</td>
     </tr>
<tr>
     <th>02</th>
     <td>wisnu</td>
     <td>buku jurusan</td>
     <td>22/02/2024</td>
</tr>
<tr>
     <th>03</th>
     <td>ervan</td>
     <td>buku fiksi</td>
     <td>22/02/2024</td> 
</tr>
<?php
$i = 1;
$query = mysqli_query($koneksi, "SELECT * FROM kategori");
while($data = mysqli_fetch_array($query)){
?>
<td><?php echo $i++?></td>
<td><?php echo $data['kategori']; ?></td>
<?php 
} ?>
</tr>
 </table>
     
</div>
</div>