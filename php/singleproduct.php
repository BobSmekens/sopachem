<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css\sopachem.css" />
</head>
<body>


<?php
$productId = $_GET['product_id'];
include "db_connection.php";
$query = "SELECT * FROM products WHERE product_id = $productId";

$db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
     echo '<div class="productpage-main-container">
            <div class="productpage-product">
            <img src="' . $row['product_img_url'] . '" alt="">
            </div>' . '<div class="productpage-description-container">
            <div class="productpage-description">
            <h2>' . $row['product_name'] . '</h2>
            <p>' . $row['product_description'] . '</p>
            </div>
        </div>
    </div>';
        
}
$conn = null;
        
?>
    
</body>
</html>

