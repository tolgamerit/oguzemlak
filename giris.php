<?php
ob_start();
session_start();
define("include",true); 
if(isset($_SESSION['kullanici'] , $_SESSION['parola']))
{ 
   echo '<script language="javascript">location.href="yonetim/index.php";</script>';
}
include("assets/config.php");
include("assets/function.php");
?>
<!doctype html>

<html lang="tr">

<head>
  <title>Oğuz Emlak</title>

  <meta name="theme-color" content="#6ec7e0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded"style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)">
                            <div class="card-header card-header-info rounded">
                                <h3 class="mb-0 text-center">Yönetim Paneli Giriş</h3>
                            </div>
                            <div class="card-body p-5">
                           <?php 
                           //Giriş işlemleri modülü
                           include("islemler/giris.php");
                           ?>
                                <form class="form" role="form" autocomplete="off" id="formLogin" method="POST">
                                    <div class="form-group">
                                        <label for="kullanici"><i class="fas fa-user mr-3"> </i>Kullanıcı Adı</label>
                                        <input type="text" class="form-control form-control-lg rounded" name="kullanici"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parola"><i class="fas fa-key mr-3"></i>Parola</label>
                                        <input type="password" class="form-control form-control-lg rounded" name="parola"  required>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-lg float-right" id="btnLogin" name="login" >Giriş</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- PAPER-UI VE EKLENTILER -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/paper-kit.js"></script>
<!-- PAPER-UI VE EKLENTILER -->
</body>
</html>