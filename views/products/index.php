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

    <div class="inputs">
        <form action="<?php echo constant('URL')?>/products/addProduct" method="POST">
            <label for="products">Products</label>
            <input type="text" name="products">
            <input type="submit">
            <button>categories</button>
        </form>
    </div>




</body>
</html>