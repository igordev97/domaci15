<?php
require_once "./src/database.php";
require_once "./src/loadproduct.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./app.css">
</head>
<body>

<div class="container-fluid m-0 p-0">
<nav class="navbar bg-danger text-light ">
  <div class="container-fluid">
    <a class="navbar-brand text-light">IGGY Shop</a>
    <a class="nav-item nav-link active" href="./">Pocetna</a>
    <a class="nav-item nav-link" href="./newproduct.php">Dodaj proizvod</a>
    <form class="d-flex" role="search" action="search.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Pretrazi proizvod" aria-label="Search" name='pretraga'>
      <button class="btn btn-outline-light" type="submit">Pretrazi</button>
    </form>
  </div>
</nav></div>

<div class="container" id="products">
<div class="row">
    <div class="col-12">
    <h1 class='text-center'>Proizvod</h1>
        <img class='text-center' src="./images/<?= $product["img_name"]?>" alt="" width="400">
        <h2  class='text-center'><?= $product["product_name"]?></h2>
        <p  class='text-center lead'><?= $product["product_description"]?></p>
        <h2  class='text-center'>Cena <?= $product["price"]?> &euro;</h2>
    </div>
</div>

</div>

    

<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>