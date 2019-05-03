
<?php
define("include", true);
include("../assets/config.php");
if(isset($_GET['sil']))
{
    $id=$_GET['sil'];

    $sil = $db->prepare("DELETE FROM tbl_ilan WHERE ilan_numarasi = ?");
			$sil->execute(array(
				$id
			));
  
   if($sil)
   {
    echo"   <meta http-equiv='refresh' content='0;URL=../yonetim'>  ";
   }
}
if(isset($_GET['mesajsil']))
{
    $id=$_GET['mesajsil'];
    $sil = $db->prepare("DELETE FROM tbl_iletisim WHERE id = ?");
    $sil->execute(array(
        $id
    ));

if($sil)
{
echo"   <meta http-equiv='refresh' content='0;URL=../yonetim/mesaj.php'>  ";
}
}
?>