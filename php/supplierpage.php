<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css/sopachem.css" />
  
</head>
<body>
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
    $supplierId = $_GET['product_supplier'];

    include "db_connection.php";
    $query = "SELECT * FROM products WHERE product_supplier = '$supplierId'";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
     echo '<div class="productpage-branches-container">
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
?>


</body>
</html>
