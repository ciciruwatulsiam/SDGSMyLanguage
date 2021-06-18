<?php
if(isset($_SESSION['login']) && isset($_SESSION['username']) && isset($_SESSION['id_akun']) ){
  header("Location: ".BASE_URL."/Public/Belajar/");
}

if(isset($_POST['submit_login'])){
  $query = mysqli_query($conn,"SELECT * FROM akun  WHERE email = '$_POST[email_login_input]' AND password = '$_POST[password_login_input]'");
  if(mysqli_num_rows($query)){
    $data_akun = mysqli_fetch_assoc($query);
    // var_dump($data_akun);
    $_SESSION['login'] = true;
    $_SESSION['id_akun'] = $data_akun['id_akun'];
    $_SESSION['username'] = $data_akun['first_name']." ".$data_akun['last_name'];
    header("Location: ".BASE_URL."/Public/Belajar/");

  }
  else{
    echo "<script>alert('No')</script>";
  }
}

?>