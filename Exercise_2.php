<?php
echo "Name: Osamah Gamal Al-srory </br></br>";

/* 
Exercise_2 :
1-Number and number or math function.
2-String and string function.
3-Array and array function.
4-Condition (1-if-else , 2-if-else if-else , 3-Switch).
*/


// 1- 1-Number and number or math function.

 $num1=6;
 $num2=5;
 $num3=2;

// Arithmetic Operations 
 echo "Arithmetic Operations :</br>";
 echo $num1." + ".$num2." = ".$num1+$num2."</br>";
 echo $num1." - ".$num2." = ".$num1-$num2."</br>";
 echo $num1." * ".$num2." = ".$num1*$num2."</br>";
 echo $num1." / ".$num2." = ".$num1/$num2."</br>";
 echo $num1." % ".$num2." = ".$num1%$num2."</br>";

// Assigment with math operators (+= -= *= /+ %=)
echo "</br> Assigment with math operators 1-(+=) 2-(-=) 3-(*=) 4-(/+) 5-(%=) :</br>";
$num1+=$num2; echo $num1 .'</br>';
$num1-=$num2; echo $num1 .'</br>';
$num1*=$num2; echo $num1 .'</br>';
$num1/=$num2; echo $num1 .'</br>';
$num1%=$num2; echo $num1 .'</br>';

// Increment operators
echo "</br> Increment operators :</br>";
$num1++;
echo "increment by operators ++ after virable ->".$num1.'</br>';
++$num1;
echo "increment by operators ++ before virable ->".$num1.'</br>';

// Decrement operators
echo "</br> Decrement operators :</br>";
$num1--;
echo "decrement by operators -- after virable ->".$num1.'</br>';
--$num1;
echo "decrement by operators -- before virable ->".$num1.'</br>';


// Number checking functions
echo "</br> Number checking functions :</br>";
echo var_dump(is_integer($num1)).'</br>';
echo var_dump(is_string($num1)).'</br>';
echo var_dump(is_bool($num3)).'</br>';

// Conversion
echo "</br> Conversion :</br>";
$num1=3;
$num2=(string)$num1;
echo "Convert number 3 to string -> ".$num2.'</br>';
$num2="1";
$num1=(int)$num2;
echo "Convert string $num2 to integer -> ".$num1.'</br>';

// Number functions 
echo "</br> Number functions :</br>";
echo "abs(-12) => ".abs(-12).'</br>';
echo "pow(2,5) => ".pow(2,5).'</br>';
echo "sqrt(16) => ".sqrt(16).'</br>';
echo "max(1,2,3,5,4) => ".max(1,2,3,5,4).'</br>';
echo "min(3,2,1,5,4) => ".min(3,2,1,5,4).'</br>';
echo "round(3.6) => ".round(3.6).'</br>';
echo "round(3.4) => ".round(3.4).'</br>';
echo "floor(3.6) => ".floor(3.6).'</br>';
echo "ceil(3.4) => ".ceil(3.4).'</br>';

// Number Format
echo "</br> Number Format :</br>";
$num1=12345.34567;
echo "number format => ".number_format($num1,3,',','.');



// 2-String and string function.

// create simple string 
echo "</br> create simple string :</br>";
$name="Osamah Gamal";
$hi="Hi $name";
echo $hi.'</br>';

// string concatenation
echo "string concatenation :</br>";
echo "Hello "
." Osamah "
.' Gamal Mohammed '.'</br>';

// string function 
echo "string function :</br>";
$string="   Hello  World   ";
echo "String => $string".'</br>';
echo "String length = ".strlen($string).'</br>';
echo "String after use trim => ".trim($string).'</br>';
echo "String after use left trim => ".ltrim($string).'</br>';
echo "String after use right trim => ".rtrim($string).'</br>';
echo "String word count => ".str_word_count($string).'</br>';

