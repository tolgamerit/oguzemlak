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
    <link href="../assets/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/richtext.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="assets/js/jquery.richtext.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
    <link href="../assets/css/ekko-lightbox.css" rel="stylesheet" />



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

        .alert.success {
            background-color: #4CAF50;
        }

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

        .dropdown-item:hover {
            background-color: #6ec7e0 !important;
        }

        .dropdown-item:active {
            background-color: #86d9ab !important;
        }

        }
         .modal-header

        {
            display: none !important;
        }
        .modal-content {
            box-shadow: none !important;
            background-color: transparent !important;
        }
      
      
        .rsm1 {
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22) !important;
        }
        .ekko-lightbox-nav-overlay a {
            color: #101010 !important;
        }
        .carousel-cell {
            counter-increment: gallery-cell;
        }
        .modal-body {
            padding: 0px 0px 0px 0px !important;
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

                            <div class="card">
                                <div class="header">
                                    <h4 class="title">İlan Güncelleme</h4>
                                </div>
                                <div class="content">

                                    <?php
                                    include("../islemler/ilanguncelle.php");

                                    $id = $_GET['detaylar'];
                                    $ilangetir = $db->query("SELECT * FROM tbl_ilan where ilan_numarasi='$id'")->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <form id="contact-form" class="form" enctype="multipart/form-data" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Adı</label>
                                                    <input type="text" class="form-control" placeholder="İlan Adını Girin..." name="ilanad" value="<?php echo  $ilangetir['ilan_Adi'];  ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">

                                            <?php
                                            require_once("mysql.php");
                                            ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>İl</label>
                                                    <select class="form-control" id="il" name="il">
                                                        <option value="0">Şehir Seçiniz</option>
                                                        <?php
                                                        $sql = $db->q("SELECT id,il_adi FROM il ORDER BY id ASC");
                                                        while ($row = $db->fassoc($sql)) {
                                                            ?>
                                                            <option value="<?= $row['id'] ?>" <?php if ($row['id'] == 7) { ?> selected="selected" <?php } ?>><?= $row['il_adi'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>İlçe</label>
                                                    <select class="form-control" name="ilce" id="ilce">
                                                        <option value="0">İlçe Seçiniz</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Semt</label>
                                                    <select class="form-control" name="semt" id="semt">
                                                        <option value="0">Semt Seçiniz</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mahalle</label>
                                                    <select class="form-control" name="mahalle" id="mahalle">
                                                        <option value="0">Mahalle Seçiniz</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class=" form-group ">
                                                    <label>Kategori</label>
                                                    <select name="kategori" class="form-control" id="kategori">
                                                        <option value="arsa" <?php if ($ilangetir['ilan_Kategori'] == "arsa") echo 'selected' ?>>Arsa</option>
                                                        <option value="isyeri" <?php if ($ilangetir['ilan_Kategori'] == "isyeri") echo 'selected' ?>>İşyeri</option>
                                                        <option value="konut" <?php if ($ilangetir['ilan_Kategori'] == "konut") echo 'selected' ?>>Konut</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>İlan Fiyat</label>
                                                    <input type="text" class="form-control" placeholder="İlan Fiyatını Girin..." name="fiyat" value="<?php echo
                                                                                                                                                            $ilangetir['ilan_Fiyat'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Durum</label>
                                                <select name="durum" class="form-control" id="durum">
                                                    <option value="kiralik" <?php if ($ilangetir['ilan_Durum'] == "kiralik") echo 'selected' ?>>Kiralık</option>
                                                    <option value="satilik" <?php if ($ilangetir['ilan_Durum'] == "satilık") echo 'selected' ?>>Satılık</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Metrekare M²</label>
                                                    <input type="text" class="form-control" placeholder="Metrekare M²" name="metrekare" value="<?php echo $ilangetir['ilan_Metrekare'];  ?>">

                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Oda Sayısı</label>
                                                    <select name="odasayisi" class="form-control" id="odasayisi">
                                                        <option value="1+0" <?php if ($ilangetir['ilan_OdaSayisi'] == "1+0") echo 'selected' ?>>1+0</option>
                                                        <option value="1+1" <?php if ($ilangetir['ilan_OdaSayisi'] == "1+1") echo 'selected' ?>>1+1</option>
                                                        <option value="2+1" <?php if ($ilangetir['ilan_OdaSayisi'] == "2+1") echo 'selected' ?>>2+1</option>
                                                        <option value="3+1" <?php if ($ilangetir['ilan_OdaSayisi'] == "3+1") echo 'selected' ?>>3+1</option>
                                                        <option value="4+1" <?php if ($ilangetir['ilan_OdaSayisi'] == "4+1") echo 'selected' ?>>4+1</option>
                                                        <option value="5+1" <?php if ($ilangetir['ilan_OdaSayisi'] == "5+1") echo 'selected' ?>>5+1</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Bulunduğu Kat</label>
                                                    <select name="bulundugukat" class="form-control" id="bulundugukat">
                                                        <option value="bodrum" <?php if ($ilangetir['ilan_BulunduguKat'] == "Bodrum Katı") echo 'selected' ?>>Bodrum Katı</option>
                                                        <option value="zemin" <?php if ($ilangetir['ilan_BulunduguKat'] == "Zemin Katı") echo 'selected' ?>>Zemin Katı</option>
                                                        <option value="bahce" <?php if ($ilangetir['ilan_BulunduguKat'] == "Bahçe Katı") echo 'selected' ?>>Bahçe Katı</option>
                                                        <option value="giris" <?php if ($ilangetir['ilan_BulunduguKat'] == "Giriş Katı") echo 'selected' ?>>Giriş Katı</option>
                                                        <option value="yuksekgiris" <?php if ($ilangetir['ilan_BulunduguKat'] == "Yüksek Giriş") echo 'selected' ?>>Yüksek Giriş</option>
                                                        <?php for ($i = 1; $i <= 29; $i++) {
                                                            ?>

                                                            <option value=<?php echo $i; ?> <?php if ($ilangetir['ilan_BulunduguKat'] == $i) echo 'selected' ?>><?php echo $i; ?></option>
                                                           
                                                        <?php } ?>
                                                        <option value="30+" <?php if ($ilangetir['ilan_BulunduguKat'] == "30+") echo 'selected' ?>>30 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kat Sayısı</label>
                                                    <select name="katsayisi" class="form-control" id="katsayisi">
                                                        <?php for ($i = 1; $i <= 29; $i++) {
                                                            ?>

                                                            <option value=<?php echo $i; ?> <?php if ($ilangetir['ilan_KatSayisi'] == $i) echo 'selected' ?>><?php echo $i; ?></option>


                                                        <?php } ?>
                                                        <option value="30+" <?php if ($ilangetir['ilan_KatSayisi'] == "30+") echo 'selected' ?>>30 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Bina Yaşı</label>
                                                    <select name="binayas" class="form-control" id="binayas">
                                                        <?php for ($i = 0; $i <= 4; $i++) {

                                                            ?>
                                                            <option value=<?php echo $i; ?> <?php if ($ilangetir['ilan_BinaYasi'] == $i) echo 'selected' ?>><?php echo $i; ?></option>
                                                        <?php } ?>
                                                        <option value="5-10" <?php if ($ilangetir['ilan_BinaYasi'] == "5-10") echo 'selected' ?>>5-10 arası</option>
                                                        <option value="11-15" <?php if ($ilangetir['ilan_BinaYasi'] == "11-15") echo 'selected' ?>>11-15 arası</option>
                                                        <option value="16-20" <?php if ($ilangetir['ilan_BinaYasi'] == "16-20") echo 'selected' ?>>16-20 arası</option>
                                                        <option value="21-25" <?php if ($ilangetir['ilan_BinaYasi'] == "21-25") echo 'selected' ?>>21-25 arası</option>
                                                        <option value="26-30" <?php if ($ilangetir['ilan_BinaYasi'] == "26-30") echo 'selected' ?>>26-30 arası</option>
                                                        <option value="31+" <?php if ($ilangetir['ilan_BinaYasi'] == "31+") echo 'selected' ?>>31 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kullanım</label>
                                                    <select name="kullanim" class="form-control" id="kullanim">
                                                        <option value="bos" <?php if ($ilangetir['ilan_KullanimDurumu'] == "Boş") echo 'selected' ?>>Boş</option>
                                                        <option value="dolu" <?php if ($ilangetir['ilan_KullanimDurumu'] == "Dolu") echo 'selected' ?>>Dolu</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kredi Uygunluk</label>
                                                    <select name="kredi" class="form-control" id="kredi">
                                                        <option value="evet" <?php if ($ilangetir['ilan_KrediUygunluk'] == "Evet") echo 'selected' ?>>Evet</option>
                                                        <option value="hayir" <?php if ($ilangetir['ilan_KrediUygunluk'] == "Hayır") echo 'selected' ?>>Hayır</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Eşyalı</label>
                                                    <select name="esyali" class="form-control" id="esyali">
                                                        <option value="evet" <?php if ($ilangetir['ilan_Esyali'] == "Evet") echo 'selected' ?>>Evet</option>
                                                        <option value="hayir" <?php if ($ilangetir['ilan_Esyali'] == "Hayır") echo 'selected' ?>>Hayır</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Site İçerisinde</label>
                                                    <select name="siteicerisi" class="form-control" id="siteicerisi">
                                                        <option value="evet" <?php if ($ilangetir['ilan_SiteIcerisinde'] == "Evet") echo 'selected' ?>>Evet</option>
                                                        <option value="hayir" <?php if ($ilangetir['ilan_SiteIcerisinde'] == "Hayır") echo 'selected' ?>>Hayır</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Cephe</label>
                                                    <select name="cephe" class="form-control" id="cephe">
                                                        <option value="dogu" <?php if ($ilangetir['ilan_Cephe'] == "dogu") echo 'selected' ?>>Doğu</option>
                                                        <option value="bati" <?php if ($ilangetir['ilan_Cephe'] == "bati") echo 'selected' ?>>Batı</option>
                                                        <option value="kuzey" <?php if ($ilangetir['ilan_Cephe'] == "kuzey") echo 'selected' ?>>Kuzey</option>
                                                        <option value="guney" <?php if ($ilangetir['ilan_Cephe'] == "guney") echo 'selected' ?>>Güney</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Isıtma</label>
                                                    <select name="isitma" class="form-control" id="isitma">
                                                        <option value="Soba" <?php if ($ilangetir['ilan_Isitma'] == "Soba") echo 'selected' ?>>Soba</option>
                                                        <option value="Klima" <?php if ($ilangetir['ilan_Isitma'] == "Klima") echo 'selected' ?>>Klima</option>

                                                        <option value="Merkezi" <?php if ($ilangetir['ilan_Isitma'] == "Merkezi") echo 'selected' ?>>Merkezi</option>
                                                        <option value="Dogalgaz" <?php if ($ilangetir['ilan_Isitma'] == "Doğalgaz") echo 'selected' ?>>Doğalgaz</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Aidat</label>
                                                    <input type="text" class="form-control" placeholder="Aidat" name="aidat" value="<?php
                                                                                                                                    echo
                                                                                                                                        $ilangetir['ilan_Aidat'];
                                                                                                                                    ?>">

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <?php

                                            $b = 1;
                                                for ($i = 21; $i <= 30; $i++) {
                                            if ($ilangetir['ilan_resim' . $b] != "") {


                                                ?>
                                                 <div class="col-md-1">
                                                 <div class="carousel mb-3" data-flickity='{ "autoPlay": true }'>
                                                 <img style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)"  data-toggle="lightbox" data-gallery="example-gallery" href="<?php echo '../' . $ilangetir['ilan_resim' . $b] ?>" src="<?php echo '../' . $ilangetir['ilan_resim' . $b] ?>" class="img-responsive rounded carousel-cell-image rounded">

</div></div>
<?php
                                            }
                                                  


                                            $b++;
                                            
                                                }
                                               
                                                    ?>
                                               


                                            


                                        </div>
                                  
                                        <script src="assets/js/selectchained.js" type="text/javascript"></script>
                                        <script>
                                            $("#ilce").remoteChained("#il", "smtr.php?ilce=83");
                                            $("#semt").remoteChained("#ilce", "smtr.php?semt=440");
                                            $("#mahalle").remoteChained("#semt", "smtr.php?mahalle=4833");
                                        </script>

                                        <?php $db->close(); ?>




                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Açıklaması</label>
                                                    <textarea name="editor" class="editor form-control" id="editor" rows="150" cols="150">  <?php echo $ilangetir['ilan_Aciklama']; ?>


</textarea>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Google Map Link</label>
                                                    <textarea rows="5" class="form-control" placeholder="Adres Detayları..." name="ilanHarita"><?php echo $ilangetir['ilan_Harita']; ?></textarea>


                                                </div>
                                            </div>
                                        </div>





                                        <button onclick="vericek()" id="submit" name="submit" type="submit" class="btn btn-info btn-fill pull-right">Güncelle</button>




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

    <script>
        if ($("[data-toggle='switch']").length != 0) {
            $("[data-toggle='switch']").bootstrapSwitch();

        }
        $('.editor').richText();
    </script>
   <script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

</body>


<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-yonetim.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<<script src="../assets/js/bootstrap-toggle.min.js">
    </script>
    <script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="../assets/js/sweetalert2.all.min.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>
    <script src="../assets/js/ekko-lightbox.js"></script>
<script src="../assets/js/ekko-lightbox.min.js"></script>

</html>