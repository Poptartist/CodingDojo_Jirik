<?php  
echo "<h2> Fix all the errors to show the page </h2>";
$array = array("var_dump", "and", "echo", "helps", "debug");
for($i = 0; $i < count($array); $i++)
{
echo  "<p>The value of the i index is " .$i. "</p>";
}
echo "<h3>isset function determines if a variable is set and is not NULL</h3>";
$error = '';
$arr = '';
if(isset($error)) 
{
  echo "<p>Is an empty string NULL? Also, think of an operator that we can use to return a true value to a variable that is not set yet!!!!!</p>";
}
if(isset($arr))
{
var_dump($array);
}
?>