<?php
$products = [
    "Laptop" => 1200,
    "Phone" => 800,
    "Tablet" => 600
];
arsort($products);  // Sort by price (highest to lowest)
print_r($products);
?>
