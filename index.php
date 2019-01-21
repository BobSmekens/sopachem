<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\sopachem.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Sopachem database project</h1>

<form action="index.php" method="$_POST">
product_name: <input type="text" name="product_name_php"><br>
product_description: <input type="text" name ="product_description_php"><br>
<input type="submit">
</form>

<?php

//verbinding maken
$conn=mysqli_connect("localhost","root","","sopachem_clients");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$products = "SELECT * FROM products";
$clients = "SELECT * FROM clients";
$orders = "SELECT * FROM orders";
$image = "SELECT product_img_url FROM products";
$imgUrl_and_productName = "SELECT product_name, product_img_url FROM products";

$productResults = $conn->query($products);
$clientsAll = $conn->query($clients);
$showImage = $conn->query($image);
$productname_imgurl = $conn->query($imgUrl_and_productName);

/*
    if ($productResults->num_rows > 0) {
        // output data of each row
        while($row = $productResults->fetch_assoc()) {
            echo "id: " . $row["product_id"]. $row["product_img_url"] . " - Name: " . $row["product_name"]. " " . $row["product_description"]. $row["product_rating"]. " - branche: " . $row["product_branche"] . "<br>";
        }
    } else {
        echo "0 results";
    }
*/
/*
    if ($clientsAll->num_rows > 0){

    while($row = $clientsAll->fetch_assoc()) {
        echo "naam: " . $row["naam"] . "<br>";
        
        } 
    } else {
        echo "no results";
    }
*/
    
    
    if ($productname_imgurl->num_rows > 0){

        while($row = $productname_imgurl->fetch_assoc()) {
            echo "$row[product_name]" . "<br>" . "<img src=" . $row["product_img_url"] .">";
            } 
        } else {
            echo "no results";
        }

mysqli_close($conn);
?>

    
</body>
</html>