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
                <h1>Add Product</h1>
                <div class="menu">
                <a href="add-product.php"><input type="submit" value="add"/></a>
                <a href="add-product.php"><button>Cancel</button></a>
                </div>
            </div>

            <form id="product_form" action="insert.php" method="post">
                <span>SKU<input type='text' name="sku" id="sku"/></span><br/>
                <span>Name<input type='text' name="name" id="name"/></span><br/>
                <span>Price<input type='text' name="price" id="price"/></span><br/>
                <span>Type switcher<select id="productType" name="productType">
                    <option id="dvd" value="dvd">DVD</option>
                    <option id="furniture" value="furniture">Furniture</option>
                    <option id="book" value="book">Book</option>
                </select></span><br/>
                <span>Size (MB)<input type='text' name="size" id="size"/></span><br/>
                <span>Height (CM)<input type='text' name="height" id="height"/></span><br/>
                <span>Width (CM)<input type='text' name="width" id="width"/></span><br/>
                <span>Lenght (CM)<input type='text' name="length" id="length"/></span><br/>
                <span>Weight (KG)<input type='text' name="weight" id="weight"/></span><br/>
            </form>

        </div>
</body>
</html>