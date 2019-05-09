<?php
 $kayit = $db->prepare("insert into tbl_product SET product_name=?,product_brand=?,product_compatible_car=?,product_stock=?,product_enabled=?");
 $kayit->execute(array($urunad, $cihazmarka, $uyumluaraba, $stokadet, $satisdurum));

?>