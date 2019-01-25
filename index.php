<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\sopachem.css" />
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Slabo+27px" rel="stylesheet"></head>
<body>


<div class="navbar">
    <div class= "" id="branding"><a href="index.php"><img src="img/sopachemlogo.png" alt=""></a></div>
    <div class="navbar-container">
        <a class="nav-link" href="php/allproducts.php?category=Fluids">All products</a>
        <a class="nav-link" href="php/branches.php?category=Fluids">Watery fluids</a>
        <a class="nav-link" href="php/branches.php?category=Technology">Sciencing science scienceses</a>
     </div>
</div>

<div class="sopachem-banner" id="banner">

    <div class="banner-txt">
        <h2>Fluid Technology</h2>
        <h3>Fluids AND technology</h3>
    </div>
</div>

<div class="main-product-container">
    <div class="main-product-title">BMS Genesig X2.0</div>
    <div class="main-product-description">Fast, accurate, uniform DNA sequencer.</div>
    <button id="shop-btn">SHOP NOW</button>

    <img src="img/zugase.png" alt="">
</div>

<!--
<div class="selection-container">
    <div class="product-select" onclick="showBio()">Bio-enginering</div>
    <div class="product-select" onclick="showDNA()">DNA</div>
    <div class="product-select" onclick="showCells()">Cell culture</div>
    <div class="product-select" onclick="showCPR()">CPR</div>
</div>
-->
<div class="articles-title">'The crowd has spoken'</div>
<div class="articles-container">
    <?php include "php/getarticles.php"; ?>
</div>

<div class="horizontal-line"></div>

        
<div class="flexbox">
    <div class="select-links-box">
        <div class="supplier-box">
            <span>Sort by category:</span>    
            <?php include "db_connection.php";
                    include "php/brancheslinks.php";
            ?>
        </div>

        <div class="supplier-box">
            <span>Sort by supplier:</span>    
            <?php include "db_connection.php";
                    include "php/supplierlinks.php";
            ?>
        </div>

       
    </div>
<div class="products-container">
        <?php 
            include "db_connection.php";
            include "php/productcard.php" ;
        ?>;
</div>
</div>

<div class="footer-container">
    <div class="footer-left">
        copyright&copy bob 2019
    </div>
    <div class="footer-right">
        <a href=""><img src="img/facebook.png" alt=""></a>
        <a href=""><img src="img/instagram.png" alt=""></a>
        <a href=""><img src="img/twitter.png" alt=""></a>
    </div>

</div>
    
<script src="js/sopachem.js"></script>  
</body>
</html>

