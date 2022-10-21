<?php

$db = mysqli_connect("localhost","root","","webb");

$result = mysqli_query($db, "SELECT * FROM tbperjalanan");
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>catatanperjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">P E D U L I  D I R I</h1>
    <h4 class="text-black">catatan perjalanan</h4>
    <div class="card text-center">
      <li class="nav-item">
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3">
    <div class="container mt-3">
        <div class="row fw-bold card">
            <div class="row g-2 align-items-center px-3 mb-3">
                <div class="col-auto">
                <span class="text-black">Urutkan Berdasarkan</span>
             </div>
                <div class="col-auto">
                    <input type="date" class="form-control" style="width:200px" name="caper">
                </div>
                <div class="col-auto">

                <button class="btn btn-primary">Urutkan</button>
                </div>
            </div>
</div>
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Suhu_Tubuh</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      
      <td><?=$row['tanggal'];?></td>
      <td><?=$row['waktu'];?></td>
      <td><?=$row['lokasi'];?></td>
      <td><?=$row['suhutubuh'];?></td>
      <td>
        <a href="update.php?id=<?=$data['id'];?>" class="btn btn-primary">Update</a>
        <a href="dalete.php?id=<?=$data['id'];?>" class="btn btn-primary">Delete</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
    <a href="isi_data.php">
        <button class="btn btn-primary">Isi Catatan Perjalanan</button>
    </a>
    </div>
</body>
</html>