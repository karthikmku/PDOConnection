<?php
include 'config.php';

try {

    $conec = new Connection();
    $con   = $conec->Open();
    if ($con) {

        $sql = "UPDATE `user` SET `email`= 'ahmedkhan_847@hotmail.com' WHERE `userid` = 1";
        $affectedrows  = $con->exec($sql);
        echo $affectedrows;

    } else {
        echo $con;
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

 ?>
