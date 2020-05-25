
<?php
var_dump($_POST);

$a = 1;
$b = 2;
$c = 3;
$d = 4; 

$e = [1,2,3,4];
echo "<pre>";print_r($e);
$e[0];//1
$e[1];//2
$e[2];//3
$e[3];//4
echo "</pre>";


$number = 1257;
// Tpel $number tvi tvanshannery

// Qayl 1
$k = $number % 10; // 7
// 1257 / 10 = 125.7
// (int) 125.7 = 125
$number = (int)($number / 10); // 125
// $number /= 10;
echo $k.'<br />'; // 7
//Qayl 2
$k = $number % 10; // 5
$number = (int)($number / 10); // 12
echo $k.'<br />'; // 5

//Qayl 3
$k = $number % 10; // 2
$number = (int)($number / 10); //1
echo $k.'<br />'; //2

//Qayl 4
$k = $number % 10; // 1
$number = (int)($number / 10); //0
echo $k.'<br />'; //1

?>
<table class="table">
    <tr>
        <td>Arjeq</td>
    </tr>
</table>
<?php

// $str = '<table class="table">';//<table class="table">
//     $str = $str.'<tr>'; //<table class="table"><tr>
//         $str = $str.'<td>';
//             $str = $str.'Arjeq';
//         $str = $str .'</td>';
//     $str = $str .'</tr>';
// $str = '</table>';

$str = '<table class="table">';//<table class="table">
    $str .= '<tr>'; //<table class="table"><tr>
        $str .= '<td>';
            $str .= 'Arjeq';
        $str .= '</td>';
    $str .= '</tr>';
$str .= '</table>';

echo $str;

$flag = false;
var_dump($flag);

$expression = '';
if(true){
    echo "sdfslkfjdsf<br />";
}

// 1---5 2>=1 && 2<=5
$num = 1986;
if($num >= 1985 && $num <= 1990){
    //
}

var_dump(-5 < false);// false

$x = 1;
echo "x++=".$x++; //1
$k = $x;
echo "<br />";
echo "k=".$k; //2

echo "<br />";

$y = 1;
echo "++y=".++$y; //2

echo "<hr />";

$barev = 'Barev<br />';
echo "$barev";//1
echo "$barev";//2
echo "$barev";// 3
echo "$barev"; //4
echo "$barev";//5

for($x = 1; $x <= 5; $x++){
    echo "$barev<br />";
}
// Qayl 1 $x = 1, 1 <=5 =>true Barev, $x =>2 
// Qayl 2 $x = 2, 2 <=5 =>true Barev, $x =>3 
// Qayl 3 $x = 3, 3 <=5 =>true Barev, $x =>4 
// Qayl 4 $x = 4, 4 <=5 =>true Barev, $x =>5 
// Qayl 5 $x = 5, 5 <=5 =>true Barev, $x =>6
// Qayl 6 $x = 6, 6 <=5 =>false

// Gtnel 10-ic 50 mijakayqum zuyg tvery
for($x = 10; $x <= 50; $x++) {
    if($x % 2 == 0) {
        echo $x.' ';
    }
}

for($x = 10; $x <= 50; $x+=2) {
    echo $x.' ';
}

//while, do while/ switch, break, continue

//inner cycles
echo '<table class="table">';
for($i = 1; $i <= 5; $i++){
    echo "<tr>";
        for($j = 1; $j <= 2;$j++){
            echo "<td>".$i." ".$j."</td>";
        }
    echo "</tr>";
}
echo "</table>";


