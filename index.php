<?php

// Question 01:

// Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

// Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

// So days of running month should dynamic (by php build in function)
echo "<h1> Problem No 1</h1>";  
    echo "<br>";  

    $month_name = date("F");
    $numberOfDays = date("t");
    echo "Month Name:".$month_name."-". $numberOfDays;
    
    // Question 02: 

    // If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.

    // You have to rotate from 1 to 100.

    // Your output message should like that, “3 is a odd number”

    // Not need to print even number

    echo "<h1> Problem No 2</h1>";  
    echo "<br>";  

    $i=1;
    while($i<100){
        $i++;
        if($i% 2 !=0){
            echo $i." "."is a odd number"."<br>";
        }
    }



//     Question 03: 

// 		Factorial - I think everyone knows the word. Factorial of 4 is given below:

// 4! = 4*3*2*1 = 24

// 6! = 6*5*4*3*2*1 = 720  

// So let’s calculate the factorial of 7.

echo "<h1> Problem No 3</h1>";  
echo "<br>";  

$number = 7;
$factorial = 1;
for($i = $number; $i>=1; $i--){
    $factorial*=$i;
}
echo "Factorial of {$number} is {$factorial}.";



// Question 04: 

// 	Print out from 100 - 1 using a while loop. 

// You must use decrement operator
echo "<h1> Problem No 4</h1>";  
echo "<br>";  

for($i=100; $i>=1; $i--){
    echo $i." ";
}




// Question 05: 

// You have an array of your purchased product items. 

// ['apple', 'orange', 'banana', 'mango']

// Show all products as a table list.

// Output should like that: “sl- 1 and product - apple”
echo "<h1> Problem No 5</h1>";  
echo "<br>";  

$products = ['apple', 'orange', 'banana', 'mango'];

for($i=0; $i < count($products); $i++){

    echo "sl- " .$i." and product -".$products[$i]."<br>";


}




 ?>