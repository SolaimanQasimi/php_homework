<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
function fizzBuzz($num) {
    if (isPrime($num)) {
        return "Prime";
    } elseif ($num % 3 == 0 && $num % 5 == 0) {
        return "FizzBuzz";
    } elseif ($num % 3 == 0) {
        return "Fizz";
    } elseif ($num % 5 == 0) {
        return "Buzz";
    }
    return $num;
}
echo fizzBuzz(15) . "\n";  // FizzBuzz
echo fizzBuzz(7) . "\n";  // Prime
?>
