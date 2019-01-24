<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css\sopachem.css" />
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

<?php include "singleproduct.php";   ?>

<div class="productpage-articles-title">Our fanatics say:</div>
<div class="productpage-articles-container">
    <?php include "productpagearticlecard.php"; ?>
</div>

</body>
</html>

