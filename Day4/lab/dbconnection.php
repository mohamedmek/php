<?php 

  session_start();


$server = "localhost";
$dbUser = "root";
$dbPassword = 'Pa$$w0rd';
$dbName = "php_lab4";
    
   $connect =  mysqli_connect($server,$dbUser,$dbPassword,$dbName);

   if(!$connect){
       die("Error : ".mysqli_connect_error());
   }

?>
