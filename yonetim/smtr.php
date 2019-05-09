<?php
require_once("mysql.php");
 
if(isset($_GET['il'])){
 
$il=(int)$_GET['il'];
$secili=(int)$_GET['ilce'];
if($il>0){
$dk=$db->q("SELECT `id`,`ilce_adi` FROM `ilce` WHERE `il_id`='$il' ORDER BY `id` ASC");
 
if($secili>0){
$list='{"selected":"'.$secili.'",';
}else{
$list='{"0":"Seçiniz",';
}
while($ilr=$db->fassoc($dk)){
$list.='"'.$ilr['id'].'":"'.$ilr['ilce_adi'].'",';
}
$list=substr($list,0,-1);
$list.="}";
echo $list;
}
}
else if(isset($_GET['ilce'])){
$ilce=(int)$_GET['ilce'];
$secili=(int)$_GET['semt'];
if($ilce>0){
$dk=$db->q("SELECT `id`,`semt_adi` FROM `semt` WHERE `ilce_id`='$ilce' ORDER BY `id` ASC");
if($secili>0){
$list='{"selected":"'.$secili.'",';
}else{
$list='{"0":"Seçiniz",';
}
while($ilr=$db->fassoc($dk)){
$list.='"'.$ilr['id'].'":"'.$ilr['semt_adi'].'",';
}
$list=substr($list,0,-1);
$list.="}";
echo $list;
}
}
else if(isset($_GET['semt'])){
$semt=(int)$_GET['semt'];
$secili=(int)$_GET['mahalle'];
 
if($semt>0){
$dk=$db->q("SELECT * FROM `mahalle` WHERE `semt_id`='$semt' ORDER BY id ASC");
 
if($secili>0){
$list='{"selected":"'.$secili.'",';
}else{
$list='{"0":"Seçiniz",';
}
 
while($ilr=$db->fassoc($dk)){
$list.='"'.$ilr['id'].'":"'.$ilr['mahalle_adi'].'",';
}
$list=substr($list,0,-1);
$list.="}";
echo $list;
}
}
 
$db->close();
?>