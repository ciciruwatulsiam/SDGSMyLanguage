<?php
if(isset($_SESSION['login']) && isset($_SESSION['username']) && isset($_SESSION['id_akun']) ){
  header("Location: ".BASE_URL."/Public/Belajar/");
}

if(isset($_POST['submit_registrasi'])){
  if
  ( $_POST['first_name_input'] != "" && 
    $_POST['last_name_input'] != "" && 
    $_POST['email_registrasi_input'] != "" &&
    $_POST["password_registrasi_input"] != "" &&
    $_POST["password_confirmasi_registrasi_input"] != "" &&
    $_POST["password_registrasi_input"] == $_POST["password_confirmasi_registrasi_input"]
    
    ){
      $first_name = $_POST['first_name_input']; 
      $last_name = $_POST['last_name_input']; 
      $email_registrasi_input = $_POST['email_registrasi_input'];
      $password_registrasi_input = $_POST["password_registrasi_input"];
      $password_confirmasi_registrasi_input = $_POST["password_confirmasi_registrasi_input"];
      $query = mysqli_query($conn,"INSERT INTO akun VALUES(0,'$first_name','$last_name','$email_registrasi_input','$password_registrasi_input','')");
      echo "<script>alert('Registrasi Akun Berhasil, Silahkan Melakukan Login')</script>";
      // header('Location: '.BASE_URL.'/Public/Login');
  }
  else{
    echo "<script>alert('Harap Mengisi Semua Form')</script>";
    
  }
}

?>