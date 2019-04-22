<!doctype html>
<html lang="tr">

<head>
    <title>Oğuz Emlak | Hakkımızda</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.css" rel="stylesheet" />
    <link href="assets/css/ekko-lightbox.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <style>
        .modal-header

        {
            display: none !important;
        }
        .modal-content {
            box-shadow: none !important;
            background-color: transparent !important;
        }
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
        .cll {
            color: #6c757d !important;
            border: 2px solid #17a2b8 !important;
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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

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

    <!--İLAN-->
    <div class="container">
        <h3 class="p-3"> <strong>İLAN BAŞLIĞI BURAYA GELECEK</strong> </h3>
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

            <div class="col-lg-6 col-md-6 col-sm-6">

                <div class="card rsm1 rounded">

                    <div class="card-body">
                        <div class="carousel mb-3" data-flickity='{ "autoPlay": true }'>

                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test1.jpg" src="assets/img/test1.jpg" class="carousel-cell-image rounded">
                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test2.jpg" src="assets/img/test2.jpg" class="carousel-cell-image rounded">
                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test3.jpg" src="assets/img/test3.jpg" class="carousel-cell-image rounded">
                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test4.jpg" src="assets/img/test4.jpg" class="carousel-cell-image rounded">
                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test5.jpg" src="assets/img/test5.jpg" class="carousel-cell-image rounded">
                            <img data-toggle="lightbox" data-gallery="example-gallery" href="assets/img/test6.jpg" src="assets/img/test6.jpg" class="carousel-cell-image rounded">
                        </div>
                    </div>
                    <div class="card-footer row p-4">
                    <button class="btn  btn-info btn-round col-xl-6 mt-2">212.000<em class="fas fa-lira-sign ml-1"></em></button>
            <a  class="btn btn-info btn-round col-xl-6 mt-2"  href="tel:05055555555"><em class="fa fa-phone mr-2"></em>0505 555 55 55</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
           
                <p class="h5"> <strong>İlan Özellikleri</strong> </p>
                <div class="table-responsive border-0 text-left" style="overflow: hidden;">
         
                <table class="table border-0">

                    <tbody class="lead">

                        <tr>
                            <td>
                                <div><strong>İlan Numarası:</strong></div>
                                <div>1938</div>

                            </td>

                            <td>
                                <div><strong>Yayın Tarihi:</strong></div>
                                <div>21.04.2019</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Metre kare M²:</strong></div>
                                <div>210</div>

                            </td>
                            <td>
                                <div><strong>Oda Sayısı:</strong></div>
                                <div>2+1</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Bulunduğu Kat:</strong></div>
                                <div>Zemin Kat</div>

                            </td>
                            <td>
                                <div><strong>Kat Sayısı:</strong></div>
                                <div>3</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Bina Yaşı:</strong></div>
                                <div>3</div>

                            </td>
                            <td>
                                <div><strong>Isıtma:</strong></div>
                                <div>Klima</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Kullanım Durumu:</strong></div>
                                <div>Boş</div>

                            </td>
                            <td>
                                <div><strong>Eşyalı:</strong></div>
                                <div>Hayır</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Tapu Durumu:</strong></div>
                                <div>Kat İrtifaklı</div>

                            </td>
                            <td>
                                <div><strong>Kredi Uygunluk:</strong></div>
                                <div>Hayır</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Site İçerisinde:</strong></div>
                                <div>Evet</div>

                            </td>
                            <td>
                                <div><strong>Aidat:</strong></div>
                                <div>150TL</div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Cephe: </strong></div>
                                <div>Güney</div>
                            </td>
                            <td></td>
                        </tr>
                     

                    </tbody>
                </table>
            </div>
            </div>
        </div>

    

        <!-- İLAN ÖZELLİK -->
        <div class="container-fluid mt-5">
            <div class="row">
            <div class="col-md-12 mx-auto">
            <p class="p-3 h5 text-center"> <strong>İlan Açıklaması</strong> </p>
                <p class="lead text-justify p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni alias optio quisquam accusantium ex ducimus impedit temporibus, deleniti suscipit
                    molestias tempore magnam autem cumque laboriosam libero repellendus ratione? Sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni alias optio quisquam accusantium ex ducimus impedit temporibus, deleniti suscipit
                    molestias tempore magnam autem cumque laboriosam libero repellendus ratione? Sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni alias optio quisquam accusantium ex ducimus impedit temporibus, deleniti suscipit
                    molestias tempore magnam autem cumque laboriosam libero repellendus ratione? Sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni alias optio quisquam accusantium ex ducimus impedit temporibus, deleniti suscipit
                    molestias tempore magnam autem cumque laboriosam libero repellendus ratione? Sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni alias optio quisquam accusantium ex ducimus impedit temporibus, deleniti suscipit
                    molestias tempore magnam autem cumque laboriosam libero repellendus ratione?</P>
          
       
            </div>

              



           
       



            </div>
           
           
        </div>
        <!-- İLAN ÖZELLİK -->

      
      
    </div>

    <!-- İLAN-->
    <div class="row d-flex justify-content-center mt-2">
            <!-- İLAN KONUM -->
          <div class="col-md-6">
          <p class="text-center h5 mb-5"> <strong>İlan Konumu</strong> </p>
       


          <div class="map-responsive rounded" >
       
       <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.493355859901!2d35.32783431487138!3d36.998024979908294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6b7b4f5fa7%3A0xeff8c934d6fe8f47!2sCEM+CAR+SOUND+Adana+Multimedya+Navigasyon+ve+Ses+Sistemleri+Montaj+Servis+ve+Yedek+Par%C3%A7a+Merkezi!5e0!3m2!1str!2str!4v1477313124563" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
          </div>
    <!-- İLAN KONUM -->
        </div>





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
    <div class="container-fluid fixed-row-bottom mt-5">
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
<script src="assets/js/ekko-lightbox.js"></script>
<script src="assets/js/ekko-lightbox.min.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
<!-- PAPER-UI VE EKLENTILER -->

</html>