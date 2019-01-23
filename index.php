<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\sopachem.css" />
    <script src="js/sopachem.js"></script>
</head>
<body>


<div class="navbar">
    <div class= "" id="branding"><a href="index.php"><img src="img/sopachemlogo.png" alt=""></a></div>
    <div class="navbar-container">
        <a class="nav-link" href="">Life Sciences</a>
        <a class="nav-link" href="">Biobanking</a>
        <a class="nav-link" href="">Diagnostics</a>
        <a class="nav-link" href="">Analytical</a>
     </div>
</div>

<div class="sopachem-banner">
    <img src="img/slider1.png" alt="">
    <div class="banner-txt">
        <h2>Sopachem Life Sciences</h2>
        <h3>Inspiring research</h3>
    </div>
</div>

<div class="main-product-container">
    <div class="main-product-title">BMS Genesig X2.0</div>
    <div class="main-product-description">Fast, accurate, uniform DNA sequencer.</div>
    <button id="shop-btn">SHOP NOW</button>
</div>

<div class="selection-container">
    <div class="product-select">DNA and Bio-enginering</div>
    <div class="product-select">Cell culture</div>
    <div class="product-select">CPR</div>
</div>

<div class="products-container">
    <?php 
        include "db_connection.php";
        include "php/productcard.php" ;
    ?>;
</div>


    
</body>
</html>

