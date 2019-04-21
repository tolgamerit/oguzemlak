<?php

define("include", true);
include("assets/config.php");

?>
<!doctype html>
<html lang="tr">

<head>
  <title>Oğuz Emlak | Satılık İlanlar</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <style>
    .breadcrumb {

      background-color: #ffffff !important;
    }

    .ilan {

      margin-left: auto;
      margin-right: auto;

    }

    .embed-responsive .card-img-top {
      object-fit: cover;
    }

    .map-responsive {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    .dropdown-item:hover {
      background-color: #6ec7e0 !important;
    }

    .dropdown-item:active {
      background-color: #86d9ab !important;
    }

    .ck {
      max-width: 70px !important;
    }
    .cll
    {
      color: #6c757d!important;
      border: 2px solid  #17a2b8 !important;
    }
  
   
  </style>


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
            <a class="nav-link text-dark" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->

  
    <!-- SATILIK LİSTELEME -->
  <?php
  ?>
  <div class="container-fluid mt-5 ">
    <nav id="hrt" aria-label="breadcrumb " role="navigation">
      <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="anasayfa"> <strong>Anasayfa </strong></a></li>
        <li class="breadcrumb-item active" aria-current="page"><strong>Satılık</strong></li>
        <?php
        if ($_GET['ilan'] == 'arsa')
          echo ' <li class="breadcrumb-item "><a href="satilik-arsa"><strong>Satılık Arsa</strong></a></li>';
        elseif ($_GET['ilan'] == 'konut')
          echo ' <li class="breadcrumb-item "><a href="satilik-konut"><strong>Satılık Konut</strong></a></li>';
        else
          echo ' <li class="breadcrumb-item "><a href="satilik-isyeri"><strong>Satılık İşyeri</strong></a></li>';

        ?>

      </ol>
    </nav>
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-3 ">
        <div class="">
        <?php if($_GET['ilan']=="arsa"){ ?>
          <form class="form ">
            <div class="form-group">
              <label class="lead">Fiyat Aralığı</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-fiyat" id="min-fiyat" placeholder="min">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-fiyat" id="max-fiyat" placeholder="max">

                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="lead">Metrekare (Brüt)</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-m2" id="min-m2" placeholder="m²">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-m2" id="max-m2" placeholder="m²">

                </div>
              </div>
            </div>
            <div class="form-group ">
              <label class="lead">Krediye Uygunluk</label>

              <select style="  max-width: 100px !important;" class="custom-select " name="kredidurum">
                <option value='evet'>Evet</option>
                <option value='hayir'>Hayır</option>


              </select>

            </div>

            <div class="form-group ">
              <label class="lead">Tapu Durumu</label>

              <select style="  max-width: 165px !important;" class="custom-select " name="tapudurum">
                <option value='arsa'>Arsa</option>
                <option value='hisseli'>Hisseli</option>
                <option value='kat-irtifak'>Kat İrtifaklı</option>
                <option value='kat-mulkiyet'>Kat Mülkiyetli</option>
                <option value='mustakil-parsel'>Müstakil Parsel</option>


              </select>

            </div>

            <button type="submit" class="btn mx-auto btn-danger">ARA</button>
          </form>
          <?php }elseif($_GET['ilan']=='isyeri'){ ?>
            <form class="form ">
            <div class="form-group">
              <label class="lead">Fiyat Aralığı</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-fiyat" id="min-fiyat" placeholder="min">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-fiyat" id="max-fiyat" placeholder="max">

                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="lead">Metrekare (Brüt)</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-m2" id="min-m2" placeholder="m²">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-m2" id="max-m2" placeholder="m²">

                </div>
              </div>
            </div>
            

            <button type="submit" class="btn mx-auto btn-danger">ARA</button>
          </form><?php }elseif($_GET['ilan']=='konut') {?>
            <form class="form ">
            <div class="form-group">
              <label class="lead">Fiyat Aralığı</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-fiyat" id="min-fiyat" placeholder="min">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-fiyat" id="max-fiyat" placeholder="max">

                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="lead">Metrekare (Brüt)</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="min-m2" id="min-m2" placeholder="m²">

                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control ck" name="max-m2" id="max-m2" placeholder="m²">

                </div>
              </div>
            </div>
            <div class="form-group ">
              <label class="lead">Oda Sayısı</label>

              <select style="  max-width: 70px !important;" class="custom-select " name="odasayisi">
                <option value='0'>1+0</option>
                <option value='1'>1+1</option>
                <option value='2'>2+1</option>
                <option value='3'>3+1</option>
                <option value='4'>4+1</option>
                <option value='5'>5+1</option>
              </select>

            </div>
            <div class="form-group ">
              <label class="lead">Bina Yaşı</label>

              <select style="  max-width: 70px !important;" class="custom-select " name="binayas">
                <option value='0'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5-10'>5-10</option>
                <option value='11-15'>11-15</option>
                <option value='16-20'>16-20</option>
                <option value='21-25'>21-25</option>
                <option value='26-30'>26-30</option>
                <option value='30ust'>30+</option>
              </select>

            </div>
            <div class="form-group ">
              <label class="lead">Bulunduğu Kat</label>

              <select style="  max-width: 135px !important;" class="custom-select " name="bulundugukat">
                <option value='zemin'>Zemin Kat</option>
                <option value='giris'>Giriş Katı</option>
                <option value='yuksekgiris'>Yüksek Giriş</option>
                <option value='mustakil'>Müstakil</option>
                <?php  for ($i=0; $i <=29 ; $i++) { 
                  echo '<option value="'.$i.'"> '.$i.'</option>';
                } ?>
               
                <option value='30ust'>30+</option>
              </select>

            </div>
            <div class="form-group ">
              <label class="lead">Kat Sayısı</label>

              <select style="  max-width:  70px !important;" class="custom-select " name="katsayisi">
          
                <?php  for ($i=0; $i <=20 ; $i++) { 
                  echo '<option value="'.$i.'"> '.$i.'</option>';
                } ?>
               
          
              </select>

            </div>
            <div class="form-group ">
              <label class="lead">Isıtma</label>

              <select style="  max-width: 165px !important;" class="custom-select " name="isitma">
                <option value='soba'>Soba</option>
                <option value='merkezi'>Merkezi Sistem</option>
                <option value='dogalgaz'>Doğalgaz</option>
                <option value='klima'>Klima</option>
               
              </select>

            </div>
            <div class="form-group ">
              <label class="lead">Krediye Uygunluk</label>

              <select style="  max-width: 100px !important;" class="custom-select " name="kredidurum">
                <option value='evet'>Evet</option>
                <option value='hayir'>Hayır</option>


              </select>

            </div>
            

            <button type="submit" class="btn mx-auto btn-danger">ARA</button>
          </form>
          <?php }?>
  
        </div>

      </div>
      <div class="col-lg-10 col-md-9 col-sm-9">
        <div class="row">
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->
          <!-- İLAN -->
          <div class="col-md-4 ">
            <a href="#">
              <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/arsa.jpg" />
                </div>
                <div class="card-body">
                  <h4 class="card-title">İlan Başlığı</h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: 000005</strong></span>
                    <span class="float-right text-muted text-danger"><strong>212.000 TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <p class="h6 text-muted h5 mt-4"><em class="fa fa-map-marker"></em>Adana / Seyhan / Reşatbey Mah.</p>

                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- İLAN -->

        </div>
      </div>
    </div><nav aria-label="sayfalama">
  <ul class="pagination justify-content-center">
   
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    
  </ul>
</nav>
  </div>

  <!-- SATILIK LİSTELEME -->
 

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
                  <span><button class="btn btn-outline-success btn-round">Kiralık</button>
                  </span>
                  <span><button class="btn btn-outline-success btn-round">Satılık</button>
                  </span>
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
              <h4 class="card-title text-center"><strong>İŞ YERİ</strong></h4>
              <p class="card-text">
                <div class="yayin-bilgi text-center">
                  <span><button class="btn btn-outline-success btn-round">Kiralık</button>
                  </span>
                  <span><button class="btn btn-outline-success btn-round">Satılık</button>
                  </span>
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
                  <span><button class="btn btn-outline-success btn-round">Kiralık</button>
                  </span>
                  <span><button class="btn btn-outline-success btn-round">Satılık</button>
                  </span>
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
                    <li><a class="text-white" href="#">Konut</a></li>
                    <li><a class="text-white" href="#">İş Yeri</a></li>
                    <li><a class="text-white" href="#">Arsa</a></li>
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

              <a target="_blank" href="#"><em class="fab fa-facebook fa-2x text-white ml-3"></em></a>
              <a target="_blank" href="#"><em class="fab fa-twitter fa-2x text-white ml-3" aria-hidden="true"></em></a>
              <a target="_blank" href="#"><em class="fab fa-instagram fa-2x text-white ml-3" aria-hidden="true"></em></a>
              <p class="text-white h5 mt-4"><em class="fa fa-phone mr-3 mt-2"></em>(322) 222 22 22</p>
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
<script src="assets/js/bootstrap-switch.js"></script>
<script src="assets/js/nouislider.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/paper-kit.js"></script>
<!-- PAPER-UI VE EKLENTILER -->

</html>