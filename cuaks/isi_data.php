<?php
session_start();

if(empty($_SESSION['tanggal'])){
    ?>
<!DOCTYPE html> 
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="sylesheer">
    <link rel="sylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="sty.css">
</head>
<boddy>

<div class="contaner mt-4">

     <h1>PEDULI DIRI</h1>
     <h2>catatan perjalanan</h2>
     <div class="card text-center">
    <div class="card-header">
   <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
        <form method="get" action="catatan_perjalanan.php">
        <p>tanggal<input name="tanggal" type="text"></p>
        <p>waktu<input name="waktu" type="text"></p>
        <p>lokasi<input name="lokasi" type="text"></p>
        <p>suhu_tubuh<input name="suhu_tubuh" type="text"></p>
        <button type="submit">simpan</button>
</from>
</boddy>
</html>
<?php
}
else{
    header("location:catatan_perjalanan.php");
}
?>