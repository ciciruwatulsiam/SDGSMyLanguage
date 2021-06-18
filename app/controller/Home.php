<?php
if(isset($_SESSION['login']) && isset($_SESSION['username']) && isset($_SESSION['id_akun']) ){
  header("Location: ".BASE_URL."/Public/Belajar/");
}


?>