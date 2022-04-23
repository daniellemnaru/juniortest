<?php

// include 'dbh.php';
// include 'products.php';
// include 'show.php';

?>

<html>
    <head>
        <link rel="stylesheet" href="pagestyle.css">
    </head>
    <body>
        <div class="page">
            <form id="product_form" action="insert.php" method="POST">
            <div class="head">
                <h1>Add Product</h1>
                <div class="menu">
                    <button class="button" type="submit">Add</button>
                    <a href="index.php"><div class="button">Cancel</div></a>
                </div>
            </div>
                <span>SKU<input type='text' name="sku" id="sku" required
                oninvalid="this.setCustomValidity('Please, submit required data')" oninput="this.setCustomValidity('')"/></span><br/>
                <span>Name<input type='text' name="name" id="name" required
                oninvalid="this.setCustomValidity('Please, submit required data')" oninput="this.setCustomValidity('')"/></span><br/>
                <span>Price ($)<input type='text' name="price" id="price" required
                oninvalid="this.setCustomValidity('Please, submit required data')" oninput="this.setCustomValidity('')"/></span><br/>
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