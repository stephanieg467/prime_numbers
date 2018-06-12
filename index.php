<?php

include __DIR__ . '/vendor/autoload.php';

use s9e\TextFormatter\Bundles\Fatdown as TextFormatter;

/*
$text = 'To-do list:

  * Say hello to the world :(
  * Go to http://example.com
  * Try to trip the parser with **mis*nes**ted<u> tags*</u>
  * Watch this video: http://www.youtube.com/watch?v=QH2-TGUlwu4';

// Parse the original text
$xml = TextFormatter::parse($text);

// Render and output the HTML result
echo TextFormatter::render($xml);
*/


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

    // Parse the original text
    $xml = TextFormatter::parse(var_dump($array));

    // Render and output the HTML result
    $html = TextFormatter::render($xml);
    echo '<pre>';
    //print_r($html);
    echo $html;
    echo '</pre>';


}

//want to display prime numbers up to 100
$n = 100;

//call function
n_prime_numbers($n);  //find prime numbers from 1-100


