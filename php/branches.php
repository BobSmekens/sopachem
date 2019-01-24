<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css/sopachem.css" />
  
</head>
<body class="branches-body">
<div class="navbar">
    <div class= "" id="branding"><a href="../index.php"><img src="..\img/sopachemlogo.png" alt=""></a></div>
    <div class="navbar-container">
        <a class="nav-link" href="">Watery fluids</a>
        <a class="nav-link" href="">Human juice</a>
        <a class="nav-link" href="">Nanobots</a>
        <a class="nav-link" href="">Scienceses</a>
     </div>
</div>

<?php 
$brancheId = $_GET['category'];
include "db_connection.php";
$query = "SELECT product_category FROM products WHERE product_branche = $brancheId LIMIT 1";
$db_result = $conn->query($query);  
foreach ($db_result as $row)
{            
echo '<div class="branche-title">All ' . $row['product_category'] . ' products</div>';
}
?>
    


    <?php
    $brancheId = $_GET['category'];
    include "db_connection.php";
    $query = "SELECT * FROM products WHERE product_branche = $brancheId";
    $db_result = $conn->query($query);  
    foreach ($db_result as $row)
    {            
     echo 

     '
     <div class="branches-wrapper"><div class="productpage-branches-container">
            <div class="branches-product">
            <a href="productpage.php?product_id=' . $row['product_id'] . '&category='. $row['product_branche'] .'
            ">
            <img src="' . $row['product_img_url'] . '" alt=""></a>
            </div>' . 
            '<div class="branches-description-container">
            <div class="branches-description">
            <h2>' . $row['product_name'] . '</h2>' .
            '<div class="product-rating"> Product rating: ' . $row['product_rating'] .

        '</div>' .
        '</div>
    </div></div></div>'


    ;    
}
?>

</body>
</html>
