<?php
function isPalindrome($str) {
    if (strlen($str) <= 1) return true;
    if ($str[0] !== $str[strlen($str) - 1]) return false;
    return isPalindrome(substr($str, 1, -1));
}
echo isPalindrome("radar") ? "True" : "False";  // True
?>
