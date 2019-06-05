<?php
define("include", true);
include("../assets/config.php");
if(isset($_GET['link']))

{
    if($_GET['link']=='hakkimizda')
    $link='Hakkımızda';
    $sql = $db->prepare("SELECT * FROM tbl_sayfa WHERE sayfaAd= ?");
  $sql->execute(array($link));
    $sayfagetir=$sql->fetch(PDO::FETCH_ASSOC);
   
}
if(isset($_POST['editor']))
{
    $duzenle = $db->prepare("UPDATE tbl_sayfa set SayfaIcerik=? where SayfaAd ='Hakkımızda'");
    $ck=   $duzenle->execute(array(
        $_POST['editor']
    ));
   

if ($ck){
    ?>
                             <div class="alert success">
 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 <strong>Sayfa Güncellendi!</strong>
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
     echo"   <meta http-equiv='refresh' content='0.85;URL=sayfa.php?link=hakkimizda'>  ";

   }
  
   else
   {
?>
<div class="alert">
 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 <strong>Güncelleme Sırasında Hata Oluştu!</strong>
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
echo"   <meta http-equiv='refresh' content='0.85;URL=sayfa.php?link=hakkimizda'>  ";

   }}
?>