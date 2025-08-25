<?php
  echo "1. Write a PHP script to calculate the simple interest.
  Hints: Simple Interest = (Principal × Rate × Time) / 100 <br>";
 echo" Principle:3. <br>";
 $principle = 3;

 echo"Rate:5. <br>";
 $rate =5;

 echo"Time:2. <br>" ;
 $time = 2;
  
 $simpleInterest=($principle*$rate*$time)/100;

 echo"The simple interest is: $simpleInterest";

 echo "<br><br>";

 echo "2. Write a PHP script to swap two numbers without using a third variable. <br>";

 $a=10;
 $b=20;

 $a=$a+$b;
 $b=$a-$b;
 $a=$a-$b;

echo"Swap number for a=$a and swap number for b=$b";
echo "<br><br>";

echo "3.Write a PHP script to check whether a given year is a leap year or not.
Hints: A year is a leap year if it is divisible by 4, but not divisible by 100, unless it is also divisible by 400. <br>";


$year=2018;
if($year % 400==0 && $year % 100 !==0 || $year % 4 ==0)
{
    echo "This year is an leap year";
}
else
{
    echo "This year is not a leap year";
}
echo "<br><br>";

 echo "4. Write a PHP script to find the factorial of a number.
Hints: Use loop (for/while). <br>";

$number = 5;  
$factorial = 1;

for ($i = 1; $i <= $number; $i++) 
{
    $factorial *= $i;
}

echo "The Factorial of $number is $factorial";
echo "<br><br>";

 echo "5. Write a PHP script to print all the prime numbers between 1 to 50 <br>";

 for ($number = 2; $number <= 50; $number++) 
{
    $isPrime = true;

    for ($i = 2; $i < $number; $i++) 
    {
        if ($number % $i == 0) 
        {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime)
    {
        echo $number . " ";
    }
}
echo "<br><br>";
 echo "6. Write a PHP script to print the following patterns using nested loops:
# Pattern 1
*****
****
***
**
*
# Pattern 2
1
1 2
1 2 3
1 2 3 4
# Pattern 3
A
B B
C C C
D D D D <br>";

for ($i = 5; $i >= 1; $i--) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 4; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo $j . " ";
    }
    echo "<br>";
}

$character = 'A';
for ($i = 1; $i <= 4; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo $character . " ";
    }
    echo "<br>";
    $character++;
}


 ?>