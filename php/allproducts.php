<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css/sopachem.css" />
  
</head>
<body>
<?php include "header.php" ?>


<div class="supplier-banner">
    <div class="supplier-banner-txt">
        A fine selection selected by our selectors who do these kinda things.
        All our products support women rights and are against enforced child pregnancy.
        We also have an army of squirrels.
    </div>
</div>

<div class="whitespace supplier-title">All our products</div>
<div class="flexbox">
    <div class="select-links-box">
        <div class="supplier-box">
            <span>Sort by category:</span>    
            <?php include "db_connection.php";
                    include "brancheslinks2.php";
            ?>
        </div>

        <div class="supplier-box">
            <span>Sort by supplier:</span>    
            <?php include "db_connection.php";
                include "supplierlinks2.php";
            ?>
        </div>

       
    </div>
<div class="products-container">
        <?php 
            include "db_connection.php";
            include "productcard2.php" ;
        ?>;
</div>
</div>

<?php include "footer.php" ?>
</body>
</html>
