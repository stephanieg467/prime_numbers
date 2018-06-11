<?php

//By definition, a prime number is a whole number greater than 1 that can be factored only by 1 and itself.

//this function will find and display all prime numbers up to and including n
function n_prime_numbers($n){

    //the array which will hold the prime numbers
    $array = array();

    //outer for loop that checks numbers from 1 to n to see if it is a prime number
    for($i=1;$i<=$n;$i++){

        //variable $counter will be incremented if the number can be factored only by 1 and itself
        $counter = 0;

        //inner for loop that goes through all divisible factors from 1 to $i
        for($j=1;$j<=$i;$j++){

            //check if $i is divisible by $j
            if($i % $j==0){

                //if it is the increment $counter
                $counter++;

            }

        }

        //prime number has two requirements: divisible by 1 and divisible by itself, therefore, $counter will be 2 if number is prime
        if($counter==2){

            //add prime number to array
            array_push($array, $i);

        }

    }

    //display output
    echo '<pre>';
    var_dump($array);
    echo '</pre>';

}

//want to display prime numbers up to 100
$n = 100;

//call function
n_prime_numbers($n);  //find prime numbers from 1-100


?>