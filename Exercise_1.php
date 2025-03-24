<?php


echo "Name: Osamah Gamal Al-srory";

/*
 1- Steps downloads and installition :
  -1.1- Download and install XAMPP to start a local server. 
  -1.2- Download and install  to write and edit code.
    -2.1- Download the PHP Intelephense package in Visual Studio Code.
    -2.2- Download the PHP IntelliSense package in Visual Studio Code.
*/
echo "<p>1- Steps downloads and installation:</p>
<ul>
    <li>1.1- Download and install XAMPP to start a local server.</li>
    <li>1.2- Download and install a code editor to write and edit code.</li>
    <ul>
        <li>2.1- Download the PHP Intelephense package in Visual Studio Code.</li>
        <li>2.2- Download the PHP IntelliSense package in Visual Studio Code.</li>
    </ul>
</ul>";



/*
2- Data Types : 
    -2.1- string 
    -2.2- integer/int
    -2.3- float
    -2.4- double
    -2.5- boolean
    -2.6- null
    -2.7- array
    -2.8- object
*/
echo "2- Data Types :<br>
<ul>
    <li>2.1- string</li>
    <li>2.2- integer/int</li>
    <li>2.3- float</li>
    <li>2.4- double</li>
    <li>2.5- boolean</li>
    <li>2.6- null</li>
    <li>2.7- array</li>
    <li>2.8- object</li>
</ul>";


//Data Types:

# 1-string
$name="Osamah Gamal";
echo "Type is -> ",getType($name),"</br>";
echo "string -> $name</br></br>";

# 2-integer/int
$phone=779205520;
echo "Type is -> ",getType($phone),"</br>";
echo "integer -> $phone</br></br>";

# 3-floate
$floatnum=20.5;
echo "Type is -> ",var_dump($floatnum),"</br>";
echo "floate -> $floatnum</br></br>";

# 4-double
$doublenum=500000.9854321;
echo "Type is -> ",getType($doublenum),"</br>";
echo "double -> $doublenum</br></br>";

# 5-boolean
$bool=true;
echo "Type is -> ",getType($bool),"</br>";
echo "boolean -> $bool</br></br>";

# 5-null
$_null=null;
echo "Type is -> ",getType($_null),"</br>";
$_null="This type is null...";
echo "null -> $_null</br></br>";

# 6-array
//$array=array(5,4,3,2,1);
$array=[5,4,3,2,1];
echo "Type is -> ",getType($array),"</br>";
echo "Here is array:</br>";
foreach($array as $i){
    echo "Number  -> $i </br></br>";

}

# 7-object
class Car{
    public $brand;
    public $color;
    public function setValues($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function getDetails() {
        return "Car: $this->brand  Colore: $this->color";
    }
}
$mycar =new Car();
$mycar->setValues("TOYOTA","White");

echo "Type is -> ",getType($mycar),"</br>";

echo "Here is object :</br>";
echo $mycar->getDetails();


?>