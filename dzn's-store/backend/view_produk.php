<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
   
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Nama_pemesan</td><td><?=$row['nama_pemesan']?></td></tr>
        <tr>   <td>alamat_pemesan</td><td><?=$row['alamat_pemesan']?></td></tr>
        <tr>   <td>no_hp</td><td><?=$row['no_hp']?></td></tr>
        <tr>   <td>email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>jumlah_pesanan</td><td><?=$row['jml_pesanan']?></td></tr>
        <tr>   <td>Deskripsi</td><td><?=$row['desc']?></td></tr>
        <tr>   <td>Produk_id</td><td><?=$row['pd_id']?></td></tr>
    </tbody>
</table>