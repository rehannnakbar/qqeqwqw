<?php
include ("koneksi.php");    

$nik = $_REQUEST['nik'];
$namalengkap = $_REQUEST['password'];

$query = $db->query("INSERT into `tbregister` VALUES ('$nik','$namalengkap' )");

header("Location: login.php");

?>
