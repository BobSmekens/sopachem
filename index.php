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
        <a class="nav-link" href="">Life Sciences</a>
        <a class="nav-link" href="">Biobanking</a>
        <a class="nav-link" href="">Diagnostics</a>
        <a class="nav-link" href="">Analytical</a>
     </div>
</div>

<div class="sopachem-banner">

    <div class="banner-txt">
        <h2>Sopachem Life Sciences</h2>
        <h3>Inspiring research</h3>
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
<div class="articles-container debug">

    <div class="article-card debug">
        <span class="articles-commas"><img src="img/quote.png" alt=""></span>
        <h4>article title</h4>
        <p>All I can say is WOW. I had the previous version 
            that I thought was the best and this one 
            is even better. Even though it is smaller/thinner, 
            they still somehow made it even more sturdy and rugged. 
            Amazing! This new version is rock solid!
        </p>
    </div>
    <div class="article-card">
    <span class="articles-commas"><img src="img/quote.png" alt=""></span>
        <h4>article title</h4>
        <p>All I can say is WOW. I had the previous version 
            that I thought was the best and this one 
            is even better. Even though it is smaller/thinner, 
            they still somehow made it even more sturdy and rugged. 
            Amazing! This new version is rock solid!
        </p>
    </div>
    <div class="article-card">
    <span class="articles-commas"><img src="img/quote.png" alt=""></span>
        <h4>article title</h4>
        <p>All I can say is WOW. I had the previous version 
            that I thought was the best and this one 
            is even better. Even though it is smaller/thinner, 
            they still somehow made it even more sturdy and rugged. 
            Amazing! This new version is rock solid!
        </p>
    </div>
</div>



        
<div class="flexbox">
    <div class="select-links-box">
        <div class="supplier-box">
        <span>Sort by supplier:</span>    
        
        <?php include "db_connection.php";
                include "php/supplierlinks.php";
        ?>
        </div><br>

        <div class="supplier-box">
        <span>Sort by category:</span>    
        
        <?php include "db_connection.php";
                include "php/brancheslinks.php";
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


    
<script src="js/sopachem.js"></script>  
</body>
</html>

