<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/sopachem.css" />
  
</head>
<body>
    <?php
    include "db_connection.php";
    $query = "SELECT product_id, product_rating, product_name, product_description, product_img_url, product_category, product_branche FROM products";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        echo '<div class="product-card2 ' . $row['product_category'] . '">' .
            '<a href="productpage.php?product_id=' . $row['product_id'] .
             '&category='. $row['product_branche'] .'
            ">' .
            '<img src="..\img/' . $row['product_img_url'] . '"></a>' .
            '<h2 class="product-name">' . $row['product_name'] . '</h2>' .
            '<p class="product-description">' . $row['product_description'] . ' <br><br> Rating: ' .
            $row['product_rating'] . '/10</p>' .
            '</div>';
    }  
    
    $conn = NULL;
?>


</body>
</html>
