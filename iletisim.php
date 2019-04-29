<?php 

define("include",true); 
include("assets/config.php"); 
?>
<!doctype html>
<html lang="tr">

<head>
  <title>Oğuz Emlak | İletişim</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <style>
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
  <!--İLETİŞİM -->
  <div class="container mt-5 mb-5">

    <div class="rounded" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)">

      <h4 class="p-4 h3"><strong>İletişim</strong></h4>
      <div class="row p-3">
        <p class="lead p-3">Bizimle iletişim kurabilmek için aşağıda yer alan iletişim formunu doldurabilir veya iletişim bilgilerimizden herhangi biri ile bize ulaşabilirsiniz.

        </p>
      </div>
      <div class="row">

        <div class="col-md-6 p-5">
          <?php if (isset($_POST['submit'])) {



 $konu=$_POST["konu"];
            $adsoyad = $_POST['adsoyad'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
            $mesaj = $_POST['mesaj'];
            $ipadres = $_SERVER['REMOTE_ADDR'];
$tarih=date('Y-m-d H:i:s');;           

            $query = $db->prepare("INSERT INTO tbl_iletisim SET
            konu = ?,
            ad_soyad = ?,
            email = ?,
            telefon=?,
            mesaj=?,
            ip_adresi=?,
            tarih=?");
            $insert = $query->execute(array(
              $konu,$adsoyad, $email, $telefon, $mesaj, $ipadres,$tarih
            ));
            if ( $insert ){
               
              echo '


              <div class="alert alert-success" role="alert">
              Mesajınız iletilmiştir.
              </div>
              <meta http-equiv="refresh" content="1;URL=anasayfa">        
              
              ';
            }
else
{
  echo '


  <div class="alert alert-danger" role="alert">
  Mesajınız iletilememiştir.
  </div>
 
  ';

}


         
              }
              
       ?>





          <form method="POST">
            <div class="form-group">

              <input class="form-control" placeholder="Konu" type="text" name="konu" id="konu" required>
            </div>
            <div class="form-group">

              <input class="form-control" placeholder="Ad Soyad" type="text" name="adsoyad" id="adsoyad" required>
            </div>
            <div class="form-group">

              <input type="email" class="form-control" placeholder="E-Mail" name="email" id="email" required>
            </div>
            <div class="form-group">

              <input type="text" class="form-control" placeholder="Telefon" name="telefon" id="telefon" required>
            </div>

            <div class="form-group">

              <textarea class="form-control" name="mesaj" rows="6" cols="30" placeholder="Notunuz" required></textarea>
            </div>
            <input type="submit" name="submit" value="Gönder" class="btn btn-info float-right">

          </form>
        </div>

        <div class="col-md-6 p-5  ">
          <h5> <strong>İletişim Bilgileri</strong></h5>
          <div class="table-responsive border-0" style="overflow: hidden;">
            <table class="table">

              <tr>
                <td class="border-0  h5 " style="width:15px;"> <em class="fa fa-phone"></em>
                </td>
                <td class="border-0 h5"><span>(322) 222 22 22</span></td>
              </tr>

              <tr>

                <td class="border-0  h5 ">
                  <em class="fas fa-paper-plane "></em>
                </td>
                <td class="border-0  h5">
                  <span>iletisim@mail.com</span>
                </td>
              </tr>
              <tr>
                <td class="border-0  h5 ">
                  <em class="fa fa-map-marker"></em>
                </td>
                <td class="border-0  h5">
                  <span>Buraya Adres gelecek</span>
                </td>
              </tr>
            </table>
          </div>


          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.493355859901!2d35.32783431487138!3d36.998024979908294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6b7b4f5fa7%3A0xeff8c934d6fe8f47!2sCEM+CAR+SOUND+Adana+Multimedya+Navigasyon+ve+Ses+Sistemleri+Montaj+Servis+ve+Yedek+Par%C3%A7a+Merkezi!5e0!3m2!1str!2str!4v1477313124563" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>

      </div>


    </div>


  </div>



  <!-- İLETİŞİM -->


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
              <h4 class="card-title text-center"><strong>İŞYERİ</strong></h4>
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