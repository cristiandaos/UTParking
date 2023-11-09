<?php
    $con=mysqli_connect("localhost", "root", "", "utparking");
    if(mysqli_connect_errno()){
    echo "Conexión fallida".mysqli_connect_error();
    }
  ?>