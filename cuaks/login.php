<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>. Login .</title>
    <style>
        marquee{
            color: #554994
        }
    </style>
  
</head>
<body>
    
    <div style="padding: 50px;">
      <marquee behavior="" direction=""><h2>Selamat Datang</h2></marquee>
         <!-- form login-->
         <form action="proses_login.php" method="POST">
                        <input type="number" name="nik" class="form-control mb-4" placeholder="NIK" required>
                        <input type="password" name="namalengkap"  class="form-control mb-4" id="re_pass" placeholder="MASUKAN NAMA"/>
                        <div class="form-inline">   
                            <button class="btn btn-primary btn-b" name="masuk">MASUK</button>
                <p class="login-register.text">belum mempunyai akun?<a href="registerrr.php">DAFTAR DISINI</a>
        
    </form>
    </div>
</body>
</html>