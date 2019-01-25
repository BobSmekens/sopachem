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
        We only want the best for our customers. Thats why we select only the best of the best suppliers.
        This way we can guarantee only quality products and a 99 years warranty.

    </div>

</div>


    <?php
    $supplierId = $_GET['product_supplier'];
    echo '<div class="supplier-title">' . $supplierId . '</div>';
    ?>

<div class="flex-wrapper">

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
</div>

<div class="jumbo-wrapper">
    
    <?php
    $supplierId = $_GET['product_supplier'];
    include "db_connection.php";
    $query = "SELECT * FROM products WHERE product_supplier = '$supplierId'";
    
    $db_result = $conn->query($query);  

    
    foreach ($db_result as $row)
    {            
     echo 
            '<div class="productpage-branches-container">
            <a href="productpage.php?product_id=' . $row['product_id'] . '&category=' . $row['product_branche'] . '">
            <div class="branches-product">
            <img src="' . $row['product_img_url'] . '" alt="">
            </div></a>' . '<div class="productpage-description-container">
            <div class="productpage-description">
            <h2>' . $row['product_name'] . '</h2>
            <p>' . $row['product_description'] . '</p>
            </div>
        </div>
    </div>';
        
}
?>
    </div>
</div>
<?php include "footer.php" ?>
</body>
</html>
