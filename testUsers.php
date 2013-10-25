<?php
    require_once 'user.class.php';
    include 'databaseConnection.php';
    
    $user = new user("LErato", "eraloobo@gmail.com");
    $con = new databaseConnection();
    
    $con->establishConnection();
    
    echo $user->displayUser();
    echo $con->execute();
?>
