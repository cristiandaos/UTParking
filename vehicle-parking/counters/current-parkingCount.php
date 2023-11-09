<?php

    include './includes/dbconn.php';
    //Total Vehicle Entries
    $query=mysqli_query($con,"SELECT ID from vehicle_info where date(InTime)=CURDATE();");
    // $query=mysqli_query($con,"SELECT ID from vehicle_info where (Status)='On';");

    // ALERTA  DE AFORO DE PARKING


    echo $count_parkings
 ?>