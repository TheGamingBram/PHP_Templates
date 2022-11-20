<?php 

    // Pretty Print is a fuction that exports all data you put in a nice to read format using the HTML <pre> and the PHP print_r functions
    function prettyprint($arr){
        echo '<pre>';
            print_r($arr);
        echo '</pre>';
    }

    //Connections to a database using PDO
    //Info for the server
    $servername = "localhost";
    $dbname = "!_localh_info";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>