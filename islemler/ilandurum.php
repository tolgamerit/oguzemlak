<?php
define("include", true);
include("../assets/config.php");
if(isset($_GET['durumdegis']))
{
    $id=$_GET['durumdegis'];
    $anlik=$_GET['anlik'];
    if($anlik=='evet')
    {
        $degis = $db->prepare("UPDATE tbl_ilan SET ilan_OneCikan='hayir' WHERE ilan_numarasi = ?");
			$degis->execute(array($id));
      
    }
    else
    {
        $degis = $db->prepare("UPDATE tbl_ilan SET ilan_OneCikan='evet' WHERE ilan_numarasi = ?");
        $degis->execute(array($id));
  
    }
   
   
   if($degis)
   {
    echo"   <meta http-equiv='refresh' content='0;URL=../yonetim'>  ";
   }
}
?>