<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\sopachem.css" />
</head>
<body>

<?php

include "db_connection.php";
$query = "SELECT * FROM articles LIMIT 3";

$db_result = $conn->query($query);  

    foreach ($db_result as $row)
    {            
      echo '<div class="article-card">' .
    '<span class="articles-commas"><img src="img/quote.png" alt=""></span>' .
    '<h4>'. $row['article_title'] . '</h4>
    <p>'. $row['article_text'] .
    '</p>
    </div>';
        
}
$conn = null;
        
?>

</body>
</html>

