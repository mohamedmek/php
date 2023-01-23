<!-- --------------------------Part 1----------------------------------------- -->
<?php //1-  Search for how to make \n work in browser.
echo "<h1><strong style='color: #2e2e6c;'>Part (1)</strong></h1><br>";
echo "Hello,";
echo nl2br("\n") ;
echo "World!";
?>


<!-- --------------------------Part 2----------------------------------------- -->
<?php //2-  Search for 3 built-in function of a string.
echo "<h1><strong style='color: #2e2e6c;'>Part (2)</strong></h1><br>";

style_txt("function Convert hexadecimal values to ASCII characters:");
echo "<br>";
echo hex2bin("48656c6c6f20576f726c6421"); 
echo "<br>";echo "<br>";

style_txt("function Break a string into an array:");
echo "<br>";
$str_fun_2_arr = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str_fun_2_arr));
echo "<br>";echo "<br>";

style_txt("hasing function (md5)");
echo "<br>";
$str_md5 = "test pass";
echo md5($str_md5);
echo "<br>";echo "<br>";

echo "<a href='https://www.w3schools.com/php/php_ref_string.asp'>Reference link</a>";

?>
<!-- --------------------------Part 3----------------------------------------- -->
<?php
/*
3-  Write a PHP script to get the sum and avg of an indexed array
with value = 45 in index =1
with value = 12 in index =0
with value = 25 in index =3
with value = 10 in index =2
after that sort it in a reverse order (highest to lowest).
*/
echo "<h1><strong style='color: #2e2e6c;'>Part (3)</strong></h1><br>";


//create the array & push values to it
$arr1 = array();

$arr1[1]="45";
$arr1[0]="12";
$arr1[3]="25";
$arr1[2]="10";

//print the array and its length
echo "Array length: ". count($arr1);
echo "<br>";
print_r($arr1);
echo "<br>";

// sum of the array
$sum = array_sum($arr1);
//Other solution => loop on the array to get the sum
// foreach($arr1 as $v){
//     $sum+=$v;
// }


//print sum and avg
echo "sum of the array: ".$sum;
echo "<br>";
echo "avg of the array: ".$sum /count($arr1) ;
echo "<br>";

//array reverse sorting
rsort($arr1);
print_r($arr1);
echo "<br>";
?>


<!-- --------------------------Part 4----------------------------------------- -->
<?php 
/*
4-  Write a PHP script to sort the following associative array :

array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key  
*/
echo "<h1><strong style='color: #2e2e6c;'>Part (4)</strong></h1><br>";

$arr2 = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
print_r($arr2);
echo "<br>";echo "<br>";

echo "a) ascending order sort by value :";
echo "<br>";
asort($arr2);
print_r($arr2);
echo "<br>";echo "<br>";

echo "b) ascending order sort by Key :";
echo "<br>";
ksort($arr2);
print_r($arr2);
echo "<br>";echo "<br>";

echo "c) descending order sorting by Value :";
echo "<br>";
arsort($arr2);
print_r($arr2);
echo "<br>";echo "<br>";

echo "d) descending order sorting by Key :";
echo "<br>";
krsort($arr2);
print_r($arr2);
echo "<br>";echo "<br>";
?>
<!-- --------------------------Part 5----------------------------------------- -->
<?php
/*
5- Display the following array in an HTML table with Name, Email and Status table headers.
Specify PHP status with red color.
    $students = [
        ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
        ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
        ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
        ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
        ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
    ];
*/
echo "<h1><strong style='color: #2e2e6c;'>Part (5)</strong></h1><br><br>";

$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
//print_r($students);

echo "
    <!DOCTYPE html>
    <html>
    <head>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
    </head>
    <body>

    <h2>Students Table</h2>
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
    </tr>
";
// // SHOW STATUS ONLY IN RED COLOR

// foreach ($students as $key => $value) {
//     echo "<tr>";
//     foreach ($value as $key => $value) {
//         if ($value == "PHP") {
//             echo "<td style='color:red';>". $value."</td>";
//         }
//         else {
//             echo "<td>". $value."</td>";
//         }
//     }
//     echo "</tr>";
// }

// // SHOW ALL THE ROW IN RED
foreach ($students as $key => $value) {
    if($value["status"]=="PHP"){
        foreach ($value as $k => $v) {
            echo "<td style='color:red';>". $v."</td>";
        }
    }
    else {
        foreach ($value as $k => $v) {
            echo "<td>". $v."</td>";
        }
    }
    echo "</tr>";
}
echo "</table></body></html>";

?>

<!-- ..........................Others.......................................... -->
<?php
function style_txt($txt){
    echo "<strong style='color:blue';>".$txt."</strong>";
};
?>