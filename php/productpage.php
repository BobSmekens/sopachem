<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>
<?php include "header.php" ?>

<div class="supplier-banner">
    <div class="supplier-banner-txt">
    We help you find what you need.
    Wether it be fluids or technology, or even fluids AND technology.
    When you join our cult, the possibilities are endless. 
    </div>
</div>

<a href="allproducts.php" class="shop-link">&#8617 shop</a>

<?php include "singleproduct.php";   ?>

<div class="productpage-articles-title">Our fanatics liked these articles</div>
<div class="productpage-articles-container">
    <?php include "productpagearticlecard.php"; ?>
</div>

<?php include "footer.php" ?>
</body>
</html>

