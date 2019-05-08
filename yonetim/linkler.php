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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    <style>
        .bg {
            background: linear-gradient(to bottom, #6ec7e0 0%, #6ec7e0 100%) !important;

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
                        <a class="navbar-brand" href="index.php">Oğuz Emlak</a>
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
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <?php include("../islemler/site-linkler.php");?>

                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Sistem Ayarları</h4>
                                </div>
                                <div class="content">
                                    <?php 

                                    $query = $db->query("SELECT * FROM tbl_sistem")->fetch(PDO::FETCH_ASSOC);

                                    ?>
                                    <form method="POST" id="contact-form">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Telefon Numarası-1</label>
                                                    <input type="text" class="form-control" placeholder="(322) 322 22 22" name="telefon1" value="<?php echo $query['telefon1'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Telefon Numarası-2</label>
                                                    <input type="text" class="form-control" placeholder="(322) 322 22 22" name="telefon2" value="<?php echo $query['telefon2'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>E-Posta</label>
                                                    <input type="email" class="form-control" placeholder="mail@mail.com" name="email" value="<?php echo $query['Mail'];  ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Ofis Adresi</label>
                                                    <textarea rows="5" class="form-control" placeholder="Adres Detayları..." name="adres"><?php echo $query['Adres'];  ?></textarea>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Facebook Link</label>
                                                    <input type="text" class="form-control" placeholder="facebook.com" name="facebook" value="<?php echo $query['sosyal_Facebook'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Twitter Link</label>
                                                    <input type="text" class="form-control" placeholder="twitter.com" name="twitter" value="<?php echo $query['sosyal_Twitter'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Instagram Link</label>
                                                    <input type="text" class="form-control" placeholder="instagram.com" name="instagram" value="<?php echo $query['sosyal_Instagram'];  ?>">
                                                </div>
                                            </div>
                                        </div>




          
 <button id="submit" name="submit" type="submit" class="btn btn-info btn-fill pull-right" >Güncelle</button>

 
                                      
                                       
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>





                </div>
            </div>




        </div>
    </div>


</body>


<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-yonetim.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>
<script src="../assets/js/sweetalert2.min.js"></script>

</html>