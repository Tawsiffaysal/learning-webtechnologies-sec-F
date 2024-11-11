<?php
$array = [2, 5, 8, 12, 15, 23, 34, 45, 56, 67, 78, 89];
$searchElement = 56; 

$isFound = false;

foreach ($array as $element) {
    if ($element == $searchElement) {
        $isFound = true;
        break;  
    }
}

if ($isFound) {
    echo $searchElement . " is found in the array.";
} else {
    echo $searchElement . " is not found in the array.";
}
?>
