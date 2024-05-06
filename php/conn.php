<?php
    $conn = mysqli_connect("localhost", "root", "", "job");
    if($conn == false){
        die("Connection Error: ".mysqli_connect_error());
    }
?>