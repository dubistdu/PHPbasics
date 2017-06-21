<?php
$name="Jasmine";
$string_one = "Hello \n$name! \n";
$string_two = 'Hello $name!';
$string_three="\nLearning to display \"Hello $name\"";
echo $string_one;
echo $string_two;
echo $string_three;

$a = "3";
$a += "5";

$b= "Hello";
$b.= " There\n";
var_dump($a); //even though the number is encased in "", $a is still int
echo ($b);
$question = "What is $a + 5?";
echo $question;
echo "$a + $a";
// php does not care about white spaces
// concatenating assignment operator ('.='), which appends the argument on the right side to the argument on the left side

$myName="Jasmine";
$myName.=" Frantz";
$myName.=" ,Mom!";
echo $myName;

$firstName = "\nRasmus";
$lastName = "Lerdorf";
$fullName=$firstName ." ". $lastName;
$fullName.=" was the original creator of PHP\n";
echo $fullName;

//php if statement
//if (condition) {
//     code to be executed if condition is true;
// }
?>
