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


?>