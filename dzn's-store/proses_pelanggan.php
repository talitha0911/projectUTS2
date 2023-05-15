<?php 
require_once 'dbkoneksi.php';
?>
<?php
   $_tanggal = $_POST['tanggal'];
   $_nama = $_POST['nama'];
   $_alamat = $_POST['alamat'];
   $_nohp = $_POST['no_hp'];
   $_email = $_POST['email'];
   $_jmlpesanan = $_POST['jml_pesanan'];
   $_desc = $_POST ['desc'];
   $_pdid = $_POST['pd_id'];
   $_proses = $_POST['proses'];

   // array data 
   $ar_data[]=$_tanggal; 
   $ar_data[]=$_nama;
   $ar_data[]=$_nohp;
   $ar_data[]=$_email;
   $ar_data[]=$_jmlpesanan;
   $ar_data[]=$_desc;
   $ar_data[]=$_pdid; 

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (tanggal,nama,no_hp,email,
    jml_pesanan,pd_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE produk SET tanggal=?,nama=?,no_hp=?,
    email=?,jml_pesanan=?,pd_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:admint.php');
?>