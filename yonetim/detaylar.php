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

                            <div class="card">
                                <div class="header">
                                    <h4 class="title">İlan Güncelleme</h4>
                                </div>
                                <div class="content">
                                    <?php
                                    $query = $db->query("SELECT * FROM tbl_sistem")->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <form method="POST" id="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Adı</label>
                                                    <input type="text" class="form-control" placeholder="İlan Adını Girin..." name="ilanad" value="<?php  ?>">
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
                                                        <option value="arsa">Arsa</option>
                                                        <option value="isyeri">İşyeri</option>
                                                        <option value="konut">Konut</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>İlan Fiyat</label>
                                                    <input type="text" class="form-control" placeholder="İlan Fiyatını Girin..." name="fiyat" value="<?php   ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Durum</label>
                                                <div class="form-group">
                                                    <input class="form-control" type="checkbox" data-size="normal" name="durum" value="satilik" checked data-toggle="toggle" data-onstyle="success" data-offstyle="info" data-on="Satılık" data-off="Kiralık">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Metrekare M²</label>
                                                    <input type="text" class="form-control" placeholder="Metrekare M²" name="metrekare" value="<?php   ?>">

                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Oda Sayısı</label>
                                                    <select name="odasayisi" class="form-control" id="odasayisi">
                                                        <option value="1+0">1+0</option>
                                                        <option value="1+1">1+1</option>
                                                        <option value="2+1">2+1</option>
                                                        <option value="3+1">3+1</option>
                                                        <option value="4+1">4+1</option>
                                                        <option value="5+1">5+1</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Bulunduğu Kat</label>
                                                    <select name="bulundugukat" class="form-control" id="bulundugukat">
                                                        <option value="bodrum">Bodrum Katı</option>
                                                        <option value="zemin">Zemin Katı</option>
                                                        <option value="bahce">Bahçe Katı</option>
                                                        <option value="giris">Giriş Katı</option>
                                                        <option value="yuksekgiris">Yüksek Giriş</option>
                                                    <?php for ($i=1; $i <=29 ; $i++) { 
                                                       echo "<option value='$i'>$i</option>";
                                                    } ?>
                                                        <option value="30+">30 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kat Sayısı</label>
                                                    <select name="katsayisi" class="form-control" id="katsayisi">
                                                    <?php for ($i=1; $i <=29 ; $i++) { 
                                                       echo "<option value='$i'>$i</option>";
                                                    } ?>
                                                        <option value="30+">30 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Bina Yaşı</label>
                                                    <select name="binayas" class="form-control" id="binayas">
                                                    <?php for ($i=0; $i <=4 ; $i++) { 
                                                       echo "<option value='$i'>$i</option>";
                                                    } ?>
                                                        <option value="5-10">5-10 arası</option>
                                                        <option value="11-15">11-15 arası</option>
                                                        <option value="16-20">16-20 arası</option>
                                                        <option value="21-25">21-25 arası</option>
                                                        <option value="26-30">26-30 arası</option>
                                                        <option value="31+">31 ve üzeri</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kullanım</label>
                                                    <select name="kullanim" class="form-control" id="kullanim">
                                                        <option value="bos">Boş</option>
                                                        <option value="dolu">Dolu</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Kredi Uygunluk</label>
                                                    <select name="kredi" class="form-control" id="kredi">
                                                        <option value="evet">Evet</option>
                                                        <option value="hayir">Hayır</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Eşyalı</label>
                                                    <select name="esyali" class="form-control" id="esyali">
                                                        <option value="evet">Evet</option>
                                                        <option value="hayir">Hayır</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Site İçerisinde</label>
                                                    <select name="siteicerisi" class="form-control" id="siteicerisi">
                                                        <option value="evet">Evet</option>
                                                        <option value="hayir">Hayır</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Cephe</label>
                                                    <select name="cephe" class="form-control" id="cephe">
                                                        <option value="dogu">Doğu</option>
                                                        <option value="bati">Batı</option>
                                                        <option value="kuzey">Kuzey</option>
                                                        <option value="guney">Güney</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Isıtma</label>
                                                    <select name="isitma" class="form-control" id="isitma">
                                                        <option value="klima">Klima</option>
                                                        <option value="soba">Soba</option>
                                                        <option value="merkezi">Merkezi</option>
                                                        <option value="dogalgaz">Doğalgaz</option>
                                                  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class=" form-group ">
                                                    <label>Aidat</label>
                                                    <input type="text" class="form-control" placeholder="Aidat" name="aidat" value="<?php   ?>">

                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Adı</label>
                                                    <input type="text" class="form-control" placeholder="İlan Adını Girin..." name="ilanad" value="<?php  ?>">
                                                </div>
                                            </div> 
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
                                                    <textarea name="editor" class="editor form-control" id="editor" rows="10" cols="80">  <?php echo $sayfagetir['SayfaIcerik']; ?>
</textarea>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>İlan Google Map Link</label>
                                                    <textarea rows="5" class="form-control" placeholder="Adres Detayları..." name="ilanHarita"><?php echo $query['map'];  ?></textarea>


                                                </div>
                                            </div>
                                        </div>





                                        <button id="submit" name="submit" type="submit" class="btn btn-info btn-fill pull-right">Güncelle</button>




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

</body>


<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-yonetim.min.js" type="text/javascript"></script>
<script src="../assets/js/chartist.min.js"></script>
<<script src="../assets/js/bootstrap-toggle.min.js">
    </script>
    <script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="../assets/js/sweetalert2.all.min.js"></script>
    <script src="../assets/js/sweetalert2.min.js"></script>

</html>