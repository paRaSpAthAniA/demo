<?php
$cart = [
    "Apples" => ["quantity" => 5, "price_per_unit" => 2.5],
    "Milk" => ["quantity" => 2, "price_per_unit" => 3.0],
    "Bread" => ["quantity" => 1, "price_per_unit" => 2.0],
    "Eggs" => ["quantity" => 12, "price_per_unit" => 0.2]
];

function generateBill($cart) {
    $grandTotal = 0;

    echo "<b> Grocery Store Bill </b> ";
    echo str_repeat("", 30) . "";
    echo str_repeat("", 30) . "<br>";

    $i=1;
    foreach ($cart as $item => $details) {
        $totalCost = $details["quantity"] * $details["price_per_unit"];
        $grandTotal += $totalCost;
       
        echo $i++ . " ". ( $item ) ."- Quantity:". "\t{$details['quantity']}" . "- Price per: " . "\t\tRs{$details['price_per_unit']}". " - Total : " . "\t\tRs$totalCost<br>";
    }

    echo str_repeat("", 30) . "";
    echo "Grand Total: Rs $grandTotal\n";
}

generateBill($cart);
?>

