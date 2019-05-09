<?php
if (!isset($_SESSION['kullanici'], $_SESSION['parola'])) {
  echo '<script language="javascript">location.href="../giris.php";</script>';
}
if(isset($_POST['submit']))
{
    $telefon1=$_POST['telefon1'];
    $telefon2=$_POST['telefon2'];
    $email=$_POST['email'];   
    $adres=$_POST['adres'];
    $facebok=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $map=$_POST['map'];
    
    $query = $db->prepare("UPDATE tbl_sistem SET telefon1= :telefon1,telefon2=:telefon2,Adres=:adres,Mail=:mail,sosyal_Facebook=:facebook,sosyal_Twitter=:twitter,sosyal_Instagram=:instagram,map=:map");
    $update = $query->execute(array(
         "telefon1" => $telefon1,
         "telefon2" => $telefon2,
         "adres" => $adres,
         "mail" => $email,
         "facebook" => $facebok,
         "twitter" => $twitter,
         "instagram" => $instagram,
         "map" => $map
    ));
    if ( $update ){
     ?>
                              <div class="alert success">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Ayarlar Kaydedildi!</strong>
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
    }
}

?>