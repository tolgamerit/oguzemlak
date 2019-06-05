<?php
ob_start();
session_start();
define("include", true);
include("../assets/config.php");
include("../assets/function.php");
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
    echo '<script language="javascript">location.href="../giris.php";</script>';
}
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Oğuz Emlak | Yönetim Paneli</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../assets/css/bootstrap-yonetim.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/all.css">
   <script src="../assets/js/all.js"></script>
<script src="jquery.min.js"></script>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/richtext.min.css">
   
    



    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/jquery.richtext.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
 
    <style>
        .bg {
            background: linear-gradient(to bottom, #6ec7e0 0%, #6ec7e0 100%) !important;

        }

        .swal2-popup {
            font-size: 1.6rem !important;
        }
        .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar bg">

            <?php include("menu.php"); ?>
            <?php include("../islemler/sayfa.php"); ?>


        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="sayfa.php?link=hakkimizda"><?php echo $sayfagetir['sayfaAd'];  ?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">


                        </ul>

                        <ul class="nav navbar-nav navbar-right">


                            <li>
                                <a href="cikis.php">
                                    <p>Çıkış</p>
                                </a>
                            </li>
                            <li>
                                <a href="../anasayfa">
                                    <p>Siteye Dön</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>



            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="content">
                                  <?php include("../islemler/sayfa.php"); ?>

    <?php 

    
    
    ?>
                                <form method="POST">
                                    <div class="form-group" >
                                    <textarea name="editor"  class="editor form-control" id="editor" rows="10" cols="80">  <?php echo $sayfagetir['SayfaIcerik']; ?>
</textarea>

                                  
                               
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                         
 
 
  <div class="row">
      <div class="col-md-12 text-right">
      <button type="submit" class="btn btn-info float-right">KAYDET</button>

      </div>
  </div>
</form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>




        </div>




    </div>


</body>
<script>
                        $('.editor').richText();

                </script>


<script src="../assets/js/bootstrap-yonetim.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<script src="../assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>
<script src="../assets/js/sweetalert2.min.js"></script>




</html>