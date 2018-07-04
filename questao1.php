<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i%3 == 0 && $i%5 == 0) {
        echo "<pre> FizzBuzz";
    } elseif ($i%3 == 0) {
        echo "<pre> Fizz";
    } elseif ($i%5 == 0) {
        echo "<pre> Buzz";
    } else {
        echo "<pre>".$i;
    }
}
