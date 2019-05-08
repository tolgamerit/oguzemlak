<?php
date_default_timezone_set('Europe/Istanbul');
 if
 (!defined("include"))
 {
     //basit yönlendirme güvenlik önlemi :)
      echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
       exit();
     }


     else
     {
          try {
               $db = new PDO("mysql:host=localhost;dbname=oguzemlak;charset=utf8", "root", "123456789");

          } catch ( PDOException $e ){
               print $e->getMessage();
          }
          $query = $db->query("SELECT * FROM tbl_sistem")->fetch(PDO::FETCH_ASSOC);
             
               
     }

?>
