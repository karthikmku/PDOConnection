<?php
 include("config.php");

 try{

    $connec = new connection();
    $con=$connec->open();
     if($con){
     echo 'connected';

     }
     else{
       echo $con;

     }

 }
catch(PDOException $ex){

   echo $ex->getMessage();


}


 ?>
