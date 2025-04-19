<?php
$result1 = null;
$result2 = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $result1 = rand(1, 6);
    $result2 = rand(1, 6);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
           background: linear-gradient(to left, #fdeb50, #ffad);;
           color: black;
        }
        .dice {
            font-size: 25px;
            margin: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 20px;
        }
        .dice-images {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }
        .dice-images img {
            width: 100px; 
            height: 100px; 
            margin: 0 10px;
        }
    </style>
</head>
<body>

<h1>Dice</h1>
<p>Click the button to roll the dice again!!</p>

<form method="post">
    <button type="submit">Roll Dice</button>
</form>

<?php if ($result1 !== null && $result2 !== null): ?>
    <div class="dice">
        You rolled: <strong><?php echo $result1; ?></strong> and <strong><?php echo $result2; ?></strong>
    </div>
    <div class="dice-images">
        <img src="dice<?php echo $result1; ?>.png" alt="Dice <?php echo $result1; ?>">
        <img src="dice<?php echo $result2; ?>.png" alt="Dice <?php echo $result2; ?>">
    </div>
<?php endif; ?>

</body>
</html>