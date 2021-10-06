<?php 
    $server = "127.0.0.1";
    $user = "root";
    $pass = "364133695";
    $bd = "empresa";


    try { 
        $pdo = new PDO("mysql:host=localhost;dbname=empresa","root","36413395");         
        echo "Conectado";
        


    } catch (Exception $ex) {
        var_dump($ex);


    }

    


 ?>