<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/sopachem.css" />
  
</head>
<body>
    <?php
    $query = "SELECT product_id, product_rating, product_name, product_description, product_img_url, product_category, product_supplier FROM products GROUP BY product_supplier";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        echo 
            '<a href="php/supplierpage.php?user_ID=' . $row['product_supplier'] . '">' .
            '<p>' . $row['product_supplier'] . '</p></a>';
            
    }     
?>


</body>
</html>
