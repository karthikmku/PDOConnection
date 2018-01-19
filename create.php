<?php

include 'config.php';

try {

    $conec = new Connection();
    $con   = $conec->Open();
    if ($con) {

        $sql = "INSERT INTO `user`(`name`, `email`) VALUES ('ahmed','ahmed.khan@cloudways.com')";
        $re  = $con->query($sql);
    } else {
        echo $con;
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>
