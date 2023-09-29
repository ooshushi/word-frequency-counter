<?php
/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'name' and 'price' keys.
 * @return float Total price of the items
 */
$items = [
 ['name' => 'Widget A', 'price' => 10],
 ['name' => 'Widget B', 'price' => 15],
 ['name' => 'Widget C', 'price' => 20],
];

function calcTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$totalPrice = calcTotalPrice($items);
            echo "Total price: $ $totalPrice";


/**
 * Modifies a string by removing spaces and converting it to lowercase.
 *
 * @param string $inputString The input string to be modified.
 * @return string The modified string.
 */

 function modifiedString(string $inputString): string {
    $modifiedString = str_replace(' ', '', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}
$string = "This is a poorly written program with little structure and readability.";
$newString = modifiedString($string);
echo "Modified string: $newString";

/**
 * Checks if a number is even or odd.
 *
 * @param int $number The number to be checked.
 * @return string A message indicating whether the number is even or odd.
 */
function EvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

$number = 42;
$message = EvenOrOdd($number);
echo $message;
?>