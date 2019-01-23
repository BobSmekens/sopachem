<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/sopachem.css" />
  
</head>
<body>
    <?php
    $query = "SELECT product_id, product_rating, product_name, product_description, product_img_url, product_category FROM products";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        echo '<div class="product-card ' . $row['product_category'] . '">' .
            '<a href="php/productpage.php?user_ID=' . $row['product_id'] . '">' .
            '<img src="img/' . $row['product_img_url'] . '"></a>' .
            '<h2 class="product-name">' . $row['product_name'] . '</h2>' .
            '<p class="product-description">' . $row['product_description'] . ' <br><br> Rating: ' .
            $row['product_rating'] . '</p>' .
            '</div>';
    }     
?>


</body>
</html>
