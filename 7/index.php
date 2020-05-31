<?php

$sum = 0;
$multiply = 1;
for($j = 1; $j <= 50; $j++){
    // if($j % 2 == 0) {
    if(isEven($j)) {
        $sum += $j;// $sum = $sum + $j; 2 + 4 + 6 + 8 + 10+ ... + 50
        $multiply *= $j; // $multiply = $multiply * $j;
    }
}
echo $sum;

$sum = 0;
$multiply = 1;
for($j = 48; $j <= 72; $j++){
    // if($j % 2 == 0) {
    if(isEven($j)) {
        $sum += $j;// $sum = $sum + $j; 2 + 4 + 6 + 8 + 10+ ... + 50
        $multiply *= $j; // $multiply = $multiply * $j;
    }
}
echo $sum;
echo "<hr />";

//function declaration
function isEven(int $n) : bool
{
    if($n % 2 == 0) {
        return true;
    }
    return false;
}

function countSum(int $n1, int $n2) : int
{
    $sum = 0;
    for($j = $n1; $j <= $n2; $j++){
        if(isEven($j)) {
            $sum += $j;// $sum = $sum + $j; 2 + 4 + 6 + 8 + 10+ ... + 50
        }
    }
    return $sum;
}

function checkFingerPrint($userName, $userSurname, $userPassport)
{
    // 256 charachter string
}

checkFingerPrint('Gevorg','Darbinyan', 'AN0124563');


function getData(string $name) : string
{
    return $name;
}

// function 

echo countSum(1, 50);
echo "<br />";
echo countSum(48, 72);
echo "<br />";
var_dump(isEven(16));

echo getData(1);

$x = 1;
$y = 2;
$c = [1,2];

echo $c[0];
echo $c[1];

echo "<hr />";

// array declaration
//$a = array(1,2,2,5,2,5,96,-56);
$a = [1,-53,62,58,96,56,2,23,0,1];
//array index
// array count of elements - n, 0, 1,2,,....n-1
// count($a)
// 1. Print elements of $a array
$count = count($a);
var_dump($count);
for($i = 0; $i < $count; $i++){
    echo $i."---".$a[$i].'<br />';
}

var_dump($a);

foreach($a as $key => $value) {
    // echo $key."---".$value.'<br />';
    echo $key."---".$a[$key].'<br />';
}

echo "<hr />";

$users = [
    'Prague',
    'Armen' => 25,
    'Anna' => 20,
    'Lusine' => 28,
    'Mamikon' => 21,
    72 => 90,
    'Yerevan',
    1.5 => 56,
    'Vladivastok'
];

echo "<pre>";print_r($users);

function greater24($n) 
{
    return $n > 24;
}

foreach($users as $name => $age) {
    if(greater24($age)) {
        echo $name."---".$age.'<br />';
    }
}
echo "<hr />";

$b = [1,"Yerevan",true,4.5,"Moscow"=>"Russia"];

foreach($b as $key => $value) {
    echo $key."---".$value.'<br />';
}

$userGrades = [
    'Armen' => [18,18,17,19],
    'Anna' =>  [20,15,14,20],
    'Lusine' => [18,18,16,19],
    'Mamikon' => [18.8,18.5,17,19]
];

$str = '<table>';
foreach($userGrades as $user => $gradeData) {
    $str .= '<tr>';
        $str .= '<td>'.$user.'</td>';
    $str .= '</tr>';
    $str .= '<tr>';
        $str .= '<td>';
            foreach($gradeData as $grade) {
                $str .= '<strong>'.$grade.'</strong><br />';
            }
        $str .'</td>';
    $str .= '</tr>';

    //echo "<pre>";print_r($gradeData);
}
$str .= '</table>';

echo $str;

echo '<hr />';

$z = 5;
$t = &$z; //5
// $t = $z; //5
$t = 6;
echo $z; //5

$z1 = [1,2,3,4];
$t1 = &$z1; // [1,2,3,4];
// $t1 = $z1; // [1,2,3,4];
$t1[2] = -7;

echo "<pre>";print_r($z1);

// static memory 
//dynamic memory

// integer
// float
// boolean
// string
// array
// object

// 5,5.5, 

//create new type
// string name
// integer age
// float grade
// array children

// $number = 8;
// $grade = 18.7;
// $name = 'Armenak';

echo "<h2>Classes and objects</h2>";

// abstract data type
class Human
{
    // member variables - properties
    // public, private, protected
    private $name = 'Tim'; // string $name
    public $age = 25; // int $age
    public $grade = 18.5; // float $grade
    public $children = ['Ann','Tom']; // array $children

    // member functions - methods

    public function getData() 
    {
        return $this->name.'('.$this->age.')';
    }
}

$h = new Human(); // $h is object
// echo $h->name.'<br />';
echo $h->getData().'<br />';
echo $h->age.'<br />';
echo $h->grade.'<br />';
var_dump($h->children);

class Page
{
    protected $statisticsCount = 15;
    protected function home()
    {
        echo "Page Home<br />";
    }

    public function aboutAs()
    {
        echo "Page About Us<br />";
    }

    public function gallery()
    {
        echo "Gallery<br />";
    }

    public static function getPageDescription()
    {
        echo "Description<br />";
    }
}

class UpdatedPage extends Page
{
    public function contact()
    {
        echo "Contact page!";
    }

    public function home(){
        parent::home();
    }

    public function aboutAs()
    {
        echo "UpdatedPage About Us<br />";
    }

    public function getStatisticsCount()
    {
        echo $this->statisticsCount;
    }
}

// $page = new Page();
// $page->home();
// $page->aboutAs();
// $page->gallery();

$page = new UpdatedPage();
$page->home();
$page->aboutAs();
$page->gallery();

$page->getStatisticsCount();


Page::getPageDescription();


$user1 = new StdClass();
$user1->name = 'Armen';
$user1->surname = 'Armenyan';
$user1->age = 22;

echo "<pre>";print_r($user1);

$user2 = $user1;

$user2->surname = 'Kirakosyan';

echo "<pre>";print_r($user1);







