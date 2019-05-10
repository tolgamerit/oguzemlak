
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

     

  $degis = $db->prepare("UPDATE `tbl_ilan` SET 
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
  `ilan_Kategori`=:kategori,
  `ilan_Durum`=:durum,
  `ilan_Konum`=:konum 
  WHERE ilan_numarasi=:id "); 
  $degis->execute(array('id' => $ilannumarasi,'ilanadi' => $ilanadi,'editor' => $editor,'ilanharita' => $ilanharita,'metrekare' => $metrekare,'odasayisi' => $odasayisi,'bulundugukat' => $bulundugukat,'katsayisi' => $katsayisi,
  'binayasi' => $binayas,'isitma' => $isitma,'kullanimdurumu' => $kullanim,'esyali' => $esyali,'kredi' => $kredi,'siteicerisi' => $siteicerisi,'aidat' => $aidat,'cephe' => $cephe,'fiyat' => $fiyat,'kategori' => $kategori,'durum' => $durum,
  'konum' => $konum));

  echo "
  <div class='container'>
  <div class='row'> 
  <div class='col-md-12'>   <div style='box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)' class=' alert success text-center rounded' role='alert'>
  Düzenleme Başarılı!
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