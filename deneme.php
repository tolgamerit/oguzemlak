<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/fullscreen.css">
    <link rel="stylesheet" href="assets/css/flickity.css">
   
    <script src="assets/js/flickity.pkgd.min.js"></script>
<script src="assets/js/fullscreen.js"></script>
<style>
.carousel-cell {
  width: 100%; /* full width */
  height: 200px;
  background: #222;
  /* center images in cells with flexbox */
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel.is-fullscreen .carousel-cell {
  height: 100%;
}

.carousel-cell img {
  display: block;
  max-height: 100%;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col md-6">
<div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1 }'>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=517" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/540/720/?image=696" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=56" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/800/500/?image=1084" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1080" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=1074" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1069" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/800/500/?image=1062" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1002" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=935" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=855" />
  </div>
  <div class="carousel-cell">
    <img class="carousel-cell-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=824" />
  </div>
</div>

            </div>
        </div>
    </div>
<h1>Flickity - fullscreen images wide</h1>

<!-- Flickity HTML init -->


</body>
</html>