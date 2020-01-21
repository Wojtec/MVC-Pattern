<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'views/header.php' ?>
<h1>Products List :</h1>

<?php
    foreach ($this->products as $product) {
        echo '<ul>';
        echo '<li>'.' Category: '.$product->category_name.' | '.$product->product_name .'</li>';
        echo '</ul>';
    }

?>

</body>
</html>