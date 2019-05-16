<?php
define("include", true);
include("assets/config.php");
?>
<!doctype html>
<html lang="tr">

<head>
    <title>Oğuz Emlak</title>
    <meta charset="utf-8">

    <meta name="theme-color" content="#6ec7e0">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/flickity.css">
    <link href="assets/css/site.css" rel="stylesheet" />
    <script src="assets/js/smartphoto.min.js"></script>
    <link rel="stylesheet" href="assets/css/smartphoto.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <script src="assets/js/all.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/css/photoswipe.css"> 

<link rel="stylesheet" href="assets/css/default-skin/default-skin.css"> 
<script src="assets/js/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="assets/js/photoswipe-ui-default.min.js"></script> 

<style>
.my-gallery {
  width: 100%;
  float: left;
}
.my-gallery img {
  width: 100%;
  height: auto;
}
.my-gallery figure {
  display: block;
  float: left;
  margin: 0 5px 5px 0;
  width: 550px;
}
.my-gallery figcaption {
  display: none;
}</style>
</head>

<body>
    <!-- SLIDER MODÜLÜ -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
<div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">           
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
          </div>
        </div>
</div>
  <!-- SLIDER MODÜLÜ -->
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
                        <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Facebook']; ?>"><em class="fab fa-facebook  text-dark ml-1"></em></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Twitter']; ?>"><em class="fab fa-twitter text-dark ml-1" aria-hidden="true"></em></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" target="_blank" href="//<?php echo $query['sosyal_Instagram']; ?>"><em class="fab fa-instagram text-dark ml-1"></em></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!--İLAN-->

    <?php

    $id = $_GET['id'];
    $query1 = $db->prepare("SELECT * FROM tbl_ilan WHERE ilan_numarasi = :id");

    $query1->execute(array(":id" => $id));

    if ($query1->rowCount()) {
        foreach ($query1 as $cek) {
            $link = strtolower(str_replace('ı', 'i', $cek['ilan_Durum'] . "-" . $cek['ilan_Kategori']));
            ?>
            <div class="container">
                <h3 class="p-3"> <strong><?php echo $cek['ilan_Adi']; ?></strong> </h3>
                <nav id="hrt" aria-label="breadcrumb " role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="anasayfa"> <strong>Anasayfa </strong></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><strong><?php if ($cek['ilan_Durum'] == "satilik") echo "Satılık";
                                                                                        else echo "Kiralık"; ?></strong></li>

                        <li class="breadcrumb-item "><a href="<?php echo $link; ?>
                                   "><strong>
                                    <?php
                                    if ($cek['ilan_Kategori'] == "konut")
                                        echo "Konut";
                                    elseif ($cek['ilan_Kategori'] == "isyeri")
                                        echo "İşyeri";
                                    elseif ($cek['ilan_Kategori'] == "arsa")
                                        echo "Arsa";
                                    ?>
                                </strong></a></li>


                    </ol>
                </nav>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="carousel mb-3 my-gallery" data-flickity='{ "autoPlay": true }'>
                        <?php        
                    for ($i = 20; $i <= 29; $i++) {
                                        if ($cek[$i] != NULL) {
                                            ?>
                                             
                                             
                                             <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
      <a class="" href="<?php echo $cek[$i]; ?>" itemprop="contentUrl" data-size="1024x1024">
          <img class="rounded  " src="<?php echo $cek[$i]; ?>" />
      </a>
                                          <figcaption itemprop="caption description"></figcaption>
                                          
    </figure>


                                        <?php }
                                } ?>

                                

                                 

                                </div>
                                <div class="row p-4">
    <button class="btn  btn-info btn-round col-xl-6 mt-2"><?php ECHO number_format($cek['ilan_Fiyat'], 0

, ',', '.'); ?><em class="fas fa-lira-sign ml-1"></em></button>
<a  class="btn btn-info btn-round col-xl-6 mt-2"  href="tel:05055555555"><em class="fa fa-phone mr-2"></em>0505 555 55 55</a>
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
                                            <div><?php echo $cek['ilan_numarasi']; ?></div>

                                        </td>

                                        <td>
                                            <div><strong>Yayın Tarihi:</strong></div>
                                            <div><?php echo $cek['ilan_YayinTarihi']; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Metrekare M²:</strong></div>
                                            <div><?php echo $cek['ilan_Metrekare']; ?></div>

                                        </td>
                                        <td>
                                            <div><strong>Oda Sayısı:</strong></div>
                                            <div><?php echo $cek['ilan_OdaSayisi']; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Bulunduğu Kat:</strong></div>

                                            <div><?php

                                                    switch ($cek['ilan_BulunduguKat']) {
                                                        case 'yuksekgiris':
                                                            echo 'Yüksek Giriş';
                                                            break;
                                                        case 'giris':
                                                            echo 'Giriş Katı';
                                                            break;
                                                        case 'bahce':
                                                            echo 'Bahçe Katı';
                                                            break;
                                                        case 'zemin':
                                                            echo 'Zemin Katı';
                                                            break;
                                                        case 'bodrum':
                                                            echo 'Bodrum Katı';
                                                            break;

                                                        default:
                                                            echo $cek['ilan_BulunduguKat'];
                                                            break;
                                                    }
                                                    ?></div>

                                        </td>
                                        <td>
                                            <div><strong>Kat Sayısı:</strong></div>
                                            <div><?php echo $cek['ilan_KatSayisi']; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Bina Yaşı:</strong></div>
                                            <div><?php echo $cek['ilan_BinaYasi']; ?></div>

                                        </td>
                                        <td>
                                            <div><strong>Isıtma:</strong></div>
                                            <div><?php echo $cek['ilan_Isitma']; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Kullanım Durumu:</strong></div>
                                            <div><?php if ($cek['ilan_KullanimDurumu'] == "bos") echo 'Boş';
                                                    else echo 'Dolu'; ?></div>

                                        </td>
                                        <td>
                                            <div><strong>Eşyalı:</strong></div>
                                            <div><?php if ($cek['ilan_Esyali'] == "evet") echo 'Evet';
                                                    else echo 'Hayır'; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Cephe: </strong></div>
                                            <div><?php
                                                    switch ($cek['ilan_Cephe']) {
                                                        case 'dogu':
                                                            echo 'Doğu';
                                                            break;
                                                        case 'bati':
                                                            echo 'Batı';
                                                            break;
                                                        case 'kuzey':
                                                            echo 'Kuzey';
                                                            break;
                                                        case 'guney':
                                                            echo 'Güney';
                                                            break;
                                                    }
                                                    ?></div>
                                        </td>
                                        <td>
                                            <div><strong>Kredi Uygunluk:</strong></div>
                                            <div><?php if ($cek['ilan_KrediUygunluk'] == "evet") echo 'Evet';
                                                    else echo 'Hayır'; ?></div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div><strong>Site İçerisinde:</strong></div>
                                            <div><?php if ($cek['ilan_SiteIcerisinde'] == "evet") echo 'Evet';
                                                    else echo 'Hayır'; ?></div>

                                        </td>
                                        <td>
                                            <div><strong>Aidat:</strong></div>
                                            <div><?php echo $cek['ilan_Aidat'] ?> <span class=" text-secondary fas fa-lira-sign fa-xs"></span></div>

                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- İLAN ÖZELLİK -->

            <div class="container-fluid mt-5">
                 <!-- İLAN KONUM -->
                <div class="row d-flex justify-content-center">
                   
                    <div class="col-md-5">
                        <p class="text-center h5 "> <strong>İlan Konumu</strong> </p>



                        <div class="map-responsive rounded">
                            <?php echo $cek['ilan_Harita']; ?>
                        </div>
                    </div>
                  
                </div>
                  <!-- İLAN KONUM -->
                <div class="row mt-5">
                    <div class="col-md-12 mx-auto">
                        <p class="h5 text-center"> <strong>İlan Açıklaması</strong> </p>
                        <div class="p-3">
                            <h3><?php echo $cek['ilan_Aciklama']; ?></h3>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- İLAN ÖZELLİK -->
            </div>
            <!-- İLAN-->
        <?php }
} ?>


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
                                        <li><a class="text-white" href="kiralik-konut">Konut</a></li>
                                        <li><a class="text-white" href="kiralik-isyeri">İşyeri</a></li>
                                        <li><a class="text-white" href="kiralik-arsa">Arsa</a>
                                        <li>
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
  <script>
  var initPhotoSwipeFromDOM = function(gallerySelector) {

// parse slide data (url, title, size ...) from DOM elements 
// (children of gallerySelector)
var parseThumbnailElements = function(el) {
    var thumbElements = el.childNodes,
        numNodes = thumbElements.length,
        items = [],
        figureEl,
        linkEl,
        size,
        item;

    for(var i = 0; i < numNodes; i++) {

        figureEl = thumbElements[i]; // <figure> element

        // include only element nodes 
        if(figureEl.nodeType !== 1) {
            continue;
        }

        linkEl = figureEl.children[0]; // <a> element

        size = linkEl.getAttribute('data-size').split('x');

        // create slide object
        item = {
            src: linkEl.getAttribute('href'),
            w: parseInt(size[0], 10),
            h: parseInt(size[1], 10)
        };



        if(figureEl.children.length > 1) {
            // <figcaption> content
            item.title = figureEl.children[1].innerHTML; 
        }

        if(linkEl.children.length > 0) {
            // <img> thumbnail element, retrieving thumbnail url
            item.msrc = linkEl.children[0].getAttribute('src');
        } 

        item.el = figureEl; // save link to element for getThumbBoundsFn
        items.push(item);
    }

    return items;
};

// find nearest parent element
var closest = function closest(el, fn) {
    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
};

// triggers when user clicks on thumbnail
var onThumbnailsClick = function(e) {
    e = e || window.event;
    e.preventDefault ? e.preventDefault() : e.returnValue = false;

    var eTarget = e.target || e.srcElement;

    // find root element of slide
    var clickedListItem = closest(eTarget, function(el) {
        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
    });

    if(!clickedListItem) {
        return;
    }

    // find index of clicked item by looping through all child nodes
    // alternatively, you may define index via data- attribute
    var clickedGallery = clickedListItem.parentNode,
        childNodes = clickedListItem.parentNode.childNodes,
        numChildNodes = childNodes.length,
        nodeIndex = 0,
        index;

    for (var i = 0; i < numChildNodes; i++) {
        if(childNodes[i].nodeType !== 1) { 
            continue; 
        }

        if(childNodes[i] === clickedListItem) {
            index = nodeIndex;
            break;
        }
        nodeIndex++;
    }



    if(index >= 0) {
        // open PhotoSwipe if valid index found
        openPhotoSwipe( index, clickedGallery );
    }
    return false;
};

// parse picture index and gallery index from URL (#&pid=1&gid=2)
var photoswipeParseHash = function() {
    var hash = window.location.hash.substring(1),
    params = {};

    if(hash.length < 5) {
        return params;
    }

    var vars = hash.split('&');
    for (var i = 0; i < vars.length; i++) {
        if(!vars[i]) {
            continue;
        }
        var pair = vars[i].split('=');  
        if(pair.length < 2) {
            continue;
        }           
        params[pair[0]] = pair[1];
    }

    if(params.gid) {
        params.gid = parseInt(params.gid, 10);
    }

    return params;
};

var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
    var pswpElement = document.querySelectorAll('.pswp')[0],
        gallery,
        options,
        items;

    items = parseThumbnailElements(galleryElement);

    // define options (if needed)
    options = {

        // define gallery index (for URL)
        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

        getThumbBoundsFn: function(index) {
            // See Options -> getThumbBoundsFn section of documentation for more info
            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                rect = thumbnail.getBoundingClientRect(); 

            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
        }

    };

    // PhotoSwipe opened from URL
    if(fromURL) {
        if(options.galleryPIDs) {
            // parse real index when custom PIDs are used 
            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
            for(var j = 0; j < items.length; j++) {
                if(items[j].pid == index) {
                    options.index = j;
                    break;
                }
            }
        } else {
            // in URL indexes start from 1
            options.index = parseInt(index, 10) - 1;
        }
    } else {
        options.index = parseInt(index, 10);
    }

    // exit if index not found
    if( isNaN(options.index) ) {
        return;
    }

    if(disableAnimation) {
        options.showAnimationDuration = 0;
    }

    // Pass data to PhotoSwipe and initialize it
    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};

// loop through all gallery elements and bind events
var galleryElements = document.querySelectorAll( gallerySelector );

for(var i = 0, l = galleryElements.length; i < l; i++) {
    galleryElements[i].setAttribute('data-pswp-uid', i+1);
    galleryElements[i].onclick = onThumbnailsClick;
}

// Parse URL and open gallery if it contains #&pid=3&gid=1
var hashData = photoswipeParseHash();
if(hashData.pid && hashData.gid) {
    openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
}
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');</script>
      
</body>
<!-- PAPER-UI VE EKLENTILER -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/moment.min.js"></script>

<script src="assets/js/paper-kit.js"></script>
<script src="assets/js/ekko-lightbox.js"></script>
<script src="assets/js/ekko-lightbox.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>

<!-- PAPER-UI VE EKLENTILER -->

</html>