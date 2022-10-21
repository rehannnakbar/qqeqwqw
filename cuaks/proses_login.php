<?php
session_start();
$nik =$_POST['nik'];
$namalengkap =$_POST['namalengkap'];

$koneksi = new PDO('mysql:host=localhost;dbname=webb','root','');
$query = $koneksi->query("SELECT * FROM `tbregister` WHERE nik='$nik' AND namalengkap='$namalengkap'");
$data = $query->fetch();
if($data){
    $_SESSION['nik'] =$nik;
    $_SESSION['namalengkap'] =$namalengkap;

    header("location:index.php");

}else{
    header("location:login.php");
}