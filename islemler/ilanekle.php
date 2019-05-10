<?php

?>

<script>
                                   
                                   function vericek() {
                                    var il = $("#il option:selected").html();
                                    document.cookie = "il="+il;

                                    var ilce = $("#ilce option:selected").html();
                                    document.cookie = "ilce="+ilce;

                                    var semt = $("#semt option:selected").html();
                                    document.cookie = "semt="+semt;

                                    var mahalle = $("#mahalle option:selected").html();
                                    document.cookie = "mahalle="+mahalle;
                                   }
                                   
                                       </script>
<?php
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
  echo '<script language="javascript">location.href="../giris.php";</script>';
}
if(isset($_POST['ilanad']))
{
    $ilannumarasi=$_GET['detaylar'];
    $ilanadi=$_POST['ilanad'];
    $il=$_COOKIE['il'];
    $ilce=$_COOKIE['ilce'];
    $semt=$_COOKIE['semt'];
    $mahalle=$_COOKIE['mahalle'];
    $kategori=$_POST['kategori'];
    $fiyat=$_POST['fiyat'];
    $durum=$_POST['durum'];
    $metrekare=$_POST['metrekare'];
    $odasayisi=$_POST['odasayisi'];
    $bulundugukat=$_POST['bulundugukat'];
    $katsayisi=$_POST['katsayisi'];
    $binayas=$_POST['binayas'];
    $kullanim=$_POST['kullanim'];
    $kredi=$_POST['kredi'];
    $esyali=$_POST['esyali'];
    $siteicerisi=$_POST['siteicerisi'];
    $cephe=$_POST['cephe'];
    $isitma=$_POST['isitma'];
    $aidat=$_POST['aidat'];
    $upload=$_POST['upload[]'];
    $editor=$_POST['editor'];
    $ilanharita=$_POST['ilanHarita'];
   
$konum=$il.' / '.$ilce.' / '.$semt.' / '.$mahalle;
try
{   
    $a = 0;
     while($_FILES["upload"]["tmp_name"][$a]!=NULL)
     {
      $kaynak    = $_FILES["upload"]["tmp_name"][$a];
      $dosyaadi   = $_FILES["upload"]["name"][$a];
      $dosyatipi = $_FILES["upload"]["type"][$a];
      $dboyut    = $_FILES["upload"]["size"][$a];
      //hedef uzantısı sunucuya göre farklıık gösteriyor
      $hedef     = "../upload/pictures/";

      $uzanti        = substr($dosyaadi, -4);

      $yeniad        = substr(md5(uniqid(rand())), 0, 10);

      $yeniresimadi[$a]  = $yeniad . $uzanti;


      $yukle = move_uploaded_file($kaynak, $hedef . '/' . $yeniresimadi[$a]);
      $resim[$a] = "upload/pictures/" . $yeniresimadi[$a];
      $a++;
    
     } 
     

    
  $katit = $db->prepare("INSERT INTO `tbl_ilan` SET 
  `ilan_Adi`=:ilanadi,
  `ilan_Aciklama`=:editor,
  `ilan_Harita`=:ilanharita,
  `ilan_Metrekare`=:metrekare,
  `ilan_OdaSayisi`=:odasayisi,
  `ilan_BulunduguKat`=:bulundugukat,
  `ilan_KatSayisi`=:katsayisi,
  `ilan_BinaYasi`=:binayasi,
  `ilan_Isitma`=:isitma,
  `ilan_KullanimDurumu`=:kullanimdurumu,
  `ilan_Esyali`=:esyali,
  `ilan_KrediUygunluk`=:kredi,
  `ilan_SiteIcerisinde`=:siteicerisi,
  `ilan_Aidat`=:aidat,
  `ilan_Cephe`=:cephe,
  `ilan_Fiyat`=:fiyat,
  `ilan_resim1`=:resim1,
  `ilan_resim2`=:resim2,
  `ilan_resim3`=:resim3,
  `ilan_resim4`=:resim4,
  `ilan_resim5`=:resim5,
  `ilan_resim6`=:resim6,
  `ilan_resim7`=:resim7,
  `ilan_resim8`=:resim8,
  `ilan_resim9`=:resim9,
  `ilan_resim10`=:resim10,
  `ilan_Kategori`=:kategori,
  `ilan_Durum`=:durum,
  `ilan_Konum`=:konum"); 
  $kayit->execute(array('id' => $ilannumarasi,'ilanadi' => $ilanadi,'editor' => $editor,'ilanharita' => $ilanharita,'metrekare' => $metrekare,'odasayisi' => $odasayisi,'bulundugukat' => $bulundugukat,'katsayisi' => $katsayisi,
  'binayasi' => $binayas,'isitma' => $isitma,'kullanimdurumu' => $kullanim,'esyali' => $esyali,'kredi' => $kredi,'siteicerisi' => $siteicerisi,'aidat' => $aidat,'cephe' => $cephe,'fiyat' => $fiyat,
  'resim1' => $resim[0],'resim2' => $resim[1],'resim3' => $resim[2],'resim4' => $resim[3],'resim5' => $resim[4],'resim6' => $resim[5],'resim7' => $resim[6],'resim8' => $resim[7],'resim9' => $resim[8],'resim10' => $resim[9],'kategori' => $kategori,'durum' => $durum,
  'konum' => $konum));

  echo "
  <div class='container'>
  <div class='row'> 
  <div class='col-md-12'>   <div style='box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)' class=' alert success text-center rounded' role='alert'>
  İlan Eklendi!
  </div></div>
   </div>
   </div>
  
  ";
echo"   <meta http-equiv='refresh' content='0.85;URL=../yonetim'>  ";
 
}
catch (PDOException $e)
{
echo"   <meta http-equiv='refresh' content='0.85;URL=home.php'>  ";

}

      
}


?>