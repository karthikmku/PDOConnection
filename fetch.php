<?php
include 'config.php';

try {

   $conec = new Connection();
   $con   = $conec->Open();
   if ($con) {

       $sql = "SELECT * FROM user";
       $re  = $con->query($sql);
       foreach ($con->query($sql) as $row) {
           echo $row['name'] . "<br>";
           echo $row['email'] . "<br>";
       }

   } else {
       echo $con;
   }
} catch (PDOException $ex) {
   echo $ex->getMessage();
}

 ?>
