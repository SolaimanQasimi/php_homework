<?php
function dynamicConversion($input1, $input2) {
    if (is_numeric($input1) && is_numeric($input2)) {
        return $input1 * $input2;
    } elseif (is_string($input1) || is_string($input2)) {
        return $input1 . $input2;
    } else {
        $sorted = [$input1, $input2];
        sort($sorted);
        return implode(", ", $sorted);
    }
}
echo dynamicConversion(5, 10) . "\n";  // 50
echo dynamicConversion("Hello", 42) . "\n";  // Hello42
echo dynamicConversion("apple", "banana") . "\n";  // apple, banana
?>
