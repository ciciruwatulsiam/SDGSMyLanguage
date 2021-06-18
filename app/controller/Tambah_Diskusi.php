<?php
session_login();
if(isset($_POST['upload_diskusi'])){
  // var_dump($_POST);
  $id_akun = $_POST['id_akun'];
  $judul_diskusi = $_POST['judul_diskusi'];
  $input_diskusi = $_POST['input_diskusi'];


  $query = mysqli_query($conn,"INSERT INTO diskusi VALUES(0,$id_akun,'$judul_diskusi','$_SESSION[username]','$input_diskusi')");
  echo "<script>alert('berhasil terposting')</script>";
}
?>