echo "String revers => ".strrev($string).'</br>';
echo "String to upper => ".strtoupper($string).'</br>';
echo "String to lower => ".strtolower($string).'</br>';
echo "Convert first litter to upper  => ".ucfirst("hello").'</br>';
echo "Convert first litter to lower  => ".lcfirst("Hello").'</br>';
echo "String ucwords  => ".ucwords($string).'</br>';

echo "Search text => ".strpos($string,"World").'</br>';
echo "String stripos => ".stripos($string,"World").'</br>';
echo "Substring   => ".substr($string,4,2).'</br>';
echo "String replace   => ".str_replace("Hello","Hi",$string).'</br>';
echo "str_ireplace   => ".str_ireplace("World","people",$string).'</br>';
echo "String repeat   => ".str_repeat("World ",5).'</br>';


// To save the same formate string 
$string="</br>osamah
Gamal
Al-Srory";
echo nl2br($string).'</br>';




// -3 Array and array function

// Create array
$array=array("Osamah","Ali","Mahdi");

// print the whole array
echo '<pre>';
var_dump($array).'</br>';

// get element by index
echo "print element by index[0] => ".$array[0].'</br>';

// set element by index
$array[2]="Hamza";
echo '<pre>';
var_dump($array).'</br>';

// check if array has element at index 2
var_dump(isset($array[2]));

// append element
$array[]="Zeyad";
echo '<pre>';
var_dump($array);

// print the length of the array
echo "length array is =>".count($array).'</br>';

// add element at the end array
array_push($array,"Saleh");
echo '<pre>';
var_dump($array);

// remove the end element from array
array_pop($array);

// add element to the beginning array
array_unshift($array,"Yaser");

// remove element to the beginning array
array_shift($array);

// split the string into an array
$text="osamah,gamal,mohammed";
echo '<pre>';
var_dump(explode(",",$text));
echo '<pre>';

// combine array elemnt into string 
echo implode(" ",$array).'</br>';

// check if element exist in the array
echo in_array("Osamah",$array).'</br>';

// search element index in the array
echo array_search("Osamah",$array).'</br>';

// mergr two array
$names=["Saeed"];
var_dump(array_merge($array,$names)).'<pre>';

// sorting of array
sort($array);

// reverse of array
rsort($array);


//-----------
// Associative array
//-----------

// create associative array
$person=[
    "name"=>'Osamah',
    "age"=>25,
];

// get element by key
echo $person["name"].'</br>';
echo $person["age"].'</br>';

// set element by key
$person["name"]="Ali";
echo '<pre>';
var_dump($person);

// check if array has specifc key
echo isset($person["name"]).'</br>';
echo isset($person["phone"]).'</br>';

// print the values of the array 
echo '<pre>';
var_dump($person);
echo '<pre>';


// sorting by values or by key
//sorting by key
ksort($person);
echo '<pre>';
var_dump($person);
echo '<pre>';
// sorting by values 
arsort($person);
echo '<pre>';
var_dump($person);
echo '<pre>';



// 4-Condition (1-if-else , 2-if-else if-else , 3-Switch):

$number1=7;
$number2=7;
$number3=7;

// 1- if-else
if($number1==$number2) 
echo $number1." == ".$number2.'</br>';
else 
echo $number1." != ".$number2.'</br>';

// 2-if-else if-else
if ($number1>$number2 && $number1>$number3)
echo $number1.'</br>';
elseif($number2>$number1 && $number2>$number3)
echo $number2.'</br>';
elseif($number3>$number1 && $number3>$number2)
echo $number3.'</br>';
else
    if($number1==$number2 && $number1==$number3 && $number2==$number3)
    echo "Three numbers are equal... :)";
    else
    echo "There are two numbers are equal...!";

// 3-Switch
$operator='+';
switch($operator){
    case '+':
        echo $number1+$number2;
        break;
    case '-':
        echo $number1-$number2;
        break;
    case '*':
        echo $number1*$number2;
        break;
    case '/':
        if($number21!=0)
            echo $number1/$number2;
        else
            echo $number1/1;
        break;
    case '%':
        echo $number1%$number2;
        break;
    default:
        echo "error...!";
        break;
};

?>  