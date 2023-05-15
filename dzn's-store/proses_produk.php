<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_hargajual = $_POST['harga_jual'];
   $_hargabeli = $_POST['harga_beli'];
   $_stok = $_POST['stok'];
   $_minstok = $_POST['min_stok'];
   $_desc = $_POST['deskripsi'];

   $_proses = $_POST['proses'];

  
   $ar_data[]=$_kode; 
   $ar_data[]=$_nama; 
   $ar_data[]=$_hargajual;
   $ar_data[]= 1.2 * $_hargabeli;
   $ar_data[]=$_stok;
   $ar_data[]=$_minstok;
   $ar_data[]=$_deskripsi; 
   $ar_data[]=$_kategori;

   if($_proses == "Simpan"){
    
    $sql = "INSERT INTO produk (kode,nama,harga_jual,harga_beli,stok,
    min_stok,deskripsi,kategori_produk_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,harga_jual=?,harga_beli=?,
    stok=?,min_stok=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>