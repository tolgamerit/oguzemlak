<?php
ob_start();
session_start();
define("include", true);
include("assets/config.php");
include("assets/function.php");
?>
<!doctype html>
<html lang="tr">

<head>
  <title>Oğuz Emlak | Aranan İlanlar</title>
  <meta charset="utf-8">
  <meta name="theme-color" content="#6ec7e0">

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />
  <link href="assets/css/site.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/all.css">
    <script src="assets/js/all.js" type="text/javascript"></script>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container ">
      <a class="navbar-brand" href="anasayfa">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobil" aria-controls="navbarMobil" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMobil">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="satilikdropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Satılık
            </a>
            <div class="dropdown-menu" aria-labelledby="satilikDropdown">
              <a class="dropdown-item" href="satilik-arsa">Arsa</a>
              <a class="dropdown-item" href="satilik-isyeri">İşyeri</a>
              <a class="dropdown-item" href="satilik-konut">Konut</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="kiralikdropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kiralık
            </a>
            <div class="dropdown-menu" aria-labelledby="kiralikDropdown">
              <a class="dropdown-item" href="kiralik-arsa">Arsa</a>
              <a class="dropdown-item" href="kiralik-isyeri">İşyeri</a>
              <a class="dropdown-item" href="kiralik-konut">Konut</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="hakkimizda">Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="iletisim">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Facebook']; ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Twitter']; ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Instagram']; ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->


  <!-- KİRALIK LİSTELEME -->
  <?php
  ?>
  <div class="container mt-5 ">
    <nav id="hrt" aria-label="breadcrumb " role="navigation">
      <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="anasayfa"> <strong>Anasayfa </strong></a></li>
        <li class="breadcrumb-item active" aria-current="page"><strong>
            <?php if ($_SESSION['durum'] == 'satilik')

              echo 'Satılık';
            else {

                echo 'Kiralık';
                $_SESSION['durum'] = "kiralik";
              } ?>
          </strong></li>
        <?php
        if ($_SESSION['kategori'] == 'arsa' and $_SESSION['durum'] == 'kiralik')
          echo ' <li class="breadcrumb-item "><a href="kiralik-arsa"><strong>Kiralık Arsa</strong></a></li>';
        elseif ($_SESSION['kategori'] == 'arsa' and $_SESSION['durum'] == 'satilik')
          echo ' <li class="breadcrumb-item "><a href="satilik-arsa"><strong>Satılık Arsa</strong></a></li>';
        if ($_SESSION['kategori'] == 'konut' and $_SESSION['durum'] == 'kiralik')
          echo ' <li class="breadcrumb-item "><a href="kiralik-konut"><strong>Kiralık Konut</strong></a></li>';
        elseif ($_SESSION['kategori'] == 'konut' and $_SESSION['durum'] == 'satilik')
          echo ' <li class="breadcrumb-item "><a href="satilik-konut"><strong>Satılık Konut</strong></a></li>';
        if ($_SESSION['kategori'] == 'isyeri' and $_SESSION['durum'] == 'kiralik')
          echo ' <li class="breadcrumb-item "><a href="kiralik-isyeri"><strong>Kiralık İşyeri</strong></a></li>';
        elseif ($_SESSION['kategori'] == 'isyeri' and $_SESSION['durum'] == 'satilik')
          echo ' <li class="breadcrumb-item "><a href="satilik-isyeri"><strong>Satılık İşyeri</strong></a></li>';
        ?>

      </ol>
    </nav>
    <div class="row mb-5 ">
      <div class="col-md-2 dropdown  ">
        <button class="btn btn-sm btn-info rounded dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sıralama
        </button>
        <div class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item bg-light" href="?sirala=tarih">Yayın Tarihine Göre Yeni</a>
          <a class="dropdown-item bg-light" href="?sirala=ucuz-pahali">Ucuzdan Pahalıya</a>
          <a class="dropdown-item bg-light" href="?sirala=pahali-ucuz">Pahalıdan Ucuza</a>
        </div>
      </div>
    </div>
    <div class="row">


      <div class="col-lg-12">
        <div class="row">
          <?php
            if(!isset($_GET['sirala'])) $_GET['sirala']='tarih';
          if ($_POST['kategori'] != "") { }

          $listelenen = 15;
          $sayi = $db->query("SELECT * FROM tbl_ilan ")->rowCount();

          $toplamsayfa     = ceil($sayi / $listelenen);
          $sayfa = isset($_GET['sayfa']) ? (int)$_GET['sayfa'] : 1;
          if ($sayfa < 1) $sayfa = 1;
          if ($sayfa > $toplamsayfa) $sayfa = $toplamsayfa;
          $limit = ($sayfa - 1) * $listelenen;
          $kategori = $_SESSION['kategori'];
          $durum = $_SESSION['durum'];
          $ilanad = $_SESSION['ilanad'];
          if ($_GET['sirala'] == "tarih") {
              foreach ($db->query("select * from tbl_ilan where (ilan_numarasi like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') or (ilan_Konum like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') order by ilan_YayinTarihi desc LIMIT $limit,$listelenen") as $gelen) {

                $seourl = seo($gelen['ilan_Adi']);
                ?>
              <!-- İLAN -->
              <div class="col-md-4 d-flex">
        
        <div class="card  flex-fill">
        <a href="<?php echo $seourl . '-' . $gelen['ilan_numarasi']; ?>">

          <div class="embed-responsive embed-responsive-16by9 ">
            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/sample.jpg" />
          </div>

          <div class="card-body">

            <h4 class="card-title"><?php echo mb_strtolower($gelen['ilan_Adi'], 'utf8'); ?></h4>
            <div class="yayin-bilgi mt-2">
              <span class="float-left"><strong class="ab">İlan Numarası: <?php echo $gelen['ilan_numarasi']; ?></strong></span>
              <span class="float-right text-muted text-success"><strong class="ab"><?php
                                                                        echo number_format(
                                                                          $gelen['ilan_Fiyat'],
                                                                          0,
                                                                          ',',
                                                                          '.'
                                                                        );
                                                                        ?> TL</strong></span>
            </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <span class="col-12 h6 text-muted text-left ab"><em class="fa fa-map-marker"></em><?php echo $gelen['ilan_Konum']; ?></span>

            </div>
            <div class="row ">
              <span class="col-12 h6 text-muted text-left ab"><i class="fas fa-calendar ml-1 mr-1"> </i><?php echo $gelen['ilan_YayinTarihi']; ?></span>

            </div>
          </div>
        </a>
        </div>
     



    </div><?php
                }
              } elseif ($_GET['sirala'] == "ucuz-pahali") {
                foreach ($db->query("select * from tbl_ilan where (ilan_numarasi like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') or (ilan_Konum like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') order by ilan_Fiyat asc LIMIT $limit,$listelenen") as $gelen) {


                  $seourl = seo($gelen['ilan_Adi']);
                  ?>
              <!-- İLAN -->
              <div class="col-md-4 d-flex">
        
        <div class="card  flex-fill">
        <a href="<?php echo $seourl . '-' . $gelen['ilan_numarasi']; ?>">

          <div class="embed-responsive embed-responsive-16by9 ">
            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/sample.jpg" />
          </div>

          <div class="card-body">

            <h4 class="card-title"><?php echo mb_strtolower($gelen['ilan_Adi'], 'utf8'); ?></h4>
            <div class="yayin-bilgi mt-2">
              <span class="float-left"><strong class="ab">İlan Numarası: <?php echo $gelen['ilan_numarasi']; ?></strong></span>
              <span class="float-right text-muted text-success"><strong class="ab"><?php
                                                                        echo number_format(
                                                                          $gelen['ilan_Fiyat'],
                                                                          0,
                                                                          ',',
                                                                          '.'
                                                                        );
                                                                        ?> TL</strong></span>
            </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <span class="col-12 h6 text-muted text-left ab"><em class="fa fa-map-marker"></em><?php echo $gelen['ilan_Konum']; ?></span>

            </div>
            <div class="row ">
              <span class="col-12 h6 text-muted text-left ab"><i class="fas fa-calendar ml-1 mr-1"> </i><?php echo $gelen['ilan_YayinTarihi']; ?></span>

            </div>
          </div>
        </a>
        </div>
     



    </div><?php
                }
              } elseif ($_GET['sirala'] == "pahali-ucuz") {
                foreach ($db->query("select * from tbl_ilan where (ilan_numarasi like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') or (ilan_Konum like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') order by ilan_Fiyat desc LIMIT $limit,$listelenen") as $gelen) {


                  $seourl = seo($gelen['ilan_Adi']);
                  ?>
              <!-- İLAN -->
              <div class="col-md-4 d-flex">
        
        <div class="card  flex-fill">
        <a href="<?php echo $seourl . '-' . $gelen['ilan_numarasi']; ?>">

          <div class="embed-responsive embed-responsive-16by9 ">
            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/sample.jpg" />
          </div>

          <div class="card-body">

            <h4 class="card-title"><?php echo mb_strtolower($gelen['ilan_Adi'], 'utf8'); ?></h4>
            <div class="yayin-bilgi mt-2">
              <span class="float-left"><strong class="ab">İlan Numarası: <?php echo $gelen['ilan_numarasi']; ?></strong></span>
              <span class="float-right text-muted text-success"><strong class="ab"><?php
                                                                        echo number_format(
                                                                          $gelen['ilan_Fiyat'],
                                                                          0,
                                                                          ',',
                                                                          '.'
                                                                        );
                                                                        ?> TL</strong></span>
            </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <span class="col-12 h6 text-muted text-left ab"><em class="fa fa-map-marker"></em><?php echo $gelen['ilan_Konum']; ?></span>

            </div>
            <div class="row ">
              <span class="col-12 h6 text-muted text-left ab"><i class="fas fa-calendar ml-1 mr-1"> </i><?php echo $gelen['ilan_YayinTarihi']; ?></span>

            </div>
          </div>
        </a>
        </div>
     



    </div><?php
                }
              } else {
                foreach ($db->query("SELECT * from tbl_ilan where (ilan_numarasi like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') or (ilan_Konum like '%$ilanad%' and ilan_Kategori='$kategori' and ilan_Durum='$durum') LIMIT $limit,$listelenen") as $gelen) {


                  $seourl = seo($gelen['ilan_Adi']);
                  ?>
              <!-- İLAN -->
              <div class="col-md-4 d-flex">
        
        <div class="card  flex-fill">
        <a href="<?php echo $seourl . '-' . $gelen['ilan_numarasi']; ?>">

          <div class="embed-responsive embed-responsive-16by9 ">
            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/sample.jpg" />
          </div>

          <div class="card-body">

            <h4 class="card-title"><?php echo mb_strtolower($gelen['ilan_Adi'], 'utf8'); ?></h4>
            <div class="yayin-bilgi mt-2">
              <span class="float-left"><strong class="ab">İlan Numarası: <?php echo $gelen['ilan_numarasi']; ?></strong></span>
              <span class="float-right text-muted text-success"><strong class="ab"><?php
                                                                        echo number_format(
                                                                          $gelen['ilan_Fiyat'],
                                                                          0,
                                                                          ',',
                                                                          '.'
                                                                        );
                                                                        ?> TL</strong></span>
            </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <span class="col-12 h6 text-muted text-left ab"><em class="fa fa-map-marker"></em><?php echo $gelen['ilan_Konum']; ?></span>

            </div>
            <div class="row ">
              <span class="col-12 h6 text-muted text-left ab"><i class="fas fa-calendar ml-1 mr-1"> </i><?php echo $gelen['ilan_YayinTarihi']; ?></span>

            </div>
          </div>
        </a>
        </div>
     



    </div><?php
                }
              }
            ?>








        </div>
      </div>
    </div>

    <nav aria-label="sayfalama">
      <ul class="pagination justify-content-center">
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

  <!-- KİRALIK LİSTELEME -->


  <!-- KATEGORİLER -->
  <div class="container-fluid">
    <div class="border-bottom mb-3">
      <p class="h3"><strong>Kategoriler</strong></p>
    </div>
    <div style="background-color: rgba(233, 234, 234, 0.22);">
      <div class="row">
        <!-- ARSA -->
        <div class="col-md-4 ">
          <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
              <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
            </div>
            <div class="card-body">
              <h4 class="card-title text-center"><strong>ARSA</strong></h4>
              <p class="card-text">
                <div class="yayin-bilgi text-center">
                  <a class="btn btn-outline-success btn-round" href="kiralik-arsa">Kiralık</a>
                  <a class="btn btn-outline-success btn-round" href="satilik-arsa">Satılık</a>


                </div>
              </p>
            </div>
          </div>

        </div>
        <!-- ARSA -->
        <!-- İŞ YERİ -->
        <div class="col-md-4 ">
          <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
              <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/ofis.jpg" />
            </div>
            <div class="card-body">
              <h4 class="card-title text-center"><strong>İŞYERİ</strong></h4>
              <p class="card-text">
                <div class="yayin-bilgi text-center">
                  <a class="btn btn-outline-success btn-round" href="kiralik-isyeri">Kiralık</a>
                  <a class="btn btn-outline-success btn-round" href="satilik-isyeri">Satılık</a>

                </div>
              </p>
            </div>
          </div>

        </div>
        <!-- İŞ YERİ -->
        <!-- KONUT -->
        <div class="col-md-4 ">
          <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
              <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/konut.jpg" />
            </div>

            <div class="card-body">
              <h4 class="card-title text-center"><strong>KONUT</strong></h4>
              <p class="card-text">
                <div class="yayin-bilgi text-center">
                  <a class="btn btn-outline-success btn-round" href="kiralik-konut">Kiralık</a>
                  <a class="btn btn-outline-success btn-round" href="satilik-konut">Satılık</a>

                </div>
              </p>
            </div>
          </div>
        </div>
        <!-- KONUT -->
      </div>
    </div>
  </div>
  <!-- KATEGORİLER -->
  <!-- FOOTER -->
  <div class="container-fluid fixed-row-bottom mt-3">
    <div class="row p-5 bg-info">
      <div class="col-md-12 ">
        <div class="row">

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled h5">
                  <div class="text-center">
                    <strong class="text-white ">Gayrimenkul Kategorileri</strong>
                    <li><a class="text-white" href="kiralik-konut">Konut</a></li>
                    <li><a class="text-white" href="kiralik-isyeri">İşyeri</a></li>
                    <li><a class="text-white" href="kiralik-arsa">Arsa</a></li>
                  </div>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled h5">
                  <div class="text-center">
                    <strong class="text-white ">Site Haritası</strong>
                    <li><a class="text-white" href="anasayfa">AnaSayfa</a></li>
                    <li><a class="text-white" href="hakkimizda">Hakkımızda</a></li>
                    <li><a class="text-white" href="iletisim">İletişim</a></li>
                  </div>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-md-6">
          <div class="float-right">

<a target="_blank" href="//<?php echo $query['sosyal_Facebook']; ?>"><em class="fab fa-facebook fa-2x text-white ml-3"></em></a>
<a target="_blank" href="//<?php echo $query['sosyal_Twitter']; ?>"><em class="fab fa-twitter fa-2x text-white ml-3" aria-hidden="true"></em></a>
<a target="_blank" href="//<?php echo $query['sosyal_Instagram']; ?>"><em class="fab fa-instagram fa-2x text-white ml-3" aria-hidden="true"></em></a>
<p class="text-white h5 mt-4"><em class="fa fa-phone mr-3 mt-2"></em><?php echo $query['telefon1']; ?></p>
</div>

          </div>


        </div>


        <p class="text-center text-white h5 mt-5">&copy; 2019 Tüm hakları saklıdır.</p>



      </div>
    </div>
  </div>
  <!-- FOOTER -->




</body>
<!-- PAPER-UI VE EKLENTILER -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/moment.min.js"></script>

<script src="assets/js/paper-kit.js"></script>
<!-- PAPER-UI VE EKLENTILER -->

</html>