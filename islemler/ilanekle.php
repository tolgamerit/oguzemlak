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
    $yayintarihi=date("Y-m-d");
   
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
     
 
    $kayit = $db->prepare("insert into tbl_ilan SET  `ilan_Adi`=?, `ilan_Aciklama`=?, `ilan_Harita`=?, `ilan_YayinTarihi`=?, `ilan_Metrekare`=?, `ilan_OdaSayisi`=?,
     `ilan_BulunduguKat`=?, `ilan_KatSayisi`=?, `ilan_BinaYasi`=?, `ilan_Isitma`=?, `ilan_KullanimDurumu`=?, `ilan_Esyali`=?, `ilan_KrediUygunluk`=?, `ilan_SiteIcerisinde`=?,
     `ilan_Aidat`=?, `ilan_Cephe`=?, `ilan_Fiyat`=?, `ilan_OneCikan`=?, `ilan_resim1`=?, `ilan_resim2`=?, `ilan_resim3`=?, `ilan_resim4`=?, `ilan_resim5`=?, `ilan_resim6`=?,
     `ilan_resim7`=?, `ilan_resim8`=?, `ilan_resim9`=?, `ilan_resim10`=?, `ilan_Kategori`=?, `ilan_Durum`=?, `ilan_Konum`=?");
    $ck= $kayit->execute(array($ilanadi,$editor,$ilanharita,$yayintarihi,$metrekare,$odasayisi,$bulundugukat,$katsayisi,$binayas,$isitma,$kullanim,$esyali,$kredi,$siteicerisi,$aidat,$cephe,$fiyat,'Hayir',
     $resim[0],$resim[1],$resim[2],$resim[3],$resim[4],$resim[5],$resim[6],$resim[7],$resim[8],$resim[9],$kategori,$durum,$konum));
    
if($ck)
{
  ?>
   
                             <div class="alert success">
 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 <strong>İlan Eklendi!</strong>
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
 close[i].onclick = function(){
   var div = this.parentElement;
   div.style.opacity = "0";
   setTimeout(function(){ div.style.display = "none"; }, 600);
 }
}
</script>

<?php
echo"   <meta http-equiv='refresh' content='0.85;URL=index.php'>  ";

}

else
{
  ?>
  <div class="alert">
 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 <strong>Kayıt Sırasında Hata Oluştu!</strong>
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
 close[i].onclick = function(){
   var div = this.parentElement;
   div.style.opacity = "0";
   setTimeout(function(){ div.style.display = "none"; }, 600);
 }
}
</script>
<?php
echo"   <meta http-equiv='refresh' content='0.85;URL=ilanekle.php'>  ";

}

 
}
catch (PDOException $e)
{
echo"   <meta http-equiv='refresh' content='0.85;URL=home.php'>  ";

}

      
}


?>