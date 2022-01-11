`<?php 
echo "---------------Q1<br>";
$pragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
$colors =['red', 'green' , 'white'];

echo "---------------Q2<br>";
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c <br> ";
}
echo "---------------Q3<br>";
$cities = array( "Italy"=>"Rome", "France" => "Paris","Germany" => "Berlin", "Greece" => "Athens",);
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital <br>" ;
}
echo "---------------Q4<br>";
$color = array('white', 'green', 'red');
echo $color[0];
echo "<br>---------------Q5<br>";
$Oarray = array( 1, 2, 3, 4, 5 );
$location = 4;
$inserted = array( '$' ); 
array_splice( $Oarray, $location,0 , $inserted );
print_r($Oarray);
echo "<br>---------------Q6<br>";
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort ($fruits);
foreach($fruits as $x => $valuex)
echo $x." = ". $valuex ."<br>";
echo "<br>---------------Q7<br>";
$numberSort = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
$average= array_sum($numberSort)/count($numberSort);
echo "average = " . $average . "<br>";
// echo (min($numberSort);6 );
sort($numberSort);
$numberSort_length = count($numberSort);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $numberSort[$i].", ";
}
echo "<br> List of seven highest temperatures :";
for ($i=($numberSort_length-7); $i< ($numberSort_length); $i++)
{
echo $numberSort[$i].", ";
}
echo "<br> ---------------Q8<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br> ---------------Q9<br>";
$colors = array("red", "blue", "white", "yellow");
for($i=0;$i <= count($color);$i++){
    echo strtoupper($colors[$i]);
    echo"<br>"; 
};
echo "---------------Q10<br>";
$colors = array("red", "blue", "white", "yellow");
for($i=0;$i <= count($color);$i++){
    echo strtolower($colors[$i]);
    echo"<br>"; 
};
echo "---------------Q11<br>";
for($i=200;$i <= 250;$i=$i+4){
    echo $i.", ";
};
echo "<br>---------------Q12<br>";
$my_array = array("adcd","g","de","hjjj","abc","wer");
$new_array = array_map('strlen', $my_array);
echo min($new_array)."<br>" ;
echo max($new_array);
echo "<br>---------------Q13<br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ,';
}
echo "<br>---------------Q14<br>";
function minvalues(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
echo(minvalues(array(2,0,12,10,6)));








?>