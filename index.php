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
  <title>Oğuz Emlak</title>
  <base href="127.0.0.1" />
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!--     Fonts and icons     -->

  <style>
    .embed-responsive .card-img-top {
      object-fit: cover;
    }

    .dropdown-item:hover {
      background-color: #6ec7e0 !important;
    }

    .dropdown-item:active {
      background-color: #86d9ab !important;
    }
   
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



  <!-- İLAN ARAMA -->
  <div class="container-fluid mt-5">
    <div class="rounded text-center" style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)">
      <div class="card-body">
        <p class="h3 lead mb-4 "><strong>İLAN ARAMA</strong> </p>
        <?php
        $_SESSION['durum'] = $_POST['durum'];
        $_SESSION['kategori'] = $_POST['kategori'];
        $_SESSION['ilanad'] = $_POST['ilanad'];
     
        if (isset($_POST['submit']))
          header("Location: arama");
        ?>

        <form method="POST">
          <div class="row d-flex justify-content-center">
            <div class="form-group float-left mb-2">
            <input class="form-control" type="checkbox" name="durum" value="satilik" checked data-toggle="toggle" data-onstyle="success" data-offstyle="info" data-on="Satılık" data-off="Kiralık">

            </div>
        
            <div class="col-md-2 col-lg-2">
             
              <div class="form-group mb-1">

                <select name="kategori" class="form-control" id="kategori">
                  <option value="arsa">Arsa</option>
                  <option value="isyeri">İşyeri</option>
                  <option value="konut">Konut</option>

                </select>
              </div>
            </div>


            <div class="col-md-4 col-lg-4">
              <div class="form-group ">

                <input name="ilanad" type="text" class="form-control" placeholder="Konum ya da İlan Numarası...">


              </div>
            </div>
            <div class="col-md-1">
              <button type="submit" class=" btn btn-success rounded " name="submit" value="submit">ARA</button>

            </div>
          </div>






        </form>

      </div>
    </div>

  </div>

  <!-- İLAN ARAMA -->




  <!-- ÖNE ÇIKAN İLANLAR -->


  <div class="container mt-3">
    <div class="border-bottom mt-5">
      <p class="h3"><strong>Öne Çıkan İlanlar</strong></p>
    </div>
    <div class="row mt-3 ">
      <?php

      foreach ($db->query("select * from tbl_ilan where ilan_OneCikan='evet'") as $gelen) {
        $seourl = seo($gelen['ilan_Adi']);

        ?>


        <!-- İLAN -->
        <div class="col-md-4 ">
          <a href="<?php echo $seourl . '-' . $gelen['ilan_numarasi']; ?>">
            

              <div class="card " >
                <div class="embed-responsive embed-responsive-16by9 ">
                  <img alt="Card image cap" class="card-img-top embed-responsive-item" src="assets/img/sample.jpg" />
                </div>
                <div class="card-body ">
                  <h4 class="card-title"><?php echo mb_strtolower($gelen['ilan_Adi'], 'utf8'); ?></h4>

                  <div class="yayin-bilgi mt-2">
                    <span class="float-left"><strong>İlan Numarası: <?php echo $gelen['ilan_numarasi']; ?></strong></span>
                    <span class="float-right text-muted text-danger"><strong><?php
                                                                              echo number_format(
                                                                                $gelen['ilan_Fiyat'],
                                                                                0,
                                                                                ',',
                                                                                '.'
                                                                              );
                                                                              ?> TL</strong></span>
                  </div>
                  <div class="mt-5">
                    <span class="h6 text-muted float-left onecikanayar"><em class="fa fa-map-marker"></em><?php echo $gelen['ilan_Konum']; ?></span>

                  </div>
                </div>
              </div>
          
          </a>
        </div>
        
        
        <?php } ?>
      <!-- İLAN -->

    </div>
  </div>
  <!-- ÖNE ÇIKAN İLANLAR -->




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
                    <li><a class="text-white" href="#">Konut</a></li>
                    <li><a class="text-white" href="#">İşyeri</a></li>
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
<script>
if($("[data-toggle='switch']").length != 0){
  $("[data-toggle='switch']").bootstrapSwitch();
}

</script>

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
<script src="assets/js/bootstrap-toggle.min.js"></script>
<!-- PAPER-UI VE EKLENTILER -->

</html>