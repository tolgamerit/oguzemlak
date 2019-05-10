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

        .swal2-popup {
            font-size: 1.6rem !important;
        }
    
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar bg">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="header">
                               
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover">
                                        <thead>
                                            <?php
                                            $ara = $db->query('SELECT id,konu,ad_soyad,email,telefon,mesaj,tarih FROM tbl_iletisim');
                                            for ($i = 0; $i < $ara->columnCount(); $i++) {
                                                $col = $ara->getColumnMeta($i);
                                                $sutun[] = $col['name']; //Kolon isimlerini çekmek için
                                            }
                                            $i = 1;
                                            $sutun[1] = "ID";
                                            $sutun[2] = "Konu";
                                            $sutun[3] = "Ad Soyad";
                                            $sutun[4] = "E-Mail";
                                            $sutun[5] = "Telefon";
                                            $sutun[6] = "Mesaj";
                                            $sutun[7] = "Tarih";
                                            while ($i <= $ara->columnCount()) {
                                                echo '<th scope="col">' . $sutun[$i] . '</th>';
                                                $i++;
                                            }
                                            echo '<th scope="col">Seçenekler</th>';
                                            echo '</tr>
                                </thead>
                                <tbody>';
                                            $listelenen = 15;
                                            $sayi = $db->query("select count(*) from tbl_iletisim")->fetchColumn();
                                            $toplamsayfa     = ceil($sayi / $listelenen);
                                            $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
                                            if ($sayfa < 1) $sayfa = 1;
                                            if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
                                            $limit = ($sayfa - 1) * $listelenen;
                                            $arama = "";
                                            if (isset($_POST['ara'])) {
                                                $arama = $_POST['ara'];
                                            }
                                        
                                            
                                                foreach ($db->query("SELECT id,konu,ad_soyad,email,telefon,mesaj,tarih FROM tbl_iletisim") as $gelen)
                                                {
                                                echo '<tr>';
                                                for ($i=0; $i <7 ; $i++) { 
                                                    echo  '<td>' . $gelen[$i] . '</td>';
                                                }
                                                
                                               






                                                ?>




                                                <td class="td-actions">
                                                    <a href="<?php echo 'mailto:'.$gelen[3]; ?>?subject=<?php echo $gelen[1]; ?>" rel="tooltip" title="Mesajı Cevapla" class="btn btn-info btn-simple btn-sm"> <i class="fa fa-edit"></i></a>








                                                    <a onclick=" Swal.fire({
          title: 'Emin Misiniz?',
          text: 'İşlem Geri Alınamayacak!',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'İptal',
          confirmButtonText: 'Evet, Sil!'
        }).then((result) => {
    
          if (result.value) {
    
            Swal.fire(
                {
                   title: 'Silindi!',
            text:  'Mesaj Başarıyla Silindi.',
              type: 'success',
              confirmButtonColor: '#3085d6',
          confirmButtonText: 'Kapat'
   
                }
        
      
            ).then(function() {
            window.location = '../islemler/sil.php?mesajsil=<?php echo $gelen[0];  ?>';
        });
   
          }
        })" rel="tooltip" title="Mesajı Sil" class="btn btn-danger sweet-3 btn-simple btn-sm" data-toggle="confirmation"> <i class="fa fa-times"></i></a>

                                                </td>
                                                </tr>

                                            <?php } ?>

                                            </tbody>
                                    </table>


                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                        <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                        <?php
        for ($s = 1; $s <= $toplamsayfa; $s++) {
          if ($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
            echo '<li class="page-item active"><a class="page-link"href="?sirala=' . $_GET['sirala'] . '&sayfa=' . $s . '">' . $s . '</a></li>';
          } else {
            echo '<li class="page-item"><a class="page-link"href="?sirala=' . $_GET['sirala'] . '&sayfa=' . $s . '">' . $s . '</a></li> ';
          }
        }
        ?>


                                        </ul>
                                    </nav>
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

<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="../assets/js/sweetalert2.all.min.js"></script>
<script src="../assets/js/sweetalert2.min.js"></script>

</html>