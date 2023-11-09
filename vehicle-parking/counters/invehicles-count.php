<?php

    include './includes/dbconn.php';

    $query=mysqli_query($con,"SELECT ID from  vehicle_info where Status=''");
    $count_parkings=mysqli_num_rows($query);
    echo $count_parkings;
    // colocar en 50 para que la capacidad máxima sea 50
    // por prueba se coloca en 22 para que aparezca solo 1 esapacio disponible
    // por prueba se coloca en 21 para que aparezca que no hay espacio
    $espacio_disponible = 22 - max(0, $count_parkings);


 ?>
