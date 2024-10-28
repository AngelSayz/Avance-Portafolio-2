<?php
 function connectDB() : mysqli {
    $conn = mysqli_connect("localhost", "root", "", "bienesraices");
    if($conn){
        echo "Conexion exitosa";
    }else{
        echo "Conexion fallida";
    }
    return $conn;
 }
?>