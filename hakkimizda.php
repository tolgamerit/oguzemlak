<?php
define("include", true);
include("assets/config.php");
?>
<!doctype html>

<html lang="tr">

<head>
  <title>Oğuz Emlak | Hakkımızda</title>
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

<!--HAKKIMIZDA -->
<div class="container mt-5 mb-5">
<div class="row rounded p-3" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)">
  <div class="col-md-12">
  
<p class="ml-5 h2">
<strong>Hakkımızda</strong>
</p>
<div class="mb-5">
  <?php 
  $link='Hakkımızda';
 $sql = $db->prepare("SELECT * FROM tbl_sayfa WHERE sayfaAd= ?");
 $sql->execute(array($link));
 $sayfagetir=$sql->fetch(PDO::FETCH_ASSOC);

echo '<h4>'.$sayfagetir['SayfaIcerik'].'</h4>';

  ?>
</div>

  </div>

</div>

</div>

<!-- HAKKIMIZDA -->





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
    <div  class="row p-5 bg-info">
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