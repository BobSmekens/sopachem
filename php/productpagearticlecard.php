<!DOCTYPE html>
<html>
<head>
    
    <title>productcard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="..\css/sopachem.css" />
  
</head>
<body>
    <?php
    $articleId = $_GET['category'];
    include "db_connection.php";
    $query = "SELECT * FROM articles WHERE article_branche = $articleId LIMIT 3";
    
    $db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
        echo '<div class="productpage-articlecard">
            <h2>' . $row['article_title'] . '</h2>
            <p>"' . $row['article_text'] . 
            '"</p>
        </div>';
            
    }     
?>


</body>
</html>
