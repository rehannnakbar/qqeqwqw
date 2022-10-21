<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
    <!-- font icon--> 
    <link rel="stylesheet= href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- main css-->
    <link rel="stylesheet" href="css/style.css">
</head 
<body>
    <div class="main"> 
    <div style="padding: 50px;">
    <marquee behavior="" direction=""><h2>silakan registrasi</h2></marquee>
    <!--sign up form--> 
<style>
    body {
        font-family: sans-serif;
        background-color: grey;;
    }
    
</style>
</head>
<body>
        <div class="container">
            <div class="sign up form"> 
                <h2 class="form-title">Form register</h2>
                <form action="proses_register.php" method="POST"> 
                    <div class="form-group"> 
                        <label for="name"><i class="zmdi zmdi-nik"></i></label>
                        <input type="nik" name="nik" id="nik" placeholder="nik"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="re_pass" placeholder="masukan password"/>
                    </div>
                    <div class="form-group-form-button">
                        <button type="submit" name="sign up" class="form-submit">Submit</button>
                    </div>
                </form>
           
        <!-- JS-->
        <script src="vendor/jquery/jquery.min.js"></script> 
        <script src="js/main.js"></script>
</body>
</html> 