<?php
session_login();
$query = mysqli_query($conn,"SELECT * FROM diskusi order by id_diskusi desc");

?>