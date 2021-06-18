<?php
session_login();
if(isset($page->method)){
  $query = mysqli_query($conn,"SELECT * FROM diskusi WHERE id_diskusi = $page->method");
  $result = mysqli_fetch_assoc($query);
  $judul = $result['judul'];
  $author = $result['author'];
  $isi = $result['isi'];
  $komentar = mysqli_query($conn,"SELECT * FROM komentar WHERE id_judul = '$page->method'");
}
else{
  header("Location: ".BASE_URL."/Public/Diskusi");
}

if(isset($_POST['tambah_komentar'])){
  if($komentar != ""){
    $query = mysqli_query($conn,"INSERT INTO komentar VALUES(0,'$page->method','$_SESSION[username]','$_POST[input_komentar]')");
    header("Location: ".BASE_URL."/Public/Diskusi/");
    // echo "<script>aler('Berhasil Menambahkan Komentar')</script>";
  }
  
}



?>