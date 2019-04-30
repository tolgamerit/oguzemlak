<?php
ob_start();
session_start();
define("include", true);
include("../assets/config.php");
include("../assets/function.php");
?>
<!doctype html>

<html lang="tr">

<head>
  <title>QR KOD OLUŞTURUCU</title>

  <meta name="theme-color" content="#6ec7e0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet">

  <style>
#qrcode {
  width:160px;
  height:160px;
  margin-top:15px;
}
      </style>

  <!--     Fonts and icons     -->

 </head>

<body class="bg-light">
<div class="container">
<div class="row">
    <div class="col-md-12 mt-5">
    <input id="text" type="text" value="https://emlak.navisit.tk/sultan-dan-hayalprk-cv-4plus1pluskilerplusgodali-cbanyo-lux-daire-1005" style="width:100%" /><br />

    </div>
</div>
<div class="row mt-5 d-flex justify-content-center">
<div id="qrcode"></div>

</div>





</div>




</body>
<!-- PAPER-UI VE EKLENTILER -->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/moment.min.js" type="text/javascript"></script>
<script src="../assets/js/paper-kit.js" type="text/javascript"></script>
<script src="../assets/js/qrcode.min.js" type="text/javascript"> </script>
<script src="../assets/js/qrcode.js" type="text/javascript"></script>


<!-- PAPER-UI VE EKLENTILER -->


<!-- PAPER-UI VE EKLENTILER -->

</html>