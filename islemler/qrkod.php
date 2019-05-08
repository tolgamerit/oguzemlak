<?php
ob_start();
session_start();
define("include", true);
include("../assets/config.php");
include("../assets/function.php");
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
  echo '<script language="javascript">location.href="../giris.php";</script>';
}
if (isset($_GET['ilanid'])) {

  $id = $_GET['ilanid'];
  $sql = $db->prepare("SELECT * FROM tbl_ilan WHERE ilan_numarasi= ?");
  $sql->execute(array($id));
  $ilangetir = $sql->fetch(PDO::FETCH_ASSOC);
  $seourl = seo($ilangetir['ilan_Adi']);
}
if($ilangetir['ilan_Durum']=='kiralik')
$ilandurum='Kiralık';
else
$ilandurum='Satılık';


?>
<!doctype html>

<html lang="tr">

<head>
  <title>Oğuz Emlak |QR Kod Sistemi</title>

  <meta name="theme-color" content="#6ec7e0">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet">

  <style>
    #qrcode {
      width: 256px;
      height: 256px;

    }

    #text {
      visibility: hidden;
    }
  </style>

  <!--     Fonts and icons     -->

</head>



<body class="bg-light">
  <input id="text" type="text" value="<?php echo $_SERVER['HTTP_HOST'] . '/' . $seourl . '-' . $ilangetir['ilan_numarasi']; ?>" style="width:100%" /><br />

  <div class="container">
    
    <div class="row mt-5 d-flex text-center">
      <div class="col-md-12">

        <button id="displayId" onclick="
 toggleVisibility('displayId') " class="btn1 btn btn-lg btn-info">YAZDIR</button>
 
 <button id="dk" onclick="window.location = '../yonetim/';" class="btn1 btn btn-lg btn-info">GERİ DÖN</button>
    <p class="mt-5 h3">Oğuz Emlak</p>
    <img src="https://via.placeholder.com/250" class=" mt-5rounded mx-auto d-block" alt="...">

      
        <p class=" mt-5 h3 mark"><?php echo   $ilangetir['ilan_OdaSayisi'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ilangetir['ilan_Metrekare'].' Metrekare'; ?> </p>
        <p class=" mt-5 h3 mark"><?php echo   $ilandurum.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ilangetir['ilan_Kategori'];?> </p>

      
        <p class="mt-5 h3"><?php echo  $ilangetir['ilan_Konum']; ?> </p>
        
     
      </div>
    </div>




    <div class="row mt-5">
      <div class="col-lg-12 d-flex justify-content-center">
        <div class="mb-5" id="qrcode"></div>

      </div>

    </div>


    <script>
      function toggleVisibility(id) {
        var element = document.getElementById(id);
        var element1 = document.getElementById('dk');

        element.style.visibility = 'hidden';
        element1.style.visibility = 'hidden';
        window.print();
        setTimeout(function() {
 element.style.visibility = 'visible';
        element1.style.visibility = 'visible';
 }, 1500);
       
      }
    </script>




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