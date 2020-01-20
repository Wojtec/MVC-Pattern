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
            <input type="text" name="products" required>
            <?php 
            echo '
            <select name="category">';
                    foreach ($this->test as $category) {
                        echo '<option value="' . $category->category_id .'">' . $category->category_name . '</option>';
                    }

                   echo' </select>';

            
            ?>
            <input type="submit">
        </form>
       
        <div class="submit">
        <ul>
        <li><a href="<?php echo constant('URL')?>/listproducts/showProducts">show Products</a></li>
        </ul>
           
        </div>
    </div>




</body>
</html>