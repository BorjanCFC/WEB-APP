<?php
    $product_description = htmlspecialchars(filter_input(INPUT_POST, 'product_description'));
    $list_price = filter_input(INPUT_POST, 'list_price' );
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    $discount_amount = $list_price * ($discount_percent / 100);
    $discount_price = $list_price - $discount_amount;

    $list_price_f = number_format($list_price, 2);
    $discount_percent_f = number_format($discount_percent);
    $discount_amount_f = number_format($discount_amount, 2);
    $discount_price_f = number_format($discount_price, 2);
?>

<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <title>Калкулатор за попуст</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Калкулатор за попуст</h1>

        <label>Опис на производот:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>Цена:</label>
        <span><?php echo '$' . $list_price_f; ?></span><br>

        <label>Попуст:</label>
        <span><?php echo $discount_percent_f . '%'; ?></span><br>

        <label>Износ на попуст:</label>
        <span><?php echo '$' . $discount_amount_f; ?></span><br>

        <label>Цена со попуст:</label>
        <span><?php echo '$' . $discount_price_f; ?></span><br>
    </main>
</body>
</html>
