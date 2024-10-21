<?php
define("EXCHANGE_RATE", 1.1);  // Assume 1 USD = 1.1 EUR

function convertCurrency($amounts, $toEUR = true) {
    $converted = [];
    foreach ($amounts as $amount) {
        $converted[] = $toEUR ? $amount * EXCHANGE_RATE : $amount / EXCHANGE_RATE;
    }
    return $converted;
}
print_r(convertCurrency([10, 20, 30]));  // Convert to EUR
?>
