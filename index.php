<?php 
//1
$color = array('white', 'green', 'red', 'blue', 'black');
$str ="The memory of that scene for me is like a frame of film forever frozen at that
moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
new president and his first lady. - Richard M. Nixon";
//===================
//2

//echo "<ul>";
//array_map( "ulEcho",$color);
//function ulEcho ($i){
//    echo "<li>$i</li>";
//}
//echo "</ul>";

//===================
//3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
    "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
    "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
//array_walk($cities, function(&$v, $k) { echo "The capital of $k is $v <br>"; });
//===================
//4

//$x = array(1, 2, 3, 4, 5);
//var_dump($x);
//unset($x[3]);
//$x = array_values($x);
//echo '<br>';
//var_dump($x);
//===================
//5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
//echo $color[4];
//===================
//7

$arr = array( '1', '2', '3', '4', '5' );
array_splice( $arr, 2, 0, "*" );
//var_dump($arr);
//print_r($arr)
//===================
//8
$arr8 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");


//asort($arr8);
//var_dump($arr8);
//echo '<br>';
//// // ==============
//arsort($arr8);
//var_dump($arr8);
//echo '<br>';
//// // ==============
//ksort($arr8);
//var_dump($arr8);
//echo '<br>';
//// // ==============
//krsort($arr8);
//var_dump($arr8);
//echo '<br>';
//// // ==============


//===================
//9
$arr9 = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
// $average=0;
// foreach ($arr9 as $x){
//     $average += $x;
// }
// echo $average/count($arr9);
// echo '<br>';
// //====================
// sort($arr9);
// for ($i=0; $i < 5; $i++) { 
//     echo $arr9[$i]." | ";
// }
// echo '<br>';

// // ===========
// rsort($arr9);
// for ($i=0; $i < 5; $i++) { 
//     echo $arr9[$i]." | ";
// }
//===================
//11
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");
array_unshift($array1[0],$array2[0]);
array_unshift($array1[1],$array2[1]);
// var_dump($array1);
//===================
//12
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
function toUpper($arr){
    foreach ($arr as $key => $value){
        $arr[$key]=strtoupper($value);
    }
    var_dump($arr);
    echo  "<br>";
}
function toLower($arr){
    foreach ($arr as $key => $value){
        $arr[$key]=strtolower($value);
    }
    var_dump($arr);
    echo  "<br>";
}
//toUpper($color);
//toLower($color);
//===================
//13
$number = range(200,250,4);
//print_r ($number);
//===================
//14

$arr = ["abcd","abcaaaaa","","hjjj","g","wer"];
$lengthArr=array_map('strlen', $arr);
// echo min($lengthArr) ." || ".max($lengthArr);
//===================
//15
//for ($i=0; $i < rand(10,100); $i++) {
//    echo rand(11,20) . " | ";
//}
//===================
//16
$color = array(4 => 'white', 60 => 'green', 11=> 'red');
//$max =null;
//foreach($color as $key => $value){
//if (!$max){
//    $max=$key;
//}
//else{
//    if ($max<$key)$max=$key;
//}
//}
//echo $max;
//===================
//17
$arr17 = [0,1,78, 60, 62, 68, -71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
//$min =null;
//foreach($arr17 as  $value){
//    if ($value==0) continue;
//    if (!$min ){
//        $min=$value;
//    }
//    else{
//        if ($min>$value )$min=$value;
//    }
//}
//echo $min;
//===================
//18
//حليتو بطريقة اسهل بوخذ بس متغيرين 😂
function task18($number, $precision)
{
    $mult = pow(10, $precision);
    return floor($number * $mult) / $mult;
}

//echo task18(49.9551212, 0);
//===================
//19
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));
//echo $color["holes"][5];
//echo $color["color"]["a"];
//===================
//20


function task20($a, $b)
{
    $order =[1,3,4,2];

    foreach($order as $key => $value)
    {
        if($a==$value)
        {
            return 0;
        }

        if($b==$value)
        {
            return 1;
        }
    }
}


$arr = [0,1,78, 60, 62, 68, -71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

//usort($arr, "task20");
//
//print_r($arr);
//===================
//24
$arr24 = array(
    "A1", "A20", "a3","a10", "C2"
);
sort($arr24, SORT_NATURAL | SORT_FLAG_CASE);
print_r($arr24);


?>