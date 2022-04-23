<?php

include 'dbh.php';
include 'products.php';
include 'show.php';

?>

<html>
    <head>
        <link rel="stylesheet" href="pagestyle.css">
    </head>
    <body>
        <div class="page">
            <div class="head">
                <h1>Product List</h1>
                <div class="menu">
                    <a href="add-product.php"><div class="button">ADD</div></a>
                    <div class="button" id="delete-product-btn">MASS DELETE</div>
                </div>
            </div>
            <div id="products">
<?php

$prods = new viewProducts();
$prods->showAllProducts();

?>
            </div>
        </div>
</body>
</html>