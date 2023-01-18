<?php
define("website","www.mek.com");
echo website;
echo "<br>-----------------------<br>";

echo "server name: " , $_SERVER['SERVER_NAME'];
echo "<br><br>";
echo 'address: ' , $_SERVER['SERVER_ADDR'];
echo "<br><br>";
echo 'port: ' , $_SERVER['SERVER_PORT'];
echo "<br><br>";
echo 'filename: ' , $_SERVER['SCRIPT_NAME']; //path of the currently executing script
echo "<br><br>";
echo 'path of the currently executing script: ' , $_SERVER['SCRIPT_FILENAME']; //path of the currently executing script
echo "<br><br>";
echo 'server admin: ' , $_SERVER['SERVER_ADMIN'];

echo "<br>-----------------------<br>";
$age = 10;
switch ($age) {
    case ($age < 5):
        echo "Stay at home";
        break;
    
    case ($age == 5):
        echo "Go to Kindergarden";
        break;
        
    case ($age >= 6 && $age <=12):
        echo "Go to grade";
        break;
    default:
        echo "Stay at home";
        break;
}
?>