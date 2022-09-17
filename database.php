<?php
    $connection = mysqli_connect('localhost', 'root', '', 'reservation_system');

    if(!$connection){
        die("Connection Failed");
    }

?>