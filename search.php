<?php
    $message = "";
    $db = mysqli_connect("127.0.0.1:4306","root","","domaci15");
    $products = [];
    $pretraga = $_GET['pretraga'];
    $result = $db->query("SELECT * FROM products WHERE product_name LIKE '%$pretraga%'");

    if($result->num_rows > 0){
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
    else{
        $message = "Nismo pronasli ni jedan rezultat";
    }
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
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
        <h1 class='text-center'>Trazeni rezultat</h1>

        <div class="row">
            <?php foreach ($products as $product):?>
                <div class="col-3">
                    <img src="./images/<?=$product['img_name']?>" alt="" width="200px">
                    <h3><?=$product['product_name']?></h3>
                    <p><?=$product['product_description']?></p>
                    <p>&euro; <?=$product['price']?></p>
                    <a rel="stylesheet" href="./product.php?id=<?=$product['id']?>" class="btn btn-primary">Vidi proizvod</a>
                </div>

            <?php endforeach?>

            <p class="text-danger"><?=$message?></p>
        </div>
    </div>
</div>

</div>

    

<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>